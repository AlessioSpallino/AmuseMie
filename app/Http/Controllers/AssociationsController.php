<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Association;

class AssociationsController extends Controller
{
    public function index()
    {

		$associations = Association::all();

    	return view('associations.associationdashboard', compact('associations'));

    }

    public function associationdetails($id)
    {
    	$association = Association::findOrFail($id);
    	
    	return view('associations.associationpage' , compact('association'));
    }
}
