<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Studios extends Model
{
    protected $connection = 'mongodb';

    protected $table = 'studios';
}
