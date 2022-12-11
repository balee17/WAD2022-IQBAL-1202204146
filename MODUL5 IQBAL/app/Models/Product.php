<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'showrooms';
    protected $guarded = ['id'];
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'name',
        'no_hp',
        'email',
        'password',
        'created_at',
        'update_at'
    ];
    public function user()
    {
        return $this->hasMany(User::class);
    }
}