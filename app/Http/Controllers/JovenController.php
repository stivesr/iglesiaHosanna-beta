<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Joven;
use Illuminate\Support\Facades\Auth;

class JovenController extends Controller
{

    public function view()
    {
        $user = Auth::user(); // Obtener el usuario autenticado

        if ($user->isAdmin) {
            // Si el usuario es administrador, obtener todos los jóvenes
            $datos = Joven::with('user')->get();
        } else {
            // Si el usuario no es administrador, obtener solo los jóvenes asociados a su ID
            $datos = Joven::where('user_id', $user->id)->get();
        }

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

            // Obtener el id del usuario autenticado y asignarlo al registro
            $joven->user_id = Auth::id();

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
