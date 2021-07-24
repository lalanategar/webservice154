<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    // protected $primaryKey = 'id';
    // public $timestamps = true;

    // protected $fillable = ['status', 'course_id', 'user_id'];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }   
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }   
}
