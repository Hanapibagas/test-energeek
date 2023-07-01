<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkilSet extends Model
{
    use HasFactory;
    protected $filable = [
        'user_id',
        'skill_id'
    ];

    public function Users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Skill()
    {
        return $this->belongsTo(Skill::class, 'skill_id');
    }
}
