<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Anime extends Model
{
    protected $connection = 'mongodb';

    protected $table = 'anime';
}
