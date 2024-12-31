<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['id', 'todo_name', 'completed'];

    public function getCreatedAtAttribute($val)
    {
        return Carbon::parse($val)->format("Y-m-d H:i:s");
    }

    public function getUpdatedAtAttribute($val)
    {
        return Carbon::parse($val)->format("Y-m-d H:i:s");
    }
}
