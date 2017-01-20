<?php

namespace App\Models;

use App\Model;

class Author
    extends Model
{

    public static $table = 'author';

    public $firstname;
    public $lastname;

}