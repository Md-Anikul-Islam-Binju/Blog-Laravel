<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategory extends Model
{
    use SoftDeletes, HasFactory;
    protected $fillable = [
        'category_id',
        'name',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
