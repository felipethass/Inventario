<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductoRequest;

use Illuminate\Http\Request;
use App\Producto;
use App\TipoProducto;
use Session;

class ProductoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response

	 */

	

	public function index(Request $request)
	{
		
		
		$producto = Producto::search($request->codigoproducto)->orderBy('id','DESC')->paginate();

		return view ('producto.verproductos', array('producto' => $producto ), compact('producto'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{	
		$tipoproductos = TipoProducto::lists('id','nombretipo');

		$productos = Producto::all(); 
		
		return view('producto.crearprod',compact('productos'),compact('tipoproductos'));
	}

	

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateProductoRequest $request)
	{
		
		$producto = Producto::create($request->all());
		return redirect('productos');
	}

	public function destroy($codigoproducto)
	{
		//Producto::destroy($codigoproducto);
		
		$productos = Producto::search($codigoproducto);
        $productos->delete($codigoproducto);

        Session::flash('message','Vendido');

        return redirect('productos')->whit('message','VENDIDO');

		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */


}
