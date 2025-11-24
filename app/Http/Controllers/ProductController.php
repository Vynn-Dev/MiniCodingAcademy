<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    
    // ===== READ (List Product) =====
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    // ===== FORM CREATE =====
    public function create()
    {
        return view('admin.products.create');
    }

    // ===== STORE DATA =====
    public function store(Request $r)
{
    $r->validate([
        'title' => 'required',
        'description' => 'required',
        'image' => 'required|image|max:2048',
        'gallery.*' => 'image|max:2048'
    ]);

    // Gambar utama
    $mainImage = $r->file('image')->store('products', 'public');

    // Simpan produk
    $product = Product::create([
        'title' => $r->title,
        'description' => $r->description,
        'image' => $mainImage,
    ]);

    // Gallery (optional)
    if ($r->hasFile('gallery')) {
        foreach ($r->file('gallery') as $g) {
            $gPath = $g->store('products/gallery', 'public');
            ProductImage::create([
                'product_id' => $product->id,
                'image_path' => $gPath
            ]);
        }
    }

    return redirect()->route('admin.products.index')
                     ->with('success', 'Produk berhasil ditambahkan!');
}

    // ===== FORM EDIT =====
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    // ===== UPDATE DATA =====
    public function update(Request $r, Product $product)
{
    $r->validate([
        'title' => 'required',
        'description' => 'required',
        'image' => 'nullable|image|max:2048',
        'gallery.*' => 'image|max:2048'
    ]);

    // Ganti gambar utama (opsional)
    if ($r->hasFile('image')) {
        $newImage = $r->file('image')->store('products', 'public');
        $product->image = $newImage;
    }

    $product->title = $r->title;
    $product->description = $r->description;
    $product->save();

    // Tambah gallery baru
    if ($r->hasFile('gallery')) {
        foreach ($r->file('gallery') as $g) {
            $gPath = $g->store('products/gallery', 'public');

            ProductImage::create([
                'product_id' => $product->id,
                'image_path' => $gPath
            ]);
        }
    }

    return redirect()->route('admin.products.edit', $product->id)
                     ->with('success', 'Produk berhasil diperbarui!');
}


    // ===== DELETE DATA =====
    public function deleteImage(ProductImage $image)
    {
        Storage::disk('public')->delete($image->image_path);
        $image->delete();

        return back()->with('success', 'Foto berhasil dihapus');
    }

  // ===== SHOW PRODUCT DETAIL =====
public function show($id)
{
    $product = Product::findOrFail($id);
    return view('admin.products.show', compact('product'));
}
}
