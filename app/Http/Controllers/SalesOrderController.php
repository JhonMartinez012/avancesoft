<?php

namespace App\Http\Controllers;

use App\Models\SalesOrder;
use Illuminate\Http\Request;

class SalesOrderController extends Controller
{
    //
    public function salesOrderByCustomer($custId)
    {

        try {

            $salesOrdersExist = SalesOrder::where('custId', $custId)->exists();

            if (!$salesOrdersExist) {
                return response()->json([
                    'message' => 'No hay ordenes de compra para este cliente',
                ], 404);
            }

            $salesOrders = SalesOrder::with('customer', 'employee', 'shipper')
                ->where('custId', $custId)->paginate(10);
                
            return response()->json($salesOrders, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
