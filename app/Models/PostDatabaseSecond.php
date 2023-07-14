<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostDatabaseSecond extends Model
{
    use HasFactory;
    protected $connection = 'mysql_second';
    protected $table = 'post_database_seconds';
    protected $guarded =[];
}
