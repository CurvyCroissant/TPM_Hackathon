<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'groupName',
        'password',
        'leader_id',
        'members_id'
    ];

    protected $table = 'group';

    public function leader()
    {
        return $this->hasOne(Leader::class);
    }

    public function members()
    {
        return $this->hasOne(Members::class);
    }
    
}
