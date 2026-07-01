<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\AppNotification;

class NotificationController extends Controller {
    public function index() {
        $notifications = AppNotification::where('user_id',auth()->id())->latest()->get();
        return view('user.notifications.index', compact('notifications'));
    }
    public function markRead($id) {
        AppNotification::where('id',$id)->where('user_id',auth()->id())->update(['is_read'=>true]);
        return back();
    }
}