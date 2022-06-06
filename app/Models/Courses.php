<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/***/
class Courses extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $fillable =[
        'name',
        'prof_name',

    ];


    public function Student(){
        return $this->belongsToMany(Students::class)->using(StudentCourse::class);
    }
    public function Project(){
        return $this->hasMany(Project::class,'course_id','id');
    }
}
