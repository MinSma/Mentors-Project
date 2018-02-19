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
        'first_name',
        'last_name',
        'gender',
        'age',
        'city',
        'topic',
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token'
    ];
}
