<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Complaint extends Model {
    protected $fillable = ['complaint_no','user_id','category_id','title','description','location','attachment','status','admin_notes','processed_by','processed_at'];
    protected $casts = ['processed_at'=>'datetime'];

    public function user(): BelongsTo { return $this->belongsTo(User::class); }
    public function category(): BelongsTo { return $this->belongsTo(Category::class); }
    public function processor(): BelongsTo { return $this->belongsTo(User::class,'processed_by'); }
}