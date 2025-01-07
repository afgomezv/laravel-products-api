<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all(); 
        //$productos = Producto::orderBy("id", "desc")->paginate();
        return response()->json($productos);
    }

    public function create(Request $request)
    {
        $request -> validate([
            'nombre' => 'required',
            'precio' => 'required',
            'stock' => 'required',
        ]);

        $producto = Producto::create($request->all());
        return response()->json($producto);
    }

    public function show($id)
    {
        $producto = Producto::find($id);
        return response()->json($producto);
    }

    public function update(Request $request, $id)
    {
        $request -> validate([
            'nombre' => 'required|string',
            'precio' => 'required|numeric',
            'stock' => 'required|numeric',
        ]);

        $producto = Producto::find($id);
        $producto->update($request->all());
        return response()->json($producto);
    }

    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        return response()->json(null, 204);
    }
}
