<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginContainer;
use Illuminate\Database\QueryException;

class Account extends Component
{
    public $showregister, $showlogin;

    public $name, $email, $password;

    public $authuser;

    protected $rules = [
        "name" => "required|string|max:255",
        "email" => "required|email|max:255",
        "password" => "required|string|min:8",
    ];

    protected $messages = [
        'name.required' => '이름을 입력해 주세요.',
        'email.required' => '이메일을 입력해 주세요.',
        "password.required" => "비밀번호를 입력해 주세요",
    ];

    public function mount()
    {
        $this->showregister = false;
        $this->showlogin = false;
    }

    public function regist()
    {
        $this->validate();
        try{
            User::create([
                "name" => $this->name,
                "email" => $this->email,
                "password" => Hash::make($this->password),
            ]);
            return redirect('');
        }catch(QueryException $e){
            $this->addError('email', "이미 존재하는 이메일 입니다.");
        }


    }


    public function render()
    {
        return view('livewire.account');
    }
}
