<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\Designation;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class designation extends Model
{
    use HasFactory;
    protected $fillable=['designation','department_id'];
  
    public function departments()
    {                                                                    
        return $this->belongsTo('App\Models\Department','id'); 
    }
  
}
