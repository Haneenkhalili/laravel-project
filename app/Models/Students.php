<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable =[

        'name',
        'email',
        'address',
        'password'
    ];
    public function courses(){

        return $this->hasManyThrough(Courses::class,StudentCourse::class,'student_id','id','id','course_id');
    }
}
