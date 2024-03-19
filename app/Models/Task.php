<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
       'title',
       'description',
       'due_date',
       'status',
    ];

    /**
     * Get all of the comments for the task
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tags(): HasMany
    {
        return $this->hasMany(Tag::class, 'task_id', 'id');
    }

}
