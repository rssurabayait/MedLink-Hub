<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test-pgsql', function () {
    try {
        $database = DB::connection('pgsql');

        $query = 'select * from master_employee me';

        $result = $database->select($query);

        return response([
            'success' => true,
            'data' => $result,
            'message' => 'Successfully get employee data'
        ], 200);
    } catch (\Throwable $th) {
        dd($th);
    }
});

Route::get('/test-oracle', function () {
    try {
        $database = DB::connection('oracle');

        $query = 'select * from mst_ambulance ma';

        $result = $database->select($query);

        return response([
            'success' => true,
            'data' => $result,
            'message' => 'Successfully get ambulance data'
        ], 200);
    } catch (\Throwable $th) {
        dd($th);
    }
});
