<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;


    protected $table ='tasks';
    protected $fillable =['title','description','priority','due_date','completed','completed_at'];
}
