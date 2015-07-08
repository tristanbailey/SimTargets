<?php

namespace Codecourse\User;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
//    use \Illuminate\Database\Eloquent\SoftDeletes;
    
    protected $table = 'users';

    protected $fillable = [
        'email',
        'username',
        'password',
        'active',
        'active_hash',
        'remember_identifier',
        'remember_token',
        ];


    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];


}
