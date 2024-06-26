<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use DateTime;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ReportView()
    {
        return view('admin.report.index');
    }


    public function SearchByDate(Request $request)
    {
        // return $request->all();
        $date = new DateTime($request->date);
        $dateFormat = $date->format('d F Y');

        $orders = Order::where('order_date', $dateFormat)->latest()->get();

        return view('admin.report.show', compact('orders'));
    }
    public function SearchByMonth(Request $request)
    {
        $orders = Order::where('order_month', $request->month)->where('order_year', $request->year)->latest()->get();

        return view('admin.report.show', compact('orders'));
    }
    public function SearchByYear(Request $request)
    {
        $orders = Order::where('order_year', $request->year)->latest()->get();

        return view('admin.report.show', compact('orders'));
    }
}
