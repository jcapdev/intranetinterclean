<?php

// namespace App\Http\Controllers\LoginController;

// use Illuminate\Http\Request;
// use App\Models\Usuario;
// use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Hash;
// use Session;

// class LoginController extends Controller
// {
//     public function showLogin()
//     {
//         return view('auth.login');
//     }

//     public function showRegister()
//     {
//         return view('auth.register');
//     }

//     public function postLogin(Request $request)
//     {
//         $request->validate([
//             'nombreUsuario' => 'required',
//             'password' => 'required',
//         ]);
   
//         $credentials = $request->only('nombreUsuario', 'password');

//         if (Auth::attempt($credentials)) {

//             return redirect()->intended('home')
//                         ->withSuccess('You have Successfully logged in');
//         }

//         return redirect("login")->withSuccess('Sorry! You have entered invalid credentials');
//     }

//     public function postRegistration(Request $request)
//     {  
//         $request->validate([
//             'nombre' => ['required', 'string', 'max:255'],
//             'nombreUsuario' => ['required', 'string', 'max:255', 'unique:usuarios'],
//             'password' => ['required', 'string', 'min:6', 'confirmed'],
//             'online' => ['string', 'max:2'],
//             'tipo_usuario' => ['required', 'string', 'max:2'],
//             'zona' => ['required', 'string', 'max:255'],
//             'cliente' => ['required', 'string', 'max:255'],
//             'Estatus' => ['required', 'string', 'max:255'],
//         ]);
           
//         $data = $request->all();
//         $check = $this->create($data);
         
//         return redirect("login")->withSuccess('Great! please login.');
//     }

//     public function create(array $data)
//     {
//       return Usuario::create([
//           'nombre' => $data['nombre'],
//           'nombreUsuario' => $data['nombreUsuario'],
//           'password' => Hash::make($data['password']),
//           'online' => $data['online'],
//           'tipo_usuario' => $data['tipo_usuario'],
//           'zona' => $data['zona'],
//           'cliente' => $data['cliente'],
//           'Estatus' => $data['Estatus'],
//         ]);
//     }

//     public function dashboard()
//     {
//         if(Auth::check()){
//             return view('home');
//         }

//         return redirect("login")->withSuccess('Opps! You do not have access');
//     }

//     public function logout() {
//         Session::flush();
//         Auth::logout();
  
//         return Redirect('login');
//     }
// }
