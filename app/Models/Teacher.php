<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    private $table = 'teachers';
    protected $primaryKey = 'id';
    protected $fillable = [
        'teacher_name',
        'teacher_dob',
        'teacher_email',
        'teacher_phone',
        'teacher_address',
        'gender_id',
        'schedule_id',
        'subject_id'
    ];

    public function genders(){
        return $this->belongsTo(Gender::class, 'gender_id');
    }

    public function schedules(){
        return $this->belongsTo(Schedule::class, 'schedule_id');
    }

    public function subjects(){
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    use HasFactory;

    //protected $guarded = ['profile_img'];
}
