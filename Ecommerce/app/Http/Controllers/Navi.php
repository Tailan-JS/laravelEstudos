<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class Navi extends Controller
{
    public function index(){
    	return view('index');
    }

    public function products(){
        $products = Product::all();
    	return view('products',['products'=>$products]);
    }
    public function dashboard(){
    	$user = auth()->user();
        $products = $user->product;
    	return view('dashboard',['user'=>$user,'products' => $products]);
    }
    public function store(request $req){
       $prod = new Product();
        $prod->name = $req->name;
        $prod->price = $req->preco;
        $prod->qtd = $req->quantidade;
        $prod->description = $req->description;
        $prod->dealer = auth()->user()->name;
        
        if($req->hasFile('image') && $req->file('image')->isValid()){
            $extension = $req->image->extension();
            $name = md5($req->image->getClientoriginalName().strtotime('now')).".".$extension;

            $req->image->move(public_path("img/products"),$name);
            $prod->image = $name;
        }
        $prod->user_id = auth()->user()->id;
        $prod->save();
        return redirect('/dashboard');
    }
    public function details($id){
        $product = Product::findOrFail($id);
        return view('details',['product' => $product]);
    }
}
