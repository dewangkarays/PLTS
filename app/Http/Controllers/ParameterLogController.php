<?php

namespace App\Http\Controllers;

use App\Models\SensorsParametersLog;
use Illuminate\Http\Request;
use App\Http\Controllers\APIController;
use App\Models\SensorsParameters;
use Illuminate\Support\Str;

/**
 * @group Sensor Parameter
 *
 *
 */
class ParameterLogController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * @authenticated
     *
     * @bodyParam parameters array required Example. [{"parameter":"batt_last","value":"99.99"},{"parameter":"batt_level","value":"99.99"}]
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'parameters.*' => 'required|array',
            'parameters.*.parameter' => 'required|string|exists:sensors_parameters,parameter',
            'parameters.*.value' => 'required|numeric',
        ]);

        $datas = [];
        foreach ($request->parameters as $v) {
            $sensor_parameter = SensorsParameters::whereParameter($v['parameter'])->first();
            $datas[] = [
                'uuid' => Str::uuid(),
                'sensors_parameters_id' => $sensor_parameter->id,
                'value' => $v['value'],
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        SensorsParametersLog::insert($datas);

        return $this->sendMessage('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SensorsParametersLogs  $sensorsParametersLogs
     * @return \Illuminate\Http\Response
     */
    public function show(SensorsParametersLog $sensorsParametersLogs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SensorsParametersLogs  $sensorsParametersLogs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SensorsParametersLog $sensorsParametersLogs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SensorsParametersLogs  $sensorsParametersLogs
     * @return \Illuminate\Http\Response
     */
    public function destroy(SensorsParametersLog $sensorsParametersLogs)
    {
        //
    }
}
