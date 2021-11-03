<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Tree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TreeController extends Controller
{

    /**
     * Construct method.
     * Run every time that TreeController runs.
     * 
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Display logged user dashboard and list all his trees.
     * 
     */
    public function index()
    {
        $trees  = 
        Tree::all()
            ->where('creator', '=', Auth::user()->id);

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
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'address' => ['required', 'unique:trees'],
            'hidden-ids' => 'required',
            'description' => 'max:255'
        ]);

        $urls = [];
        $hidden_ids = explode(',', $request->input('hidden-ids')); //Should add a limit?
        foreach($hidden_ids as $hidden_id)
        {
            $request->validate([
                "name-$hidden_id" => 'max:25',
                "link-$hidden_id" => 'required'
            ]);
            $url = $request->input("link-$hidden_id");

            //Test if the url have a https:// or http:// if haven't we add
            if(substr($url, 0, 8) != 'https://' &&
                substr($url, 0, 7) != 'http://')
            {
                $url = 'http://'.$url;
                $request->validate([$url => 'url']);
            }
            $urls[$hidden_id] = $url;
        }

        $tree = Tree::create([
            'title' => $request->input('title'),
            'address' => $request->input('address'),
            'description' => $request->input('desc') ?? '',
            'creator' => Auth()->user()->id
        ]);

        foreach($hidden_ids as $hidden_id)
        {
            Link::create([
                'name' => $request->input('name-'.$hidden_id),
                'link' => $urls[$hidden_id],
                'tree' => $tree->id
            ]);
        }

        return redirect('/trees');
    }

}
