<?php

namespace App\Http\Controllers;

use App\Models\Tree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TreeController extends Controller
{

    /**
     * Display logged user dashboard and list all his trees.
     * 
     */
    public function index()
    {
        $trees  = 
        Tree::all()
            ->where('user_id', '=', Auth::user()->id);

        return view('trees.index', ['trees' => $trees]);
    }

    /**
     * Display the form to a user create a new Tree.
     * 
     */
    public function create()
    {
        return view('trees.create');
    }

    /**
     * Store the created tree on /trees/create.
     * 
     */
    public function store()
    {
        return view('trees.store');
    }

}
