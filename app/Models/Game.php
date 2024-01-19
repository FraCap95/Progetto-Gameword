<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'category', 'description', 'img', 'price', 'user_id'
    ];
    
    public function user(){

        return $this->belongsTo(User::class);
    }

    public function consoles(){
        
        return $this->belongsToMany(Console::class);
    }
}
