<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class AdminController extends Controller
{
    public function uploadteam(Request $request){

        $data= new team;
        
        $image=$request->image;
        
        $imagename=time().'.'.$image->getClientOriginalExtension();
        
         $request->image->move('teamimage',$imagename);
        
         $data->image=$imagename;
        
         $data->name=$request->name;
        
         $data->postion=$request->position;
        $data->save();
        return redirect()->back();
        
     }

     public function update($id){

        $data=team::find($id);
 
         return view('updated',compact('data'));
 
     }

     public function upadatechef(Request $request, $id){

        $data=team::find($id);

 

        $image=$request ->image;

              $imagename=time().'.'.$image->getClientOriginalExtension();

              $request->image->move('teamimage',$imagename);

     

        
              $data->image=$imagename;

              $data->name=$request->name;

              $data->postion=$request->position;

              $data->save();

              return redirect()->back();

      }
      
}
