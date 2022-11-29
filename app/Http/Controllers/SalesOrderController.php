<?php

namespace App\Http\Controllers;

use App\Models\SalesOrder;
use Illuminate\Http\Request;

class SalesOrderController extends Controller
{
    //
    public function salesOrderByCustomer($custId)
    {
        $salesOrders = SalesOrder::with('customer', 'employee', 'shipper')
                   ->where('custId', $custId)->paginate(10);
        return response()->json($salesOrders);
    }
}
