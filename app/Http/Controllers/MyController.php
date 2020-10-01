<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Intervention\Image\Facades\Image;


class MyController extends Controller
{   
    protected $v;
    public function database(){
        $data = new Test;
        $data->name="umar";
        $data->save();
        return view('welcome');
    }

    public function check_captcha(Request $request){
        $response = $request->input('g-recaptcha-response');
        $key=env('SECRET_KEY');
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$key."&response=".$response;
        $data = file_get_contents($url);
        $result = json_decode($data,TRUE);
        return dd($result['success']);        
    }
    public function test(Request $r)
    {
            $img = Image::make('black_bg.jpg');
            $img->text('Hello',120,120, function ($font) {
            $font->file(public_path('fonts/BASKVILL.TTF'));
            $font->size(40);
            $font->color('#fdf6e3');
            $font->align('center');
        });
        $returnVal = $img->response('jpg');
        return $returnVal;
    }
    public function tv(){
        # code...
        $t = "Here Comes Test Data";
        return view('userdata',compact('t'));
    }
    public function randomText($length = 5) {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
public function sortRandomValues($textValue){
        $stringArray = str_split($textValue);
        sort($stringArray);
        return $stringArray;
    }
    
public function captcha()
{
    $tossResult = 0;
    $randomValue = "";
    if(rand(1,10)%2 == 0) $tossResult = 1;

    if($tossResult){
        $randomValue = strval(rand(10000,100000));
    }
    else{
        $randomValue = $this->randomText();
    }

    $img = Image::make('black_bg.jpg');
    $img->text($randomValue,120,120, function ($font) {
        $font->file(public_path('fonts/BASKVILL.TTF'));
        $font->size(40);
        $font->color('#fdf6e3');
        $font->align('center');
        });
    
    $fileName = md5($randomValue).".jpg";
    $img->save($fileName, 90);
    $filePath = $fileName;
    if (!unlink($filePath))return "error"; 
    return $fileName;
}
}

