<?php namespace App\Http\Controllers;

use App\Http\Requests\CreateTipoRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\TipoProducto;
use App\Producto;

class TipoProductoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


	public function index()
	{	
		$tipoproducto = TipoProducto::orderBy('id','asc')->paginate();
		$producto =Producto::all();


		return view ('tipos.vertipos', array('tipoproducto' => $tipoproducto ),array('producto' => $producto ), compact('tipoproducto'), compact('producto'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$productos=Producto::all();
		return view('tipos.creartipos');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateTipoRequest $request)
	{

		$tipoproducto = TipoProducto::create($request->all());
		return redirect('tipoproductos');
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
	public function destroy($id)
	{
		//
	}

}
