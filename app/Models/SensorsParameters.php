<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laililmahfud\Adminportal\Traits\HasUuid;

class SensorsParameters extends Model
{
    use HasFactory, HasUuid;
    protected $fillable = ['sensors_id', 'name', 'unit', 'parameter'];
    protected $appends = ['last_value'];

    public function sensor()
    {
        return $this->hasOne(Sensors::class, 'id', 'sensors_id');
    }

    public function getLastValueAttribute()
    {
        $value = 0;
        $last_log = SensorsParametersLog::whereSensorsParametersId($this->id)->orderBy('id', 'desc')->first();
        if ($last_log) {
            $value = $last_log->value;
        }
        return $value;
    }
}
