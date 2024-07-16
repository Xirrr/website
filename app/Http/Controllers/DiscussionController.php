<?php

namespace App\Http\Controllers;

use App\Models\Discussion;
use Illuminate\Http\Request;

class DiscussionController extends Controller
{
    // Method untuk menampilkan daftar diskusi
    public function index()
    {
        $discussions = Discussion::latest()->get();

        return view('discussions.index', compact('discussions'));
    }

    // Method untuk menampilkan formulir tambah diskusi
    public function create()
    {
        return view('discussions.create');
    }

    // Method untuk menyimpan diskusi baru ke dalam database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Simpan diskusi ke dalam database
        $discussion = Discussion::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // Redirect ke halaman detail diskusi yang baru ditambahkan
        return redirect()->route('discussions.show', ['discussion' => $discussion->id]);
    }
}
