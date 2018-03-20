<?php
declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mentor
 * @package App\Models
 */
class Mentor extends Model
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
        'topic',
        'fixed_hour_price',
        'rating'
        ];

    /**
     * @var array
     *
     */
    protected $hidden = [
        'remember_token'
    ];
}