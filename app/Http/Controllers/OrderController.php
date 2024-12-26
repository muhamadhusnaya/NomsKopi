<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Xendit\Configuration;
use Illuminate\Http\Request;
use Xendit\Invoice\InvoiceApi;
use Xendit\Invoice\InvoiceItem;
use Xendit\Invoice\CreateInvoiceRequest;

class OrderController extends Controller
{
    public function __construct()
    {
        Configuration::setXenditKey(env('XENDIT_SECRET_KEY'));
    }

    public function index()
    {
        return view('order');
    }

    public function createInvoice(Request $request)
    {
        try {

            $request->validate([
                'product_id' => 'required|exists:products,id',
                'quantity' => 'required|integer|min:1',
                'customer_name' => 'required|string|max:255',
            ]);

            $product = Product::findOrFail($request->input('product_id'));
            $quantity = $request->input('quantity');
            $grand_total = $product->price * $quantity;
            $no_transaction = 'Inv-' . rand();

            $order = new Order();
            $order->no_transaction = $no_transaction;
            $order->external_id = $no_transaction;
            $order->customer_name = $request->input('customer_name'); // Nama produk
            $order->product_id = $product->id;
            //$order->product_name = $product->name;
            $order->quantity = $quantity;
            $order->grand_total = $grand_total;
            $order->description= "Produk : ". $product->name . "\nCatatan Tambahan : " . $request->input('description');
            $order->order_date = now(); // Tanggal order saat ini
            $order->payment_status = 'pending'; // Status pembayaran default

            //dd($request->all());
            $items = new InvoiceItem([
                'name' => $product->name, // Nama produk
                'price' => $product->price, // Harga per unit
                'quantity' => $quantity, // Jumlah unit
            ]);
            $createInvoice = new CreateInvoiceRequest([
                'external_id' => $no_transaction,
                'amount' => $grand_total,
                'invoice_duration' => 172800, // Durasi invoice dalam detik (2 hari)
                'items' => [$items],
            ]);
            $apiInstance = new InvoiceApi();
            $generateInvoice = $apiInstance->createInvoice($createInvoice);
            $order->invoice_url = $generateInvoice['invoice_url'];
            $order->save();
            return response()->json([
                'success' => true,
                'message' => 'Invoice successfully created',
                'data' => $order,
            ], 201);

        } catch (\Throwable $th) {
            // Tangani error dan kembalikan respons error
            return response()->json([
                'success' => false,
                'message' => 'Failed to create invoice',
                'error' => $th->getMessage(),
            ], 500);
        }
    }
}
