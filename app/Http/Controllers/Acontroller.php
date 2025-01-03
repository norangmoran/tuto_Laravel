<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Acontroller extends Controller
{
    protected $result;
    protected $basecontroller;

    public function __construct(Basecontroller $basecontroller)
    {
        $this->basecontroller = $basecontroller;
    }

    public function multiple($num)
    {
        $this->result += $this->basecontroller->plus($num) * 10;
        return $this->result;
    }
}
