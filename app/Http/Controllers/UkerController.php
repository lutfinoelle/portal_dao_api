<?php

namespace App\Http\Controllers;

use App\Models\Uker;
use Illuminate\Http\Request;

class UkerController extends Controller
{
    public function api(Request $request)
    {
        try {

            header('Access-Control-Allow-Origin: *');
            
            $branch_code = $request->branch_code;
            $branch = Uker::where('kode_uker', $branch_code)->first();
            
            if ($branch) {
                return response()->json([
                    'message' => 'success',
                    'data' => $branch,
                ], 200);
            } else {
                return response()->json([
                    'message' => 'branch not found',
                ], 404);
            }

        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    public function update(Request $request)
    {
        try {

            header('Access-Control-Allow-Origin: *');
            
            $branch_code = $request->branch_code;
            $branch = Uker::where('kode_uker', $branch_code)->first();
            
            if ($branch) {
                $branch->update([
                    'tipe_uker' => $request->branch_type,
                ]);
                return response()->json([
                    'message' => 'success',
                    'data' => $branch,
                ], 200);
            } else {
                return response()->json([
                    'message' => 'branch not found',
                ], 404);
            }

        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
            ], 500);
        }
    }
}
