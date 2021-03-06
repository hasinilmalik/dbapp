<?php

namespace App\Models;

use App\Models\Achievement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    protected $guarded = ['_token'];
    use HasFactory;
    
    public function achievements(){
        return $this->hasMany(Achievement::class);
    }
    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
