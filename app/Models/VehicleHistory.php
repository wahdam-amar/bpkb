<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleHistory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['vehicle_id', 'status', 'description'];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    // Todo : add belongs to through
    public function person()
    {
        # code...
    }
}
