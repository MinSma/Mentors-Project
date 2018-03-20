<?php
declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 * @package App\Models
 */
class Student extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'first_name',
        'last_name',
        'gender',
        'age',
        'city',
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'remember_token'
    ];
}
