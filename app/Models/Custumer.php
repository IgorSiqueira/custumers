<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custumer extends Model
{
    use HasFactory;

    protected $table = 'custumers';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'lastName',
        'firstName',
        'phone',
        'addressLine1',
        'addressLine2',
        'city',
        'state',
        'postalCode',
        'country',
        'salesRepEmployeeNumber',
    ];
    
    protected $hidden = ['creditLimit'];
}
