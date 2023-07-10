<?php

namespace App\Interfaces;
use Illuminate\Http\Request;

interface EmployeeRepositoryInterface 
{
    public function index();
    public function store( Request $request);
    public function edit($id);
    public function update(Request $request);
    public function destroy($id);

}
