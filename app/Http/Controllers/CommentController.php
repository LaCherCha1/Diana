<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    function create(Request $request)
    {
        // mensajes a presentar cuando no cumple los requisitos
        $messages = [
            'max' => 'Ha excedido el maximo de caracteres, por favor edite su comentario.',
            'required'=> 'No puede dejar este campo vacio.'
        ];
        //validad los datos
        $validator = Validator::make($request->all(), [
            'comment' => 'required|max:255',            
            'module_id' => 'required',            
            'member_id' => 'required',            
        ],$messages);
        // si falla, volver con la informacion de porque fallo
        if ($validator->fails()) {
            return redirect()
                        ->route('modulo',['id'=>$request->module_id])
                        ->withErrors($validator)
                        ->withInput();
        }

        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->member_id = $request->member_id;
        $comment->module_id = $request->module_id;
        $comment->save();


        return redirect()
                ->route('modulo',['id'=>$request->module_id]);
        
    }
    
}
