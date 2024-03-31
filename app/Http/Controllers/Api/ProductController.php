<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResourse;
use App\Models\Category;
use App\Models\Order;
use App\Models\Products;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class ProductController extends Controller
{

    public function store(Request $request){

        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'product_id' => 'required|exists:products,id',
        ]);
        
        $categoryId = $request->input('category_id');
        $productId = $request->input('product_id');

        
        $order = Order::create([
            'category_id' => $categoryId, 
            'product_id' => $productId,
        ]);

        $data = [
            'status' => 201,
            'message' => 'Order Created Successfully.',
            'order' => new OrderResourse($order),
        ];

        return response()->json($data);
        
    }
}
