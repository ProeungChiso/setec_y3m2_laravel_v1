<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    public function teachers(){
        return $this->hasMany(Teacher::class, 'schedule_id');
    }
}
