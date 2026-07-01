<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller {
    public function index() {
        $categories = Category::withCount(['complaints','suggestions'])->get();
        return view('admin.categories.index', compact('categories'));
    }
    public function store(Request $r) {
        $r->validate(['name'=>'required|max:255','type'=>'required|in:complaint,suggestion']);
        Category::create($r->all());
        return back()->with('success','Kategori ditambahkan!');
    }
    public function update(Request $r, Category $category) {
        $r->validate(['name'=>'required|max:255','type'=>'required|in:complaint,suggestion']);
        $category->update($r->all());
        return back()->with('success','Kategori diperbarui!');
    }
    public function destroy(Category $category) {
        $category->delete();
        return back()->with('success','Kategori dihapus!');
    }
}