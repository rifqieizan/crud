<?php

namespace App\Http\Controllers;

use App\Model\Data;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.data');
    }

    public function creates(Request $request)
    {
        //

        $atribute=$request->All();
        $data=new Data;
        $data->setAtribute($request);
        $data->save();

        return view('dashboard.data');
    }

    public function delete(Request $request)
    {
        //
        $atribute = $request->all();
        Data::find($atribute['id'])->delete();
        return view('dashboard.data');

    }


    public function edit($id, Request $request)
    {
        //
        $atribute=$request->all();
        $data=data::find($id);
        return view('dashboard.edit')->with('id',$id)->with('data',$data);
    }




    public function update(Request $request, $id)
    {
        //
        $atribute=$request->all();
        $data=data::find($id);
        $data->setAtribute($atribute);
        $data->save();
        return view('dashboard.data');
    }

    public function destroy($id)
    {
        //
    }

    public function bookingData()
    {
        $data = Data::Join('users','users.id','=','data.user_id')->get();
        // right join
        //$data = Data::rightJoin('users','users.id','=','data.user_id')->get();
        // left join
        //$data = Data::leftJoin('users','users.id','=','data.user_id')->get();
        return Datatables::of($data)->addColumn('action', function($data) {
             return '
                     <a href="' .route("edit",$data->id) .'" class="btn btn-xs btn-primary">
                        <i class="glyphicon glyphicon-edit"></i> Read</a>
                    <a href="' .route("edit",$data->id) .'" class="btn btn-xs btn-primary">
                        <i class="glyphicon glyphicon-edit"></i> Edit</a>
                    <a onclick="javascript:deletesData('.$data->id.')" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i>Delete</a>';
        })->make(true);

    }
}


