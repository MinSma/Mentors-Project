<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mentor() {
        return $this->belongsTo(Mentor::class);
    }

    public function student() {
        return $this->belongsTo(Student::class);
    }

}
