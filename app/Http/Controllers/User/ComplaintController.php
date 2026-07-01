<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Complaint;
use App\Models\AppNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComplaintController extends Controller {
    public function index() {
        $complaints = Complaint::where('user_id',auth()->id())->latest()->get();
        return view('user.complaints.index', compact('complaints'));
    }
    public function create() {
        $categories = Category::where('type','complaint')->get();
        return view('user.complaints.create', compact('categories'));
    }
    public function store(Request $request) {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|max:255',
            'description' => 'required',
            'location' => 'nullable|max:255',
            'attachment' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $path = null;
        if ($request->hasFile('attachment')) $path = $request->file('attachment')->store('complaints','public');
        $c = Complaint::create([
            'complaint_no' => '#PGD-'.date('Y').'-'.Str::padLeft(Complaint::count()+1,4,'0'),
            'user_id' => auth()->id(),
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'attachment' => $path,
        ]);
        AppNotification::create(['user_id'=>auth()->id(),'type'=>'complaint','title'=>'Pengaduan Dibuat','message'=>'Pengaduan '.$c->complaint_no.' berhasil dibuat.']);
        return redirect()->route('user.complaints.index')->with('success','Pengaduan berhasil dibuat!');
    }
    public function show(Complaint $complaint) {
        if ($complaint->user_id !== auth()->id()) abort(403);
        return view('user.complaints.show', compact('complaint'));
    }
}