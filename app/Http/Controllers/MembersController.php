<?php

namespace App\Http\Controllers;

use App\Topic;
use App\Member;
use App\Module;
use App\Comment;
use App\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;



class MembersController extends Controller
{

    function login(Request $request)
    {
        // mensajes a presentar cuando no cumple los requisitos
        $messages = [
            'password.min' => 'La contraseña es de minimo :min caracteres.',
            'required' => 'No puede dejar este campo vacio'
        ];
        //validad los datos
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ], $messages);
        // si falla, ir al login con la informacion de porque fallo
        if ($validator->fails()) {
            return redirect()
                ->route('login-form')
                ->withErrors($validator)
                ->withInput(
                    $request->except('password')
                );
        }
        //buscar si el miembro existe
        $member = Member::where([
            'email' => $request->email,
            'password' => $request->password
        ])->first();
        //si existe presentar la pagina de miembros
        if ($member) {

            if ($member->active) {
                session(['logged' => true, 'member_id' => $member->id]);

                return redirect()->route('miembros-home', compact($member));
            } else {
                return redirect()->route('login-form')->with(['active' => true]);
            }
        } else {
            // si no existe mostrar un mensaje
            session(['logged' => false]);
            return redirect()
                ->route('login-form')
                ->with('info', 'Correo o contraseña incorrecta, vuelva a intentarlo');
        }
    }

    function index()
    {
        if (session('logged')) {
            $user = Member::find(session('member_id'));
            $modulo = DB::table('modules')->orderBy('index')->get();
            return view('members.home', ['modulos' => $modulo, 'member' => $user]);
        } else {
            return redirect()->route('login-form');
        }
    }

    function show($id)
    {
        if (session('logged')) {
            $user = Member::find(session('member_id'));
            $temas = Topic::where('module_id', $id)->orderBy('index')->get();
            $modulo = Module::find($id);
            $comments = Comment::where('module_id', 1)
                ->join('members', 'members.id', '=', 'comments.member_id')
                ->orderBy('comments.created_at', 'desc')
                ->get();

            return view('members.module', [
                'temas' => $temas,
                'module' => $modulo,
                'member' => $user,
                'comments' => $comments
            ]);
        } else {
            return redirect()->route('login-form');
        }
    }


    function form()
    {
        if (!session('logged')) {
            return view('members.login');
        } else {
            return redirect()->route('miembros-home');
        }
    }

    function logout()
    {
        session()->flush();
        return redirect()->route('login-form');
    }

    function registrar($token)
    {
        $register = Register::where('token', $token)->firstOrFail();
        return view('members.register', ['register' => $register]);
    }

    function normal()
    {

        return view('members.register_new');
    }

    function new(Request $request)
    {
        // mensajes a presentar cuando no cumple los requisitos
        $messages = [
            'password.min' => 'La contraseña es de minimo :min caracteres.',
            'required' => 'No puede dejar este campo vacio'
        ];
        //validad los datos
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'last_name' => 'required',
            'instagram' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ], $messages);
        // si falla, ir al registro con la información de porque falló
        if ($validator->fails()) {
            return redirect()
                ->route('registro-normal')
                ->withErrors($validator)
                ->withInput(
                    $request->except('password')
                );
        }
        //crear miembro nuevo
        $member = new Member();
        $member->name = $request->name;
        $member->last_name = $request->last_name;
        $member->instagram = strtolower($request->instagram);
        $member->email = $request->email;
        $member->password = $request->password;
        $member->save();

        session(['logged' => true, 'member_id' => $member->id]);

        return redirect()->route('miembros-home', compact($member));
    }


    function save(Request $request)
    {
        // mensajes a presentar cuando no cumple los requisitos
        $messages = [
            'password.min' => 'La contraseña es de minimo :min caracteres.',
            'required' => 'No puede dejar este campo vacio'
        ];
        //validad los datos
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'last_name' => 'required',
            'instagram' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'token' => 'required'
        ], $messages);
        // si falla, ir al registro con la información de porque falló
        if ($validator->fails()) {
            return redirect()
                ->route('registro')
                ->withErrors($validator)
                ->withInput(
                    $request->except('password')
                );
        }
        //crear miembro nuevo
        $member = new Member();
        $member->name = $request->name;
        $member->last_name = $request->last_name;
        $member->instagram = strtolower($request->instagram);
        $member->email = $request->email;
        $member->password = $request->password;
        $member->save();

        //actualizar informacion de que si cambio de nombre
        Register::where('token', $request->token)->update([
            'registered_name' => $request->name,
            'registered_last_name' => $request->last_name

        ]);

        //si existe presentar la pagina de miembros


        session(['logged' => true, 'member_id' => $member->id]);

        return redirect()->route('miembros-home', compact($member));
    }



    function pdf($pdf)
    {
        $topic = Topic::find($pdf);
        $path =  'pdf/members/'.$pdf.'.pdf';       
        
        return Storage::download($path,$topic->topic.'.pdf');

    }
}
