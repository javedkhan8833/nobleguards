<?php

namespace App\Models;

use App\Models\Upcoming;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
    protected $guarded = [];

    //  public function dates(): HasMany
    //  {
    //      return $this->hasMany(Comment::class, 'foreign_key', 'local_key');
    //  }
    public function dates()
    {
        return $this->hasMany(Upcoming::class, 'course_id', 'id');
    }
}
