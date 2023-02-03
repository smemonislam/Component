<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Product;
use Exception;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view()->exists('backend.product.index') ? view('backend.product.index', compact('products')) : abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view()->exists('backend.product.create') ? view('backend.product.create', compact('categories')) : abort(404);
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
            'category_id'   => 'required|numeric',
            'title'         => 'required|max:255|unique:products,title',
            'description'   => 'required|min:20|max:1000',
            'cost_price'    => 'required|integer|not_in:0',
            'price'         => 'required|integer|not_in:0'
        ]);       

        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = [
            'category_id'   => $request->input('category_id'),
            'title'         => $request->input('title'),
            'description'   => $request->input('description'),
            'cost_price'    => $request->input('cost_price'),
            'price'         => $request->input('price')
        ];

        try{
            Product::create($data);
           
            $this->getSuccessMessage( 'Product Added Successfully!' );

            return redirect()->route('admin.products.index');

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
    public function show(Product $product)
    {
        $categories = Category::all();
        return view()->exists('backend.product.show') ? view('backend.product.show', compact('product', 'categories')) : abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view()->exists('backend.product.edit') ? view('backend.product.edit', compact('product', 'categories')) : abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validator = Validator::make( $request->all(), [
            'category_id'   => 'required|numeric',
            'title'         => 'required|max:255|unique:products,title, '.$product->id,
            'description'   => 'required|min:20|max:1000',
            'cost_price'    => 'required|integer|not_in:0',
            'price'         => 'required|integer|not_in:0'
        ]);       

        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = [
            'category_id'   => $request->input('category_id'),
            'title'         => $request->input('title'),
            'description'   => $request->input('description'),
            'cost_price'    => $request->input('cost_price'),
            'price'         => $request->input('price')
        ];

        try{
            $product->update($data);
           
            $this->getSuccessMessage( 'Product Update Successfully!' );

            return redirect()->route('admin.products.index');

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
    public function destroy(Product $product)
    {
        $product->delete();

        $this->getSuccessMessage( 'Product Delete Successfully!' );
        
        return redirect()->route('admin.products.index');
    }
}
