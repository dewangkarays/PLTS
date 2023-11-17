<?php

namespace App\Http\Controllers\Admin;

use App\Service\UserService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sensors;

class AdminIndexController extends Controller
{
    public function index(Request $request)
    {
        $data['page_title'] = 'Dashboard';
        $data['sensors'] = Sensors::with('parameters')->whereHas('parameters')->get();
        return view('admin.dashboard', $data);
    }
}
