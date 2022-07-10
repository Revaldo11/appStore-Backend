<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use Yajra\DataTables\DataTables;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Product::query();
            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '<a class=" inline-block px-2 py-1 m-1 font-bold border border-gray-700 text-white bg-gray-500 rounded-md shadow-lg hover:bg-gray-700" href="' . route('dashboard.product.edit', $item->id) . '">
                    Edit</a>
                    <form class="inline-block" action="' . route('dashboard.product.destroy', $item->id) . '" method="POST" >
                    <button class="  px-2 py-1 m-1 font-bold border border-purpel-900 text-white bg-purple-500 rounded-md shadow-lg hover:bg-purple-900">
                    Delete
                    </button>
                    ' . method_field('DELETE') . csrf_field() . '
                    </form>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('pages.dashboard.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ProductCategory::all();
        return view('pages.dashboard.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $product)
    {
        $data = $product->all();
        Product::create($data);
        return redirect()->route('dashboard.product.index')->with('success', 'Product created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
