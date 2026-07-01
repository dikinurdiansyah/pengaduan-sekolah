<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {
    use HasFactory, Notifiable;

    protected $fillable = ['name','email','password','nis','role','phone','kelas','status'];
    protected $hidden = ['password','remember_token'];

    protected function casts(): array {
        return ['email_verified_at'=>'datetime','password'=>'hashed'];
    }

    public function complaints(): HasMany { return $this->hasMany(Complaint::class); }
    public function suggestions(): HasMany { return $this->hasMany(Suggestion::class); }
    public function appNotifications(): HasMany { return $this->hasMany(AppNotification::class); }
    public function isAdmin(): bool { return $this->role === 'admin'; }
}