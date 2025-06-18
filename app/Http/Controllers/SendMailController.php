<?php

namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use vendor\phpmailer\phpmailer\src\PHPMailer;
use vendor\phpmailer\phpmailer\src\Exception;
//D:\xampp\htdocs\techsowth2\vendor\autoload.php

////require __DIR__.'/../vendor/autoload.php';

    
class SendMailController extends Controller
{   
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
        return view('sendemail');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $mail = new PHPMailer(true);
    
        try {
    
            /* Email SMTP Settings */
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = env('MAIL_HOST');
            $mail->SMTPAuth = true;
            $mail->Username = env('dgavkaranup@gmail.com');
            $mail->Password = env('Balkishan@7887');
            $mail->SMTPSecure = env('tls');
            $mail->Port = env('2525');
    
            $mail->setFrom(env('dgavkaranup@gmail.com'), env('TEchsowth.com'));
            $mail->addAddress($request->email);
    
            $mail->isHTML(true);
    
            $mail->Subject = $request->subject;
            $mail->Body    = $request->body;
    
            if( !$mail->send() ) {

                return back()->with("error", "Email not sent.")->withErrors($mail->ErrorInfo);
            }
                
            else {
                return back()->with("success", "Email has been sent.");
            }
    
        } catch (Exception $e) {

            echo $e;
                return back()->with('error','Message could not be sent.');
        }
    }
}