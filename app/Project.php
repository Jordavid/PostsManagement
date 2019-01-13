<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Task;

class Project extends Model
{

    /* protected $guarded = []; */
    protected $fillable = [
        'title', 'description', 'owner_id'
    ];

    public function tasks(){

        return $this->hasMany(Task::class);

    }

    public function addTask($description)
    {
        $validated = request()->validate(['description' => 'required|min:3']);

        $this->tasks()->create($validated);
    }

    
}
