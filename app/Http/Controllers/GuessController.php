<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Mail;
use App\Mail\VerifyEmail;

class GuessController extends Controller
{

    public function mandar_mail($email, $confirmation_code){

        $data=array('email'=>$email, 'confirmation_code'=> $confirmation_code);

        Mail::send('emails.confirmation_code', $data, function($message) use($data){
        $message->to($data['email'])->subject('Por favor confirma tu correo');
        });

        return back();
    }

    public function verify($code)
	{
    $user = User::where('confirmation_code', $code)->first();

    if (! $user)
        return redirect('/home');

    $user->confirmed = 1;
    $user->confirmation_code = null;
    $user->save();

    return redirect('/usuarios')->with('notification', 'Has confirmado correctamente tu correo!');
	}

    
    public function mail_eliminar_cuenta($email, $id){

        $data=array('email'=>$email,'id'=>$id);

        Mail::send('emails.eliminar_cuenta', $data, function($message) use($data){
        $message->to($data['email'])->subject('Eliminar tu cuenta de Bolsa de Empleo');
        });

        return back();
    }

    public function mail_curriculums(Request $request){
        set_time_limit(0);
        $data=array('email'=>$request->email,'file'=>$request->curriculums);
        Mail::send('emails.curriculums', $data, function($message) use($data){
        $message->to($data['email'])->subject('Curriculums de los usuarios');

        $size = sizeOf($data['file']); 

        for ($i=0; $i < $size; $i++) {
            $message->attach($data['file'][$i]->getRealPath(),array(
                'as'=> 'curriculum usuario.' . $data['file'][$i]->getClientOriginalExtension(),
                'mime'=>$data['file'][$i]->getMimeType())
            );
        }
        });

        return back()->with('message', ['success', __('E-mail enviado')]); 

    }

}
