<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    
    # Get Data Guru
    public function list_guru()
    {
        $data = Guru::all();

        return response()->json([
            "status" => true,
            "message" => "Daftar Guru",
            "data" => $data
        ], 200);
    }

}
