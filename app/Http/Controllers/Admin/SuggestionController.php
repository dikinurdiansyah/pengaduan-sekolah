<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\{Suggestion,AppNotification};
use Illuminate\Http\Request;

class SuggestionController extends Controller {
    public function index(Request $r) {
        $q = Suggestion::with(['user','category']);
        if ($r->status) $q->where('status',$r->status);
        if ($r->search) $q->where('title','like','%'.$r->search.'%');
        $suggestions = $q->latest()->paginate(15);
        return view('admin.suggestions.index', compact('suggestions'));
    }
    public function show(Suggestion $suggestion) {
        $suggestion->load(['user','category']);
        return view('admin.suggestions.show', compact('suggestion'));
    }
    public function updateStatus(Request $r, Suggestion $suggestion) {
        $r->validate(['status'=>'required|in:pending,reviewed,implemented,rejected','admin_notes'=>'nullable']);
        $suggestion->update(['status'=>$r->status,'admin_notes'=>$r->admin_notes,'reviewed_by'=>auth()->id(),'reviewed_at'=>now()]);
        AppNotification::create(['user_id'=>$suggestion->user_id,'type'=>'suggestion_status','title'=>'Status Diperbarui','message'=>'Saran '.$suggestion->suggestion_no.' sekarang: '.$r->status]);
        return back()->with('success','Status berhasil diperbarui!');
    }
}