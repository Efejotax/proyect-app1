<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pastel extends Model
{
    // optativo para que no genere por convención en inglés un nombre raro
    protected $table = 'pasteles';
}
