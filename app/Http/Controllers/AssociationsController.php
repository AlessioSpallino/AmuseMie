<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Association;
use App\User;
use App\Admin;
use DB;

use File;
use Storage;

class AssociationsController extends Controller
{


    public function index()
    {
        $search = \Request::get('search');
        $associations = Association::where('name','like','%'.$search.'%')->orderBy('id')->paginate(8);
        $type = 'association';
        return view('associations.associationdashboard', compact('associations','type'));

		/*$associations = Association::all();
		$type='association';
    	return view('associations.associationdashboard', compact('associations','type'));*/

    }

    public function loggedindex()
    {

        /*$associations = Association::all();
		$type='association';
        return view('logged.associations.associationdashboardL', compact('associations','type'));*/

        $search = \Request::get('search');
        $associations = Association::where('name','like','%'.$search.'%')->orderBy('id')->paginate(8);
        $type = 'association';
        return view('logged.associations.associationdashboardL', compact('associations','type'));

    }

    public function associationdetails($id)
    {
    	$association = Association::findOrFail($id);
    	
    	return view('associations.associationpage' , compact('association'));
    }

    public function loggedassociationdetails($id)
    {
        $association = Association::findOrFail($id);
        
        return view('logged.associations.associationpageL' , compact('association'));
    }

    public function myloggedassociationdetails($id)
    {
        $association = Association::findOrFail($id);
        
        return view('logged.associations.myassociationpageL' , compact('association'));
    }

    public function opennewassociation()
    {
        return view('logged.associations.associationcreationL');
    }

    public function newassociation(Request $request)
    {
        #Check if values are inserted
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'email' => 'required'   

        ]);

    
        $ass = new Association;


        if($request->hasFile('photo')){
            
            $path = $request->file('photo')->store('AssPicture', 'public');
            $ass->logo = $path;

            //Questa sotto salva ma non so come mostrare la foto
            /*$destinationPath = "assPicture";
            $file = $request->photo;
            $extension = $file->getClientOriginalExtension();
            
            $filename = rand(1111,9999).".".$extension;
            $file->move($destinationPath,$filename);
            $ass->logo = $filename;*/
        }
        else{
            
            $ass->logo = "";
        }

        $ass->name = $request->name;
        $ass->email = $request->email;

        if($request->webiste){
            $ass->link_one = $request->webiste;
        }else{
            $ass->link_one = "";
        }
        if($request->facebook){
            $ass->link_two = $request->facebook;
        }else{
            $ass->link_two = "";
        }
        if($request->instagram){
            $ass->link_three = $request->instagram;
        }else{
            $ass->link_three = "";
        }
        
        $ass->description = $request->description;
        $ass->address = $request->address;
        $ass->save();

        $user = DB::table('users')
                        ->where('id', '=', \Auth::user()->id)
                        ->update(['admin' => 1]);

        $admin = new Admin;
        $admin->user_id = \Auth::user()->id;


        $assid = DB::table('associations')
                        ->where('name', '=', $ass->name)->get();

        foreach($assid as $x){
            $admin->ass_id = $x->id;
            break;
        }

        $admin->save();

        
        return redirect()->action('EventsController@loggedindex');
    }

    public function openupdateass($id)
    {
        $association = DB::table('associations')
                                ->where('id', '=', $id)
                                ->get();
        return view('logged.associations.myassociationpageL', compact('association'));
    }

}
