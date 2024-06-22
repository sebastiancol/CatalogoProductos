<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        
        /* $response = HTTP::get('https://fakestoreapi.com/products');
        $product=json_decode($response->body());
        foreach($product as $p){

            $product=new Product();
            $product->title=$p->title;
            $product->price=$p->price;
            $product->category=$p->category;
            $product->description=$p->description;
            $product->image=$p->image;
            $product->save();
        }*/
        
        return view('welcome');

       /* $response2 = HTTP::get('https://fakestoreapi.com/products/categories');
        $products=json_decode($response2->body());
        foreach($products as $key ){
            
            $products=new Product();
            $products->category=$key;
            $products->save();
        }*/
        
       // return Http::get('https://fakestoreapi.com/products/categories')[0];

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$infoarray['products']=Product::get();
        $infoarray=Product::get();

        return view('products.index', compact('infoarray'));   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       // $concepto = Product::where('estatus',1)->find($id);
       $user_data=Product::find('id');
       return view('products.index', compact('user_data'));
    }


   
}
