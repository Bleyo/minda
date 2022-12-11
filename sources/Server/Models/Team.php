<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class Team extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class, 'subscribers');
    }

    public function contents()
    {
        return $this->belongsToMany(Milestone::class, 'contents');
    }
}
