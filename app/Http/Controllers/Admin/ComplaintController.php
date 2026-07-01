<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\{Complaint,AppNotification};
use Illuminate\Http\Request;

class ComplaintController extends Controller {
    public function index(Request $r) {
        $q = Complaint::with(['user','category']);
        if ($r->status) $q->where('status',$r->status);
        if ($r->search) $q->where('title','like','%'.$r->search.'%');
        $complaints = $q->latest()->paginate(15);
        return view('admin.complaints.index', compact('complaints'));
    }
    public function show(Complaint $complaint) {
        $complaint->load(['user','category','processor']);
        return view('admin.complaints.show', compact('complaint'));
    }
    public function updateStatus(Request $r, Complaint $complaint) {
        $r->validate(['status'=>'required|in:pending,processed,resolved,rejected','admin_notes'=>'nullable']);
        $complaint->update(['status'=>$r->status,'admin_notes'=>$r->admin_notes,'processed_by'=>auth()->id(),'processed_at'=>now()]);
        AppNotification::create(['user_id'=>$complaint->user_id,'type'=>'complaint_status','title'=>'Status Diperbarui','message'=>'Pengaduan '.$complaint->complaint_no.' sekarang: '.$r->status]);
        return back()->with('success','Status berhasil diperbarui!');
    }
}