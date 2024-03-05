<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('id', 'DESC')->get();
        $data['orders'] = $orders;
        return view('order', $data);
    }

    // public function downloadPdf()
    // {
    //     ini_set('max_execution_time', 180); //3 minutes
    //     $orders = Order::orderBy('id','DESC')->get();
    //     $data['orders']= $orders;

    //     $pdf = Pdf::loadView('pdf.order', $data);
    //     // return $pdf->download('orders,php');
    //     return $pdf->stream();
    // }

    public function pdf()
    {
        // ini_set('max_execution_time', 180); 
        // $orders = Order::orderBy('id', 'DESC')->get();
        $orders = Order::orderBy('id', 'DESC')->get();
        
        // return $data['orders'] = [$orders];

        $myMpdf = get_myMpdf('A4', 'P');
        $myMpdf->writeHTML(view('pdf.order', compact('orders')));
        return $myMpdf->Output('document.pdf', 'I');
    }

    public function show($id)
    {
        $order = Order::find($id);
        return view('order-show',compact('order'));
    }

    public function pdfShow($id)
    {
        $order = Order::find($id);
        
        // return $data['orders'] = [$orders];

        $myMpdf = get_myMpdf('A4', 'P');
        $myMpdf->writeHTML(view('order-show', compact('order')));
        return $myMpdf->Output('document.pdf', 'I');
    }
}

