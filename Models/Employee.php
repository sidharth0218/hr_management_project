<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable=['name','email','address','phone','department','experience','profile','image','Bank_details'];
    public function departments(){
        return $this->hasOne(Department::class,'id','department');
    }
   
}
