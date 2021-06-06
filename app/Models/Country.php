<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Returns the states that belong to this country.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function states()
    {
        return $this->hasMany(State::class);
    }

    /**
     * Returns the largest state that belongs to this country.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function largestState()
    {
        return $this->hasOne(State::class)->latestOfMany('population');
    }
}
