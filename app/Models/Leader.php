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
        'cv_file_path',
        'flazzCard_file_path',
        'idCard_file_path',
        // 'group_id'
    ];


    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
