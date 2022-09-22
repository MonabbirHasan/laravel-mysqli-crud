<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class CreateUser extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table ="employ";
    protected $primaryKey="id";
    // public function setNameAttribuite($value){
    //     $this->attributes['name']=ucwords($value);
    // }
}
