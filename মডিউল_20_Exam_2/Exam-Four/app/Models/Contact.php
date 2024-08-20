<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // If your table name is not the plural form of the model name
    protected $table = 'contact'; // Specify the table name explicitly

    // Specify which attributes are mass assignable
    protected $fillable = ['name', 'email', 'phone','address'];
}
