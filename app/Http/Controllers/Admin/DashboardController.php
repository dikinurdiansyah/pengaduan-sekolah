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
        
        // SQLite compatible
        $monthNames = ['','Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'];
        $rawMonths = DB::select("SELECT CAST(strftime('%m', created_at) AS INTEGER) as month, COUNT(*) as count FROM complaints WHERE strftime('%Y', created_at) = ? GROUP BY month ORDER BY month ASC", [date('Y')]);
        
        $monthLabels = [];
        $monthData = [];
        foreach ($rawMonths as $row) {
            $monthLabels[] = $monthNames[$row->month] ?? 'Bln '.$row->month;
            $monthData[] = (int)$row->count;
        }
        
        $complaintsByCategory = Category::where('type','complaint')->withCount('complaints')->get();
        $catLabels = $complaintsByCategory->pluck('name')->toArray();
        $catData = $complaintsByCategory->pluck('complaints_count')->map(function($v){ return (int)$v; })->toArray();
        
        return view('admin.dashboard', compact(
            'totalComplaints','totalSuggestions','pendingComplaints',
            'processedComplaints','resolvedComplaints','rejectedComplaints','totalUsers',
            'recentComplaints','recentSuggestions',
            'monthLabels','monthData','catLabels','catData'
        ));
    }
}