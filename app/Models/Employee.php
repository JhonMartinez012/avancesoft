<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    const UPDATED_AT = null; // desabilita el campo updated_at
    protected $table = 'employee';


    protected $fillable = [
        'employeeId',
        'lastname',
        'firstname',
        'title',
        'titleOfCourtesy',
        'birthDate',
        'hireDate',
        'address',
        'city',
        'region',
        'postalCode',
        'country',
        'phone',
        'extension',
        'mobile',
        'email',
        'photo',
        'notes',
        'mgrId',
        'photoPath',
    ];

    public function salesOrders()
    {
        return $this->hasMany(SalesOrder::class);
    }
}
