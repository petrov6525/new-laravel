<?php

namespace App\Http\Controllers\superuser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuperUser;
use DateTime;

class SuperUserController extends Controller
{
    public function index()
    {
        $users = SuperUser::orderBy('id')->simplePaginate(12);

        return view('superuser.index', compact('users'));
    }


    public function destroy($id){
        $user=SuperUser::find($id);

        if($user===null){
            return redirect('/superuser');
        }


        $user->delete();

        return redirect('/superuser');
    }


    public function update(Request $request,$id)
    {
        $user = SuperUser::find($id);

        if ($user === null) {

            return redirect('/superuser');
        }

        
        $error = $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'age' => 'required'
                ]
            );
            
       


        $user->Name=$request->get('name');
        $user->email=$request->get('email');
        $user->phone=$request->get('phone');
        $user->age=$request->get('age');
        $user->updated_at=new DateTime();

        $user->save();


        return redirect('/superuser');

    }


    public function edit($id)
    {
        $user = SuperUser::find($id);

        return view('superuser.edit', compact('user'));
    }


    public function show($id)
    {
        $user = SuperUser::find($id);

        return view('superuser.show', compact('user'));
    }


    public function create()
    {
        return view('superuser.create');
    }


    public function store(Request $request)
    {

        //@dd($request);
        $info = $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required'
            ]

        );

        $user = new SuperUser();

        $user->Name = $info['name'];
        $user->email = $info['email'];
        $user->phone = $info['phone'];

        $user->age = $request->get('age');

        $user->created_at = new DateTime();
        $user->updated_at = new DateTime();

        $user->save();


        return redirect('/superuser');
    }
}
