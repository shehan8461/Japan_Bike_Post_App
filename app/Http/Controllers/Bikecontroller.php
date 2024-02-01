<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bike;

class Bikecontroller extends Controller
{
    public function store(Request $request){

        $bike=new Bike;

        //validate inputs
        $this->validate($request,[
            'engine'=>'required|max:100|min:3',
        ]);

        $bike->name=$request->name;
        $bike->bikename=$request->bname;
        $bike->location=$request->location;
        $bike->milage=$request->milage;
        $bike->engine_capacity=$request->engine;
        $bike->price=$request->price;
        $bike->phone_number=$request->phone;
        $bike->discription=$request->discription;

        $bike->save();

//read
        $bike=Bike::all();
        return redirect('/posts');

    }
    public function getdata($id){
            $data=bike::find($id);

            return view('update')->with('bikedata',$data);
    }

   //update data
   
   public function updatedata(Request $request){
                $id=$request->id;

                $name=$request->name;
                $bname=$request->bname;
                $location=$request->location;
                $milage=$request->milage;
                $engine=$request->engine;
                $price=$request->price;
                $phone=$request->phone;
                $discription=$request->discription;

                $data=bike::find($id);

                $data->name= $name;
                $data->bikename=$bname;
                $data->location= $location;
                $data->milage= $milage;
                $data->engine_capacity= $engine;
                $data->price= $price;
                $data->phone_number= $phone;
                $data->discription= $discription;

                $data->save();
                $datas=bike::all();

                return redirect('/posts');


   }
   public function deletedata($id){
    $data=bike::find($id);
    

    $data->delete();
    return redirect()->back();
    
   }
}

