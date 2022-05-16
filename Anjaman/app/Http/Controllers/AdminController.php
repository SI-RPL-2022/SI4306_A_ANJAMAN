<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function transaksi_show()
    {
        return view('/admin/transaksi', [
            'order' => Order::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tahun  $tahun
     * @return \Illuminate\Http\Response
     */
    public function transaksi_edit($id)
    {
        $order = Order::findOrFail($id);
        return view('/admin/editstatus', [
            'order' => $order
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tahun  $tahun
     * @return \Illuminate\Http\Response
     */
    public function transaksi_update(Request $request, int $id) {

        // validating input
        $order = Order::find($id);

        $order->status = $request['status'];
        $order->save();
        return redirect('/admin/transaksi');
    }
    
    public function detail(int $id) {

        $detail = OrderDetail::getOrderDetailById($id);

        return view('/admin/detailtransaksi', [
            'detail' => $detail
        ]);
    }
}