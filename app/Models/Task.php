<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    //Jika nama model nya singular (task)
    //Artinya untuk table nya harus lah plural (tasks) ataupun sebaliknya
    //Jika table database singular (task)
    //Maka nama model haruslah plural (tasks)

    // protected $table = 'tasks_ku';

    protected $guarded = [];
}
