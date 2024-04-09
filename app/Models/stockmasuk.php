<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stockmasuk extends Model
{
    use HasFactory;
    public $incrementing = true;
    protected $table = "stock_masuk";
    protected $primaryKey = "id";
    protected $keyType = "int";
    protected $guarded = ['id'];
}
