<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Joven;

class JovenController extends Controller
{
    public function view()
    {
        $datos = Joven::all();
        return view('jovenes')->with("datos", $datos);
    }

    public function create(Request $request)
    {
        try {
            $joven = new Joven();
            $joven->nombre = $request->txtnombre;
            $joven->apellidos = $request->txtapellidos;
            $joven->edad = $request->txtedad;
            $joven->telefono = $request->txttelefono;
            $joven->barrio = $request->txtbarrio;
            $joven->save();
        } catch (\Exception $e) {
            return back()->with("error", "Error al registrar");
        }

        return back()->with("success", "Registrado con éxito");
    }

    public function update(Request $request)
    {
        try {
            $joven = Joven::find($request->txtid);
            $joven->nombre = $request->txtnombre;
            $joven->apellidos = $request->txtapellidos;
            $joven->edad = $request->txtedad;
            $joven->telefono = $request->txttelefono;
            $joven->barrio = $request->txtbarrio;
            $joven->save();
        } catch (\Exception $e) {
            return back()->with("error", "Error al modificar");
        }

        return back()->with("success", "Modificación con éxito");
    }

    public function delete($id)
    {
        try {
            $joven = Joven::find($id);
            $joven->delete();
        } catch (\Exception $e) {
            return back()->with("error", "Error al eliminar registro");
        }

        return back()->with("success", "Registro eliminado con éxito");
    }
}
