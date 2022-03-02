<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
class AjaxController extends Controller
{
    public function producto(Request $request){
        $producto=Producto::find($request('id'));
        return response(json_encode($producto),200)->header('Content_type','text/plain');
    }
}
