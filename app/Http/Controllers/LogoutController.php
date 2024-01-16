<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout()
    {
        // Borrar todos los datos de la sesión
        session()->flush();

        // Cerrar la sesión de autenticación
        Auth::logout();

        // Redirigir al usuario a la página de inicio de sesión
        return redirect()->to('/login');
    }
}
