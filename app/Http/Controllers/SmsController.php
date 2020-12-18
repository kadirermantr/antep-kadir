<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;
use SoapClient;

class SmsController extends Controller
{
    private $soapClient;

    public function __construct()
    {
        $this->soapClient = new SoapClient("http://soap.netgsm.com.tr:8080/Sms_webservis/SMS?wsdl");
    }

    public function sendPasswordWithMessage($gsm = array()) {
        try {
            $password = mt_rand(100000,999999);   // kullanıcıya kaydedilecek
            $newPassword = Hash::make($password); // veritabanına kaydedilecek
            // User şifresini güncelle
            $message = 'Yeni şifreniz: ' . $password . ' bu şifreyi sisteme girdikten sonra lütfen değiştirin';

            $this->soapClient->smsGonder1NV2([
                'username' => 'KULLANICI ADINIZ',
                'password' => 'ŞİFRENİZ',
                'header' => 'Kadir Erman',
                'msg' => $message,
                'gsm' => $gsm,
                'filter' => '',
                'startdate'  => '',
                'stopdate'  => '',
                'encoding' => 'TR'
            ]);
        } catch (\Exception $error) {
            echo  "Sms gönderilme aşamasında bir sorun oluştu: " .$error->getMessage();
        }
    }
}
