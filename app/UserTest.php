<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTest extends Model
{
    protected $table="user_tests";
    protected $fillable=['id','name','parity'];
    protected $primaryKey = 'id';
}
