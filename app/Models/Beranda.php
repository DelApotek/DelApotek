<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beranda extends Model
{
    use HasFactory;
    protected $table = 'beranda';
    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    public $timestamps = false;
}
