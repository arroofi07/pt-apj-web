<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactController extends Controller
{
  public function sendEmail(Request $request)
  {
    // Validate the request
    $request->validate([
      'name' => 'required',
      'email' => 'required|email',
      'subjek' => 'required',
      'pesan' => 'required'
    ]);

    try {
      $mail = new PHPMailer(true);

      // Server settings
      $mail->isSMTP();
      $mail->Host       = 'smtp.gmail.com';  // Replace with your SMTP host
      $mail->SMTPAuth   = true;
      $mail->Username   = 'axeanonym@gmail.com'; // Replace with your email
      $mail->Password   = 'cxym nwxa xtol abkm'; // Replace with your app password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port       = 587;

      // Recipients
      $mail->setFrom($request->email, $request->name);
      $mail->addAddress('axeanonym@gmail.com'); // Replace with recipient email

      // Content
      $mail->isHTML(true);
      $mail->Subject = $request->subjek;
      $mail->Body    = "
                <h3>Pesan Baru dari Form Kontak</h3>
                <p><strong>Nama:</strong> {$request->name}</p>
                <p><strong>Email:</strong> {$request->email}</p>
                <p><strong>Pesan:</strong></p>
                <p>{$request->pesan}</p>
            ";

      $mail->send();

      return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    } catch (Exception $e) {
      return redirect()->back()->with('error', 'Maaf, terjadi kesalahan. Pesan tidak dapat dikirim.');
    }
  }
}
