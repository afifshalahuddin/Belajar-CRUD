<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class AksesAdminController extends Controller
{
    public function index()
    {
        $this->authorize('admin');
        return view('dashboard.akses.index', [
            'post' => Post::all()
            ]);
    }
}
