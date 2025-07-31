<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Mail\SendMailCompany;
use App\Mail\SendMailUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

         try{
            $data = [
            'email' => $request->email,
            'subject' => 'Donot Reply',
            'title' => 'Contact Form Submission From PT. Adhi Cahaya Global.',
            'name' => $request->first_name . ' ' . $request->last_name,
            'phone' => $request->phone,
            'message' => $request->message,
        ];

        Mail::to($request->email)->send(new SendMailUser($data));
        Mail::to(env('MAIL_COMPANY_ADDRESS'))->send(new SendMailCompany($data));

        return redirect()->back()->with('success-send-email', 'Your message has been sent successfully.');

         }catch(\Exception $e){
            return redirect()->back()->with('error-send-email', $e->getMessage());
         }
    }
}
