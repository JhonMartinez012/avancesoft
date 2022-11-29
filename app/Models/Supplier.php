<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'supplier';

    protected $fillable = [
        'supplierId',
        'companyName',
        'contactName',
        'contactTitle',
        'address',
        'city',
        'region',
        'postalCode',
        'country',
        'phone',
        'fax',
        'email',
        'HomePage'        
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
