<?php

namespace models;

use models\Model;

class UserModel extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'firstname',
        'surname',
        'email',
        'phone',
        'dob'
    ];
}
