<?php

namespace App\Livewire;

use Livewire\Component;

class Welcome extends Component
{
    public $post;
    public $clicked;
    public $toggle = false;

    public $name;
    public $email;
    public $password;
    protected $rules = [
        "name" => "required|string|max:4",
        "email" => "required|email",
        "password" => "required|min:8"
    ];
    protected $messages = [
        "name.required" => "필수 입력 사항입니다.",
        "name.max" => "이름은 4글자 이하로 입력해야 합니다.",
        "email.required" => "필수 입력 사항입니다.",
        "email.email" => "이메일 형식이 아닙니다.",
        "password.required" => "필수 입력 사항입니다.",
        "password.min" => "비밀번호는 8자 이상 입력해야 합니다."
    ];

    public function validation()
    {
        $this->validate();
    }
    public function mount()
    {
        $this->clicked = "클릭 전";
    }
    public function click()
    {
        $this->clicked = "클릭 후";
    }
    public function render()
    {
        return view('livewire.welcome',["post" => $this->post]);
    }
}
