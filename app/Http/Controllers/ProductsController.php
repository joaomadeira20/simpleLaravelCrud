<?php

namespace App\Http\Controllers;
use App\Models\Products;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
  public function list(Request $req)
	{
		$products = Products::get();
		return response()->json($products, 200);
	}

    public function create(Request $req)
	{
        $product = new Products;
        $product->name = $req->name;
        $product->save();
		return response()->json($product, 200);
	}

	public function update($id, Request $req)
	{
        $productUpdated = Products::where('id', $id)->update(['name'=>$req->name]);
		return response()->json($productUpdated, 200);
	}
	public function delete($id, Request $req)
	{
        $productUpdated = Products::where('id', $id)->delete();
		return response()->json($productUpdated, 200);
	}
}
