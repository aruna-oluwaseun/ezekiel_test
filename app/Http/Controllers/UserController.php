<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('user.index', compact(['users']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('user.create');
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['name' => 'required', 'description' => 'required', 'rate' => 'required', 'currency' => 'required']);

        $data = $request->except(['_token']);

        if ($id = user::create($data)->id)
        {
            return redirect('users/' . $id)->with('success', 'New User has been added.');
        }

        return back()
            ->with('error', 'Error adding User');

    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('user.show', compact(['user']));
    }

}

