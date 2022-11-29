<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable = [
        'productId',
        'productName',
        'supplierId',
        'categoryId',
        'quantityPerUnit',
        'unitPrice',
        'unitsInStock',
        'unitsOnOrder',
        'reorderLevel',
        'discontinued',
    ];


    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryId', 'categoryId');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplierId', 'supplierId');
    }

}
