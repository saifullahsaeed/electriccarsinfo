<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Faker\Core\Uuid;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Rfc4122\UuidV4;

class CarsController extends Controller
{
    //authentication
    public function __construct()
    {
        $this->middleware('auth');
    }
    //insert page
    public function create()
    {
        $companies = DB::table('companies')->get();
        return view('Cars/index', compact('companies'));
    }
    //insert data into database
    public function store(Request $request)
    {
        $data = array(
            'id' => UuidV4::uuid4(),
            'name' => $request->name,
            'company_id' => $request->company,
            'price' => $request->price,
            'description' => $request->description,
            'year' => $request->year,
        );
        try{
        $carid = $data['id'];
        $fileUpload = $request->fileUpload;
            DB::table('cars')->insert($data);
            foreach ($fileUpload as $file) {
                $file = Storage::disk('local')->put('images', $file);
                $data = array(
                    'car_id' => $carid,
                    'path' => $file,
                    'name' => $file,
                );
                DB::table('images')->insert($data);
            }
            $request->session()->flash('message', 'Data has been added successfully!');
            $request->session()->flash('type', 'alert-success');
            return redirect('/home');
        }catch (\Exception $e){
            $request->session()->flash('message', 'Data has not been added successfully!');
            $request->session()->flash('type', 'alert-danger');
            return redirect('/home');
        }

    }
}