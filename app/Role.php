<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Role
 *
 * @mixin \Eloquent
 */
class Role extends Model
{
    //
    const ADMIN  = 1;
    const  TEACHER = 2;
    const  STUDENT = 3;
}
