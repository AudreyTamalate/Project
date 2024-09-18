<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkFees extends Model
{
    use HasFactory;
    protected $fillable = [
        'parkingLotId',
        'vehicleModel',
        'initialEntryAmount',
        'increment',
        'maxFlatAmount',
        'penaltyDuration'
    ];
}
