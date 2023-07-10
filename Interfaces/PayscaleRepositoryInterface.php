<?php

namespace App\Interfaces;
use Illuminate\Http\Request;

interface PayscaleRepositoryInterface 
{
    public function index();
    public function store( Request $request);
    public function display($id);
}
