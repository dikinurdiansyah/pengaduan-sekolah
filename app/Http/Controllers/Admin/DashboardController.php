<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\{Complaint,Suggestion,User,Category};

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
        
        // Prepare chart data - SIMPLE FORMAT
        $complaintsByMonth = Complaint::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->whereYear('created_at',date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->get();
        
        $monthLabels = [];
        $monthData = [];
        $monthNames = ['','Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'];
        
        foreach($complaintsByMonth as $m) {
            $monthLabels[] = $monthNames[(int)$m->month];
            $monthData[] = (int)$m->count;
        }
        
        $complaintsByCategory = Category::where('type','complaint')->withCount('complaints')->get();
        
        $catLabels = [];
        $catData = [];
        foreach($complaintsByCategory as $cat) {
            $catLabels[] = $cat->name;
            $catData[] = (int)$cat->complaints_count;
        }
        
        return view('admin.dashboard', compact(
            'totalComplaints','totalSuggestions','pendingComplaints',
            'processedComplaints','resolvedComplaints','rejectedComplaints','totalUsers',
            'recentComplaints','recentSuggestions',
            'monthLabels','monthData','catLabels','catData'
        ));
    }
}