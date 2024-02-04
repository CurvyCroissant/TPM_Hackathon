<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leader extends Model
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
        'idCard',
        'group_id'
    ];


    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
