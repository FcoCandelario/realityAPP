<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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

        return response($users,200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!is_array($request->all())){
            return ['error' => 'request must be an array'];
        }

        //validations
        $rules = [
            'name'      => 'required',
            'email'     => 'required|email',
            'password'  => 'required'
        ];

        try{
            $validator = \Validator::make($request->all(),$rules);

            if($validator->fails()){
                return [
                    'created' => false,
                    'error'   => $validator->errors()->all()
                ];
            }

            User::create($request->all());

            return ['created' =>true];

        }catch(Exception $e){

            \Log::info('Error creating user: ' .$e);

            return \Response::json(['created'=>false],500);
        }

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       
        //dd($request->name);
        //find ID
        $user = User::findOrFail($request->id);

        //update data
        $user->name = $request->has('name') ? $request->name : $user->name;
        $user->email = $request->has('email') ? $request->email : $user->email;
        $user->password = $request->has('password') ? bcrypt($request->password) : $user->password;


        //confirm update
        $user->save();

        //show user info update 
        return \Response::json(['updated'=>true],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        User::destroy($request->id);

        return \Response::json(['deleted' => true],200);
    }
}
