<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use Illuminate\Support\Facades\Validator;
use Exception;
class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::all();
        return view()->exists('backend.group.index') ? view('backend.group.index', compact('groups')) : abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view()->exists('backend.group.create') ? view('backend.group.create') : abort(404);
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
            'title'      => 'required|max:255|unique:groups,title',
        ]);       

        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = [
            'title'   => $request->input('title'),
        ];

        try{
            Group::create($data);

            $this->getSuccessMessage( 'User Added Successfully!' );

            return redirect()->route('admin.groups.index');

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
    public function edit( Group $group)
    {
        return view()->exists('backend.group.edit') ? view('backend.group.edit', compact('group')) : abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        $validator = Validator::make( $request->all(), [
            'title'      => 'required|max:255|unique:groups,title',
        ]);       

        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = [
            'title'   => $request->input('title'),
        ];

        try{
            $group->update($data);

            $this->getSuccessMessage( 'User Update Successfully!' );

            return redirect()->route('admin.groups.index');

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
    public function destroy(Group $group)
    {
        $group->delete();

        $this->getSuccessMessage( 'User Delete Successfully!' );
        
        return redirect()->route('admin.groups.index');
    }
}
