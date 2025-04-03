<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use App\Enums\UserRole;

class AuthController extends Controller
{
    public function registerr()
    {
        return view('auth/registerr');
    }

    public function registerrSave(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6'
        ])->validate();

        $role = UserRole::Aprendiz; // Valor por defecto

        if (str_ends_with($request->email, '@admin.com')) {
            $role = UserRole::Administrador;
        } elseif (str_ends_with($request->email, '@sena.com')) {
            $role = UserRole::Instructor;
        }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'roles' => $role->value, //Guarda valor del enum
        ]);
 
        return redirect()->route('loginn');
    }

    public function loginn()
    {
        return view('auth/loginn');
    }

    public function loginnAction(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();

        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }

        
        $request->session()->regenerate();
         
        $user = Auth::user();

        return match ($user->roles) {
            UserRole::Administrador->value => redirect()->route('admin.dashboard'),
            UserRole::Instructor->value => redirect()->route('instructor.dashboard'),
            default => redirect()->route('aprendiz.dashboard'),
        };

    }
}