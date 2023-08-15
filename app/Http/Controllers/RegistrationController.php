<?php

// namespace App\Http\Controllers;

// use App\Models\Registration;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Validator;

// class RegistrationController extends Controller
// {
//     public function index()
//     {
//         return Registration::all();
//     }




//     public function store(Request $request)
//     {
//         $request->validate([
//             'name' => 'required',
//             'email' => 'required',
//             'username' => 'required',
//             'password' => 'required',
//     ]);

//         return Registration::create($request->all());
//     }



//     public function edit(Request $request, Registration $registration)
//     {
        

//         $registration->name = $request->name;
//         $registration->email = $request->email;
//         $registration->username = $request->username;
//         $registration->save();
//     }

//     public function destroy($id)
//     {
//         return Registration::destroy($id);
//     }





//     public function loginpost(Request $request)
//     {
//         $credentials=[
//             'email'=> $request->email,
//             'password'=> $request->password,

//         ];
    
//         if(Auth::attempt($credentials))
//         {
//             $request->session()->regenerate();
        
//         }
        
//         dd($credentials);
//     }


    


    
    

// }
