<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Category;
use Exception;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view()->exists('backend.category.index') ? view('backend.category.index', compact('categories')) : abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view()->exists('backend.category.create') ? view('backend.category.create') : abort(404);
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
            'title'      => 'required|max:255|unique:categories,title',
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
            Category::create($data);

            $this->getSuccessMessage( 'Category Added Successfully!' );

            return redirect()->route('admin.category.index');

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
    public function edit( Category $category )
    {
        return view()->exists('backend.category.edit') ? view('backend.category.edit', compact('category')) : abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
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
            $category->update($data);

            $this->getSuccessMessage( 'Category Update Successfully!' );

            return redirect()->route('admin.category.index');

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
    public function destroy(Category $category)
    {
        $category->delete();

        $this->getSuccessMessage( 'Category Delete Successfully!' );
        
        return redirect()->route('admin.category.index');
    }
}
