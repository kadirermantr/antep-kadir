<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    public function forgot()
    {
        return view('login.forgot-password');
    }

    public function send(Request $request)
    {
        $phone = $request->get('phone');
        $yeniSifre = Str::random(8);
        $hash = Hash::make($yeniSifre);

        if (User::where('phone', '=', $phone)->count() > 0) {
            $basic  = new \Nexmo\Client\Credentials\Basic('8932cbab', '8hE6ZXQOvHCySaym');
            $client = new \Nexmo\Client($basic);

            $message = $client->message()->send([
                'to' => '9'.$phone,
                'from' => 'Veritabanı',
                'text' => 'Yeni şifreniz: ' . $yeniSifre . ' bu şifreyi sisteme girdikten sonra lütfen değiştirin'
            ]);

            if ($message->getStatus() == 0) {
                echo "Mesaj başarıyla gönderildi.";
                User::where('phone', $phone)
                    ->update(['password' => $hash]);
            }

            else {
                echo "Mesaj gönderilemedi: " . $message->getStatus() . "";
            }
        }

        else {
            echo 'Sistemde kayıtlı böyle bir telefon numarası yok!';
        }
    }
}
