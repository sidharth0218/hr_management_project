<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payscale extends Model
{
    use HasFactory;
    protected $fillable=['salary','employee','department','designation','joining'];
    public function employeedata(){
        return $this->belongsTo('App\Models\Employee','employee');
    }
    public function departmentdata(){
        return $this->belongsTo('App\Models\Department','department');
    }
    public function designationdata(){
        return $this->belongsTo('App\Models\Designation','designation');
    }
}
