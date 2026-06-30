<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
protected $table = 'job_portals';

protected $fillable = [
    'title',
    'category',
    'job_nature',
    'vacancy',
    'salary',
    'location',
    'description',
    'benefits',
    'responsibility',
    'qualifications',
    'keywords',
    'company',
    'website',
];
}
