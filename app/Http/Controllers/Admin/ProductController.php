<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use File;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with(['images'])->paginate(15);

        return view('admin.product.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.product.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $validated = $request->validated();
        $image = $validated['image'];
        $imageName = time() . '_' . $image->getClientOriginalName();

        $product = Product::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'quantity' => $validated['quantity'],
            'price' => $validated['price'],
            'category_id' => $validated['category_id']
        ]);

        //$image->move(public_path('images/products', $imageName));
        $image->move('images/products', $imageName, 'public');

        $productImage = ProductImage::create([
            'name' => time() . '_' . $image->getClientOriginalName(),
            'product_id' => $product->id
        ]);

        toast('Product Added!','success')->width('20rem')->position('top');

        return redirect()->route('admin.products.index');
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
        $categories = Category::all();

        return view('admin.product.edit', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $validated = $request->validated();
        if (array_key_exists("image", $validated)) {
            $image = $validated['image'];
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move('images/products', $imageName, 'public');
            $productImage = ProductImage::create([
                'name' => time() . '_' . $image->getClientOriginalName(),
                'product_id' => $product->id
            ]);

            $oldImage = $product->images[0];
            $oldImagePath = "images/products/{$oldImage->name }";
            if(File::exists(public_path($oldImagePath))){
                File::delete(public_path($oldImagePath));
                ProductImage::where('name', $oldImage->name)->delete();
            }
        }

        $product->update([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'quantity' => $validated['quantity'],
            'price' => $validated['price'],
            'category_id' => $validated['category_id']
        ]);

        toast('Product Updated!','success')->width('20rem')->position('top');

        return redirect()->route('admin.products.index');
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
