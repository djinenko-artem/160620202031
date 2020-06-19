<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Request $request)
    {
        $user_id = Auth::user()->id;
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'street' => 'required|max:255',
            'area' => 'required',
        ]);
        $model = new Address();
        $model->name = $request->post('name');
        $model->street = $request->post('street');
        $model->house = $request->post('house');
        $model->additional_info = $request->post('additional_info');
        $model->user_id = $user_id;
        $model->area_id = $request->post('area');
        $model->save();
        return redirect()->route('home')->with('success', 'Address saved!');;
    }

    public function destroy(Request $request)
    {
        $address = Address::find($request->post('id'));
        return $address->delete();
    }
}
