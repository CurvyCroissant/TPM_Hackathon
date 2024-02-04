<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;

    protected $fillable = [
        'member1',
        'member2',
        'member3',
        'member4',
        // 'group_id'
    ];

    protected $table = 'members';
    
    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id', 'id');
    }
}
