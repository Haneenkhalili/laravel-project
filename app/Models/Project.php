<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'project';
    protected $fillable =[

        'name',
        'student_id',
        'course_id',

    ];

    public function Courses(){
        return $this->belongsTo(Courses::class);

    }
    public function Tasks(){
        return $this->hasMany(Task::class);
    }

}
