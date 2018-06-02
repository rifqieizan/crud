<?php

namespace App\Http\Controllers;

use App\Model\Models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;

class HomeController extends Controller
{
    public function index()
    {
    	return view('dashboard.dashboard');
    }
    public function home ()
    {
    	return view('dashboard.home');
    }
    public function crud()
    {
        try{
            return view('dashboard.crud');
        }catch(\Exception $e){
            \Log::error('File: '.$e->getFile().' Line: '.$e->getLine().' Message: '.$e->getMessages());
        }
    }

    public function create(Request $request)
    {
    	$atribute=$request->all();
    	$models=new Models;
    	$models->setAtribute($atribute);
    	$models->save();
    	return view ('dashboard.crud');
    }

    public function bookingData()
    {
        try{
            $models = Models::get();
            return Datatables::of($models)->addColumn('action', function($mahasiswa) {
                 return '<a href="' . route("edit", $models->id) . '" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                        <a href="' . route("delete", $models->id) . '" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            })->make(true);
        }catch(\Exception $e){
            \Log::error('File: '.$e->getFile().' Line: '.$e->getLine().' Message: '.$e->getMessage());
        }

    }
}
