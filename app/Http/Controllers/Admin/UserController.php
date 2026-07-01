<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {
    public function index(Request $r) {
        $q = User::query();
        if ($r->search) $q->where('name','like','%'.$r->search.'%');
        if ($r->role) $q->where('role',$r->role);
        $users = $q->latest()->paginate(15);
        return view('admin.users.index', compact('users'));
    }
    public function create() { return view('admin.users.create'); }
    public function store(Request $r) {
        $r->validate(['name'=>'required','email'=>'required|email|unique:users','password'=>'required|min:8','role'=>'required|in:admin,user']);
        User::create(['name'=>$r->name,'email'=>$r->email,'password'=>Hash::make($r->password),'role'=>$r->role,'nis'=>$r->nis,'phone'=>$r->phone,'kelas'=>$r->kelas]);
        return redirect()->route('admin.users.index')->with('success','User ditambahkan!');
    }
    public function edit(User $user) { return view('admin.users.edit', compact('user')); }
    public function update(Request $r, User $user) {
        $r->validate(['name'=>'required','email'=>'required|email|unique:users,email,'.$user->id,'role'=>'required|in:admin,user','status'=>'required|in:active,inactive']);
        $user->update($r->only(['name','email','role','nis','phone','kelas','status']));
        return redirect()->route('admin.users.index')->with('success','User diperbarui!');
    }
    public function destroy(User $user) {
        $user->delete();
        return back()->with('success','User dihapus!');
    }
}