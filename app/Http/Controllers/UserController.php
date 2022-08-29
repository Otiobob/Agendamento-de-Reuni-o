<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Sector;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        return view('users.index', [
            'users'=>$user::paginate(10)
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $sectors = Sector::all();
        return view('users.edit', [
            'user' => $user, 'sectors' =>  $sectors
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user,)
    {
       
        $user->update([   
             'name' => $request->safe()->name,
             'email' => $request->safe()->email,
             'cpf'=>$request->safe()->cpf,
             'matricula'=>$request->safe()->matricula,
             'celular'=>$request->safe()->celular,
             'password' =>$request->safe()->password,
             'sector' =>$request->safe()->sector,
             
        ]);
        return redirect('users')->withSuccess('Usuário Cadastrado com Sucesso!');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
