<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Testimonial;
use App\Models\Message;

class DashboardController extends Controller
{
    public function index()
    {
        // Menghitung jumlah data, dengan fallback 0 jika tabel/model belum siap
        try {
            $productCount = \App\Models\Product::count();
        } catch (\Exception $e) {
            $productCount = 0;
        }

        $productCount = Product::count();
        $testimonialCount = Testimonial::count();
        $unreadMessages = Message::where('is_read', 0)->count(); // Asumsi ada tabel messages

        return view('admin.dashboard', compact('productCount', 'testimonialCount', 'unreadMessages'));

        try {
            $unreadMessages = \App\Models\Contact::where('status', 'Belum Dibaca')->count();
        } catch (\Exception $e) {
            $unreadMessages = 0;
        }

        return view('admin.dashboard', compact('productCount', 'articleCount', 'unreadMessages'));


    }
}