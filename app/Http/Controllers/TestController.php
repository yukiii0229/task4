<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use App\Models\Contact;

class TestController extends Controller
{
    public function index(Request $request)
    {
        return view('index', ['txt' => 'フォームを入力']);
    }
    public function post(request $fillable)
    $contact =new contact;
    $form = request->all();
    unset($form['_token']);
    $contact->fill($form)->save();
    return rediurect('/verror');
    {
        return view('index', ['txt' => '正しい入力です']);
    }
    public function verror()
    {
        return view('verror');
    }
}
