<?php

namespace App\Http\Controllers;

use App\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiLibraryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $artists = Artist::where('user_id', Auth::id())
            // eager loading to solve N+1 Query Problem
            ->with([
                'albums' => function($q) {
                    $q->with(['songs'])->orderBy('title');
                }
            ])
            ->orderBy('name', 'ASC')
            ->get();
        return $artists;
    }
}
