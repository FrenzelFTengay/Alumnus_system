<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'alumni';

    // Primary key
    protected $primaryKey = 'AlumniId';

    // Fillable columns
    protected $fillable = [
        'FullName',
        'GraduationYear',
        'Section',
        'Email',
        'Password',
        'ContactNumber',
        'CurrentOccupationEducation',
        'Status',
        'SchoolId',
        'AnnouncementId',
        'YearId',
        'BatchId'
    ];

    // Manage timestamps
    public $timestamps = true;
}
