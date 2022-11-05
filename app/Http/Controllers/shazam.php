<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class shazam extends Controller
{

    public function index($id){
        $data = file_get_contents(public_path("places.json"));
        $products = json_decode($data, true);
         
        foreach ($products as $product) {
            echo '<pre>';
            print_r($product);
            echo '</pre>';
        }
    
        return view('user.porfile',[
            'user' => User::findOrFail($id)
        ]);
    }

}
