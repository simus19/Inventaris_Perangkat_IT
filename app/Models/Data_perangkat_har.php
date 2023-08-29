<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_perangkat_har extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function master_perangkat_it()
    {
        return $this->belongsTo(Master_perangkat_it::class, 'master_perangkat_its_id');
    }
}
