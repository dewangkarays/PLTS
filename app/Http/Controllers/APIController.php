<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laililmahfud\Adminportal\Traits\JsonResponse;

class APIController extends Controller
{
    use JsonResponse;

    public function sendError($message)
    {
        return response()->json([
            'status' => 422,
            'message' => $message,
        ], 422);
    }

    public function sendSuccess($data, $message = "success", $paginate_data = [])
    {
        if ($paginate_data) {
            return response()->json([
                'status' => 200,
                'message' => $message,
                'data' => $data,
                'current_page' => $paginate_data->currentPage(),
                'from' => $paginate_data->firstItem(),
                'to' => $paginate_data->lastItem(),
                'last_page' => $paginate_data->lastPage(),
                'per_page' => $paginate_data->perPage(),
                'total' => $paginate_data->total(),
            ]);
        } else {
            return response()->json([
                'status' => 200,
                'message' => $message,
                'data' => $data,
            ]);
        }
    }
}
