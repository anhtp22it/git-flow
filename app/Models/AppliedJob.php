<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppliedJob extends Model
{
    use HasFactory;

    protected $table = 'applied_jobs';
    protected $primaryKey = 'id';

    protected $fillable = [
        'job_id',
        'user_id',
        'cv'
    ];

    public $timestamps = true;

    public function job() {
        return $this->belongsTo(Job::class, 'job_id');
    }
}
