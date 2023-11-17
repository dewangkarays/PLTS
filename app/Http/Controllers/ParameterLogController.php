<?php

namespace App\Http\Controllers;

use App\Models\SensorsParametersLog;
use Illuminate\Http\Request;
use Laililmahfud\Adminportal\Controllers\ApiController;

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
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
