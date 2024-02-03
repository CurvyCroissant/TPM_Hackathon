<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullName',
        'email',
        'waNumber',
        'lineId',
        'gitId',
        'birthPlace',
        'birthDate',
        'cv',
        'flazzCard',
        'idCard'
    ];


    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
