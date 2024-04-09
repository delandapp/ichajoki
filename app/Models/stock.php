<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    public $incrementing = true;
    protected $table = "stock";
    protected $primaryKey = "id";
    protected $keyType = "int";
    protected $guarded = ['id'];
}
