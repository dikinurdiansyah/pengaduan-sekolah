<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\{Complaint,Suggestion,User,Category};
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller {
    public function index() {
        $totalComplaints = Complaint::count();
        $totalSuggestions = Suggestion::count();
        $pendingComplaints = Complaint::where('status','pending')->count();
        $processedComplaints = Complaint::where('status','processed')->count();
        $resolvedComplaints = Complaint::where('status','resolved')->count();
        $rejectedComplaints = Complaint::where('status','rejected')->count();
        $totalUsers = User::where('role','user')->count();
        
        $recentComplaints = Complaint::with(['user','category'])->latest()->take(10)->get();
        $recentSuggestions = Suggestion::with(['user','category'])->latest()->take(10)->get();
        
        // SQLite compatible query
        $complaintsByMonth = DB::table('complaints')
            ->select(DB::raw("CAST(strftime('%m', created_at) AS INTEGER) as month"), DB::raw('COUNT(*) as count'))
            ->whereRaw("strftime('%Y', created_at) = ?", [date('Y')])
            ->groupBy('month')
            ->orderBy('month')
            ->get();
        
        $complaintsByCategory = Category::where('type','complaint')->withCount('complaints')->get();
        
        return view('admin.dashboard', compact(
            'totalComplaints','totalSuggestions','pendingComplaints',
            'processedComplaints','resolvedComplaints','rejectedComplaints','totalUsers',
            'recentComplaints','recentSuggestions',
            'complaintsByMonth','complaintsByCategory'
        ));
    }
}