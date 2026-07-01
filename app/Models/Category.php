<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model {
    protected $fillable = ['name','description','type'];
    public function complaints(): HasMany { return $this->hasMany(Complaint::class); }
    public function suggestions(): HasMany { return $this->hasMany(Suggestion::class); }
}