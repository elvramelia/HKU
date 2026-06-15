<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

        try {
            $articleCount = \App\Models\Article::count();
        } catch (\Exception $e) {
            $articleCount = 0;
        }

        try {
            $unreadMessages = \App\Models\Contact::where('status', 'Belum Dibaca')->count();
        } catch (\Exception $e) {
            $unreadMessages = 0;
        }

        return view('admin.dashboard', compact('productCount', 'articleCount', 'unreadMessages'));
    }
}