<?php

namespace App\Http\Controllers;

use App\Models\DataBin;
use Illuminate\Http\Request;

class DataBinController extends Controller
{
    public function databin($id)
    {
        $databin = DataBin::where('id_tong', $id)->first();

        // return json response
        return response()->json([
            'success' => true,
            'message' => 'Data Bin',
            'data' => $databin
        ], 200);
    }
}
