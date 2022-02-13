<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MenuModel;
use Illuminate\Support\Facades\DB;

class MenusController extends Controller
{
    //authentication
    public function __construct()
    {
        $this->middleware('auth');
    }

    //insert data into database
    public function store(Request $request)
    {
        $data = array(
            'name' => $request->name,
        );

        try {
            DB::table('menus')->insert($data);
            $request->session()->flash('message', 'Data has been added successfully!');
            $request->session()->flash('type', 'alert-success');
            return redirect('/home');
        } catch (\Exception $e) {
            $request->session()->flash('message', 'Something Went Wrong');
            $request->session()->flash('type', 'alert-danger');
            return redirect('/home');
        };
        //alert message

    }
    //delete data from database
    public function destroy(Request $request, $id)
    {

        MenuModel::find($id)->delete();
        try {
            $request->session()->flash('message', 'Data has been deleted successfully!');
            $request->session()->flash('type', 'alert-success');
            return redirect('/home');
        } catch (\Exception $e) {
            $request->session()->flash('message', 'Something Went Wrong');
            $request->session()->flash('type', 'alert-danger');
            return redirect('/home');
        };
    }
}