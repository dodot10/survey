<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        // Pastikan hanya admin yang bisa mengakses controller ini
        $this->middleware(['auth', 'role:admin']);
    }

    /**
     * Tampilkan dashboard admin.
     */
    public function index()
    {
        return view('admin.dashboard'); // Pastikan file blade ini sudah dibuat
    }
}
    