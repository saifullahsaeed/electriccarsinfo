<?php

namespace App\Http\Controllers;


use App\Models\Companies;
use App\Models\Cars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\queries;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $cars = DB::table('cars')->orderBy('id', 'asc')->take(5)->get();
        $carCount = Cars::count();
        $menus = DB::table('menus')->orderBy('id', 'asc')->take(5)->get();
        $menuCount = DB::table('menus')->count();
        $companies = Companies::orderBy('id', 'asc')->take(5)->get();
        $companiesCount = Companies::count();
        return view('dashboard', compact('companies', 'menus', 'cars','carCount','menuCount','companiesCount'));
    }
    public function guests()
    {
        //cars data
        $cars = DB::table('cars')->orderBy('id', 'asc')->take(6)->get();
        foreach ($cars as $car) {
            $car->images = DB::table('images')->where('car_id', $car->id)->get();
            $car->company = DB::table('companies')->where('id', $car->company_id)->first();

        }
        return view('welcome', compact('cars'));
    }
    public function cars(){
        $cars = DB::table('cars')->orderBy('id', 'asc')->paginate(6);
        foreach ($cars as $car) {
            $car->images = DB::table('images')->where('car_id', $car->id)->get();
            $car->company = DB::table('companies')->where('id', $car->company_id)->first();
        }
        
        return view('Cars.cars', compact('cars'));
    }
    //contact us
    public function contact(){
        
        return view('pages.contact');
    }
    //submit contact us data
    public function contactpost(Request $request){
        $data = $request->all();
        try{
            Queries::create($data);
            return redirect()->back()->with('success', 'Your message has been sent successfully');
        }catch (\Exception $e){
            return redirect()->back()->with('error', 'Something went wrong');
        }
        
    }
    //details
    public function details($id){
        $car = DB::table('cars')->where('id', $id)->first();
        $car->images = DB::table('images')->where('car_id', $car->id)->get();
        $car->company = DB::table('companies')->where('id', $car->company_id)->first();
        return view('Cars.detail', compact('car'));
    }
    //about us
    public function about(){
        
        return view('pages.about');
    }
}