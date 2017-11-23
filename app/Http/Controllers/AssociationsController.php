<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Association;

class AssociationsController extends Controller
{
    public function index()
    {

		$associations = Association::all();
		$type='association';
    	return view('associations.associationdashboard', compact('associations','type'));

    }

    public function loggedindex()
    {

        $associations = Association::all();
		$type='association';
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
}
