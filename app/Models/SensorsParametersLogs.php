<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laililmahfud\Adminportal\Traits\HasDatatable;
use Laililmahfud\Adminportal\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SensorsParametersLogs extends Model
{
    use HasFactory,HasUuid,HasDatatable;

    protected $table = "sensors_parameters_logs";
    protected $fillable = ["sensors_parameters_id","value","deleted_at"];
}
