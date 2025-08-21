<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Order;

class BuktiController extends Controller
{

    public function bukti(Request $request) {
        $request->validate([
            'bukti' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        
        $bukti = $request->input('bukti');
            // Simpan jalur gambar ke dalam kolom 'bukti_pembayaran' pada model Order yang sudah ada
            $order = Order::find($orderId); // Gantilah $orderId dengan ID pesanan yang sesuai
            $order->bukti = $bukti;
            $order->save();
    
            // Lanjutkan dengan proses pembayaran atau tindakan lain yang diperlukan
        }
    
   
    }
    


