<?php
namespace App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes, HasFactory;
    protected $fillable = [
        'category_id',
        'sub_category_id',
        'title',
        'slug',
        'image',
        'details',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class,'sub_category_id');
    }
}
