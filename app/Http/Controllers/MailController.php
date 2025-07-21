<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
         try{
            $data = [
            'subject' => 'Tes Kirim Email',
            'title' => 'Halo dari Company Profile',
            'message' => 'Ini adalah pesan email percobaan.',
        ];

        Mail::to('alvinardi85@gmail.com')->send(new SendMail($data));
        return response()->json(['message' => 'Email sent successfully']);

         }catch(\Exception $e){
            return $e->getMessage();
         }
    }
}
