<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getAreasByCityAjax(Request $request)
    {
        $id = $request->post('value');
        $model = City::FindOrFail($id);
        return $model->areas;
    }
}
