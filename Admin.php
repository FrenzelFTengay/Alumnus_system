<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'admins';

    // Primary key
    protected $primaryKey = 'AdminId';

    // Columns that can be mass assigned
    protected $fillable = [
        'FullName',
        'Email',
        'Password'
    ];

    // Enable timestamps
    public $timestamps = true;
}
