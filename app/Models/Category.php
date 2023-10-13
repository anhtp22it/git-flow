<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'icon'
    ];

    public $timestamps = true;

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    public static function getCategories()
    {
        return static::pluck('title', 'id')->all();
    }
}
