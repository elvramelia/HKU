<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::orderBy('order', 'asc')->get();
        return view('admin.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'       => 'required|string|max:255',
            'subtitle'    => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'required|image|mimes:jpeg,png,jpg,webp|max:5120', // Max 5MB
            'button_text' => 'nullable|string|max:50',
            'button_link' => 'nullable|string|max:255',
            'order'       => 'nullable|integer',
            'is_active'   => 'nullable'
        ]);

        // Upload gambar
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('banners', 'public');
        }

        $data['is_active'] = $request->has('is_active') ? true : false;
        $data['order'] = $request->order ?? 0;

        Banner::create($data);

        return redirect()->route('admin.banners.index')->with('success', 'Banner berhasil ditambahkan!');
    }

    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        $data = $request->validate([
            'title'       => 'required|string|max:255',
            'subtitle'    => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'button_text' => 'nullable|string|max:50',
            'button_link' => 'nullable|string|max:255',
            'order'       => 'nullable|integer',
            'is_active'   => 'nullable'
        ]);

        // Cek apakah user mengupload gambar baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama dari storage
            if ($banner->image) {
                Storage::delete('public/' . $banner->image);
            }
            // Upload gambar baru
            $data['image'] = $request->file('image')->store('banners', 'public');
        }

        $data['is_active'] = $request->has('is_active') ? true : false;
        $data['order'] = $request->order ?? 0;

        $banner->update($data);

        return redirect()->route('admin.banners.index')->with('success', 'Banner berhasil diupdate!');
    }

    public function destroy(Banner $banner)
    {
        // Hapus file gambar dari storage
        if ($banner->image) {
            Storage::delete('public/' . $banner->image);
        }
        
        $banner->delete();
        return redirect()->route('admin.banners.index')->with('success', 'Banner berhasil dihapus!');
    }
}