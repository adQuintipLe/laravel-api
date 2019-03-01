<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';
    protected $fillable = [
        'firstName', 'lastName', 'occupation', 'companyName'
    ]; 
}
