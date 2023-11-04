<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavedJob extends Model
{
    use HasFactory;

    protected $table = 'saved_job';
    protected $primaryKey = 'id';

    protected $fillable = [
        'job_id',
        'user_id',
    ];

    public $timestamps = true;

    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }
}
