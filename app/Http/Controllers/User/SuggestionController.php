<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Suggestion;
use App\Models\AppNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SuggestionController extends Controller {
    public function index() {
        $suggestions = Suggestion::where('user_id',auth()->id())->latest()->get();
        return view('user.suggestions.index', compact('suggestions'));
    }
    public function create() {
        $categories = Category::where('type','suggestion')->get();
        return view('user.suggestions.create', compact('categories'));
    }
    public function store(Request $request) {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|max:255',
            'description' => 'required',
            'attachment' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $path = null;
        if ($request->hasFile('attachment')) $path = $request->file('attachment')->store('suggestions','public');
        $s = Suggestion::create([
            'suggestion_no' => '#SAR-'.date('Y').'-'.Str::padLeft(Suggestion::count()+1,4,'0'),
            'user_id' => auth()->id(),
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'attachment' => $path,
        ]);
        AppNotification::create(['user_id'=>auth()->id(),'type'=>'suggestion','title'=>'Saran Dibuat','message'=>'Saran '.$s->suggestion_no.' berhasil dibuat.']);
        return redirect()->route('user.suggestions.index')->with('success','Saran berhasil dikirim!');
    }
}