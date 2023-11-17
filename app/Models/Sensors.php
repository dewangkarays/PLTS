<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laililmahfud\Adminportal\Traits\HasUuid;

class Sensors extends Model
{
    use HasFactory, HasUuid, SoftDeletes;
    protected $fillable = ['name'];

    public function parameters()
    {
        return $this->hasMany(SensorsParameters::class, 'sensors_id');
    }
}
