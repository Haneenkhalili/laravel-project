<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = 'task';
    protected $fillable =[

        'name',
        'project_id',
        'order',


    ];
    public function Project(){
        return $this->belongsTo(Project::class);
    }
}