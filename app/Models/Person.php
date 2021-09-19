<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'person';

    /**
     * Get all of the vehicles for the Person
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
