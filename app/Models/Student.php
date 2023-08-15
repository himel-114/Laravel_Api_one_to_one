<?php

namespace App\Models;

use App\Models\studentDetails;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'fullname',
        'email',
        'phone',
        

    ];

    public function studentDetails():HasOne
    {
        return $this->hasOne(StudentDetail::class);

    }
}


