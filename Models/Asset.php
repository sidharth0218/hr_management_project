<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asset extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['asset_name','assign_in','employee_id','model_no'];
    public function asset_employee(){
        return $this->hasOne('App\Models\asset_employee','asset_id');
    }
}
