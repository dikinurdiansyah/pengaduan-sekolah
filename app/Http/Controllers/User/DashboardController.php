<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Complaint;
use App\Models\Suggestion;

class DashboardController extends Controller {
    public function index() {
        $uid = auth()->id();
        $totalLaporan = Complaint::where('user_id',$uid)->count();
        $sedangDiproses = Complaint::where('user_id',$uid)->where('status','processed')->count();
        $selesai = Complaint::where('user_id',$uid)->where('status','resolved')->count();
        $complaints = Complaint::where('user_id',$uid)->latest()->take(5)->get();
        $suggestions = Suggestion::where('user_id',$uid)->latest()->take(5)->get();
        return view('user.dashboard', compact('totalLaporan','sedangDiproses','selesai','complaints','suggestions'));
    }
}