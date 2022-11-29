<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesOrder extends Model
{
    use HasFactory;

    protected $table = 'salesorder';

    protected $fillable = [
        'orderId',
        'custId',
        'employeeId',
        'orderDate',
        'requiredDate',
        'shippedDate',
        'shipperid',
        'freight',
        'shipName',
        'shipAddress',
        'shipCity',
        'shipRegion',
        'shipPostalCode',
        'shipCountry',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'custId', 'custId');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employeeId', 'employeeId');
    }

    public function shipper()
    {
        return $this->belongsTo(Shipper::class, 'shipperid', 'shipperid');
    }
}
