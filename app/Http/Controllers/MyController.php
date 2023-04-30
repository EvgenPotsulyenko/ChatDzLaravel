<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Http\Requests\MessageFormRequest;
use App\Models\Message;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

//use Composer\Factory;
//use  App\Http\Requests\MessageFormRequest;
//use App\Models\User;

class MyController extends Controller
{
//    function index()
//    {
//        return view('chat');
//    }

    public function index()//: Factory|View|Application
    {
        auth()->loginUsingId(1);

        return view('chat');
    }

    public function messages(): Collection|array
    {
        return Message::query()
            ->with('user')
            ->get();
    }

    public function send(MessageFormRequest $request)
    {
        $message = $request->user()
            ->messages()
            ->create($request->validated());

        broadcast(new MessageSent($request->user(), $message));

        return $message;
    }

//    public function register()
//    {
//        $user = User::create([
//            "name" => "Ivan",
//            "email" => "Ivan23@gmail.com",
//            "password" => "1234"
//        ]);
//
//        return auth("web")->login($user);
//    }

}
