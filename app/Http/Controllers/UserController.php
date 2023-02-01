<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Group;
use Exception;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('group')->get();
        return view()->exists('backend.users.index') ? view('backend.users.index', compact('users')) : abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::all();
        return view()->exists('backend.users.create') ? view('backend.users.create', compact('groups')) : abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make( $request->all(), [
            'name'      => 'required|max:255|unique:users,name',
            'email'     => 'required|email|unique:users,email',
            'phone'     => 'required|numeric|digits:11',
            'address'   => 'required|max:255',
            'group_id'  => 'required|numeric',
            'admin_id'  => 'numeric',
        ]);
       

        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = [
            'admin_id'   => $request->input('admin_id'),
            'group_id'   => $request->input('group_id'),
            'name'       => $request->input('name'),
            'email'      =>$request->input('email'),
            'phone'      => $request->input('phone'),
            'address'    => $request->input('address'),
        ];

        try{
            User::create($data);

            $this->getSuccessMessage( 'User Added Successfully!' );

            return redirect()->route('admin.users.index');

        }catch( Exception $e){
            $this->getErrorMessage( $e->getMessage() );
            return redirect()->back();
        }

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
    public function edit( User $user )
    {
        $groups = Group::all();
        return view()->exists('backend.users.edit') ? view('backend.users.edit', compact('user', 'groups')) : abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validator = Validator::make( $request->all(), [
            'name'      => 'required|max:255|unique:users,name,' .$user->id,
            'email'     => 'required|email|unique:users,email,'.$user->id,
            'phone'     => 'required|numeric|digits:11',
            'address'   => 'required|max:255',
            'group_id'  => 'required|numeric',
            'admin_id'  => 'numeric',
        ]);
       

        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = [
            'admin_id'   => $request->input('admin_id'),
            'group_id'   => $request->input('group_id'),
            'name'       => $request->input('name'),
            'email'      =>$request->input('email'),
            'phone'      => $request->input('phone'),
            'address'    => $request->input('address'),
        ];

        try{
            $user->update($data);

            $this->getSuccessMessage( 'User Update Successfully!' );

            return redirect()->route('admin.users.index');

        }catch( Exception $e){
            $this->getErrorMessage( $e->getMessage() );
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        $this->getSuccessMessage( 'User Delete Successfully!' );
        
        return redirect()->route('admin.users.index');
    }
}
