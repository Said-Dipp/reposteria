<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Venta;
use App\Producto;
use App\Cliente;
use App\DetalleVenta;
use DB;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $venta = Venta::where('fecha', 'LIKE', "%$keyword%")
                ->orWhere('hora', 'LIKE', "%$keyword%")
                ->orWhere('total', 'LIKE', "%$keyword%")
                ->orWhere('descuento', 'LIKE', "%$keyword%")
                ->orWhere('total_importe', 'LIKE', "%$keyword%")
                ->orWhere('iva', 'LIKE', "%$keyword%")
                ->orWhere('estado', 'LIKE', "%$keyword%")
                ->orWhere('cliente_id', 'LIKE', "%$keyword%")
                ->orWhere('users_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $venta = Venta::latest()->paginate($perPage);
        }

        return view('admin.venta.index', compact('venta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $productos = Producto::get();
        return view('admin.venta.create', compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            // insertamos un cliente si no existe
            $cliente = new Cliente;
            if ($request->has('cliente_id')) {
                $cliente->id = $request->cliente_id;
            }
            else {
                $cliente->nombre = $request->cliente_nombre;
                $cliente->ci = $request->cliente_ci;
                $cliente->save();
            }
            // insertamos la venta
            $venta = new Venta;
            $venta->fecha = date("Y-m-d");
            $venta->hora = date('h:i:s');
            $venta->total = $request->total;
            $venta->descuento = $request->descuento;
            $venta->total_importe = $request->total_importe;
            $venta->iva = "0";
            $venta->estado = "activo";
            $venta->cliente_id = $cliente->id;
            $venta->users_id = auth()->user()->id;
            $venta->save();

            foreach ($request->cantidad as $key => $value) {
                // insertamos el detalle de venta por cada producto vendido
                $detalle_venta = new DetalleVenta;
                $detalle_venta->cantidad = $request->cantidad[$key];
                $detalle_venta->subtotal = $request->subtotal[$key];
                $detalle_venta->venta_id = $venta->id;
                $detalle_venta->producto_id = $key;
                $detalle_venta->save();
            }
            DB::commit();
            return redirect('admin/venta');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect('admin/venta/create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $venta = Venta::findOrFail($id);

        return view('admin.venta.show', compact('venta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $venta = Venta::findOrFail($id);

        return view('admin.venta.edit', compact('venta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $venta = Ventum::findOrFail($id);
        $venta->update($requestData);

        return redirect('admin/venta')->with('flash_message', 'Ventum updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Ventum::destroy($id);

        return redirect('admin/venta')->with('flash_message', 'Ventum deleted!');
    }
}
