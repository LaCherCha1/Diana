<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Topic;
use App\Member;
use App\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    function form()
    {

        if (!session('admin')) {
            return view('admin.login');
        } else {
            return redirect()->route('admin-home');
        }
    }

    function login(Request $request)
    {

        // mensajes a presentar cuando no cumple los requisitos
        $messages = [
            'password.min' => 'La contraseña es de minimo :min caracteres.',
            'required' => 'No puede dejar este campo vacio'
        ];
        //validad los datos
        $validator = Validator::make($request->all(), [
            'user' => 'required',
            'password' => 'required|min:6',
        ], $messages);
        // si falla, ir al login con la informacion de porque fallo
        if ($validator->fails()) {
            return redirect()
                ->route('admin-login-form')
                ->withErrors($validator)
                ->withInput(
                    $request->except('password')
                );
        }
        //buscar si el miembro existe
        $admin = Admin::where([
            'user' => $request->user,
            'password' => $request->password
        ])->first();
        //si existe presentar la pagina de admin
        if ($admin) {
            session(['admin' => true, 'admin_id' => $admin->id]);
            return redirect()->route('admin-home', compact($admin));
        } else {
            // si no existe mostrar un mensaje
            session(['admin' => false]);
            return redirect()
                ->route('admin-login-form')
                ->with('info', 'Usuario o contraseña incorrecta, vuelva a intentarlo');
        }
    }

    function index()
    {
        if (session('admin')) {
            $admin = Admin::find(session('admin_id'));
            return view('admin.home', ['admin' => $admin]);
        } else {
            return redirect()->route('admin-login');
        }
    }



    function logout()
    {
        session()->flush();
        return redirect()->route('admin-login-form');
    }

    function members()
    {
        if (session('admin')) {
            $members = Member::all();
            $admin = Admin::find(session('admin_id'));

            return view('admin.members', [
                'members' => $members,
                'admin' => $admin
            ]);
        } else {
            return redirect()->route('admin-login-form');
        }
    }
    function membersUpdate(Request $request)
    {

        $member =  Member::find($request->id);
        $member->active = $request->active;
        $member->save();
        return redirect()->route('admin-members');
    }
// modules
    function modules()
    {
        if (session('admin')) {
            $modules = Module::orderBy('index', 'ASC')->get();
            $admin = Admin::find(session('admin_id'));

            return view('admin.modules', [
                'modules' => $modules,
                'admin' => $admin
            ]);
        } else {
            return redirect()->route('admin-login-form');
        }
    }
    function modulesUpdate(Request $request)
    {

        $module =  Module::find($request->id);
        $module->title = $request->title;
        $module->description = $request->description;
        $module->active = $request->active;
        if ($request->hasFile('image')) {
            $request->image->storeAs('images/modules', $request->id . '.jpg', 'public');
           }
        $module->save();
        return redirect()->route('admin-modules');
    }
    function modulesGet(Request $request)
    {

        $module =  Module::find($request->id);

        return response()->json($module);
    }



    function sortable(Request $request)
    {
        $input = $request->ids;
        for ($i = 0; $i < sizeof($input); $i++) {
            $module =  Module::find($request->ids[$i]);
            $module->index = $i;
            $module->save();
        }


        return response()->json('Index changed');
    }


    function modulesInsert(Request $request)
    {
        $modules =  Module::all();
        $modules_count = $modules->count();
        $module =  new Module();
        $module->title = $request->title;
        $module->description = $request->description;
        $module->active = $request->active;
        $module->index = $modules_count;
        $module->save();
        if ($request->hasFile('image')) {
            $request->image->storeAs('images/modules', $module->id . '.jpg', 'public');
           }
        return redirect()->route('admin-modules');
    }

    //Topics
    function topics($module_id)
    {
        if (session('admin')) {
            $module = Module::find($module_id);
            $topics = Topic::where('module_id',$module_id)->orderBy('index', 'ASC')->get();
            $admin = Admin::find(session('admin_id'));

            return view('admin.topics', [
                'topics' => $topics,
                'module' => $module,
                'admin' => $admin
            ]);
        } else {
            return redirect()->route('admin-login-form');
        }
    }
    function topicsUpdate(Request $request)
    {

        $topic =  Topic::find($request->id);
        $topic->topic = $request->title;
        $topic->module_id = $request->module_id;
        $topic->description = $request->description;

        if ($request->hasFile('image')) {
            $request->image->storeAs('images/topics', $request->id . '.jpg', 'public');
           }
        
        if ($request->hasFile('pdf')) {
            $topic->pdf = 'si';
            $request->pdf->storeAs('pdf/members', $request->id . '.pdf');
           }

        $topic->save();
        return redirect()->route('admin-topics',['module_id'=>$request->module_id]);
    }

    function topicsGet(Request $request)
    {
        
        $topic =  Topic::find($request->id);

        return response()->json($topic);
    }



    function sortable2(Request $request)
    {
        $input = $request->ids;
        for ($i = 0; $i < sizeof($input); $i++) {
            $topic =  Topic::find($request->ids[$i]);
            $topic->index = $i;
            $topic->save();
        }


        return response()->json('Index changed');
    }


    function topicsInsert(Request $request)
    {
        $topics =  Topic::where('module_id',$request->module_id);
        $topics_count = $topics->count();
        $topic =  new Topic();
        $topic->topic = $request->title;
        $topic->description = $request->description;
        $topic->module_id = $request->module_id;
        $topic->index = $topics_count;
        if ($request->hasFile('pdf')) {
            $topic->pdf = 'si';
        }else{
            $topic->pdf = 'no';
        }
        $topic->save();        
        if ($request->hasFile('pdf')) {
            $request->pdf->storeAs('pdf/members', $request->id . '.pdf');
        }

        if ($request->hasFile('image')) {
        $request->image->storeAs('images/topics', $topic->id . '.jpg', 'public');
        }
           return redirect()->route('admin-topics',['module_id'=>$request->module_id]);
    }


    function topicsDelete($id)
    {
        // dd($id);
        Topic::destroy($id);
        Storage::disk('public')->delete('/images/topics/'. $id . '.jpg');
        Storage::delete('/pdf/members/'. $id . '.pdf');
        return redirect()->back();

    }



}
