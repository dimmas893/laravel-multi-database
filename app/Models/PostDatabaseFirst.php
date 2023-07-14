<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostDatabaseFirst extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'post_database_firsts';
    protected $guarded =[];
}
