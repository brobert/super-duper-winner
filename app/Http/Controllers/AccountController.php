<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Log;

class AccountController extends Controller
{

    private $user;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->user = Auth::user();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return $this->_respond();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->flashExcept('password');

        $validation_rules = [];
        if ($request->scope === 'profile') {

            $validation_rules = [
                'email'     => 'required|email|unique:users,email,'.Auth::user()->id.'|max:255',
                'name'      => 'required|string|regex:/^[a-zA-ZąćęłńóśżźĄĆĘŁŃÓŚŻŹ]+$/i|min:3|max:100',
                'last_name' => 'required|string|regex:/^[a-zA-Z\-ąćęłńóśżźĄĆĘŁŃÓŚŻŹ]+$/i|min:3|max:100',
            ];
        } elseif ($request->scope === 'password') {
            $validation_rules = [
                'password'     => 'required|confirmed|alpha_dash|min:5|max:255',
            ];
        } else {
            return $this->_bad_request();
        }

        $this->validate($request, $validation_rules );

        Auth::user()->fill( $request->only( array_keys( $validation_rules ) ) );
        Auth::user()->save();

        $this->stash['user'] = Auth::user()->toArray();
        $this->stash['text'] = 'Save';

        return $this->_respond('account.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
