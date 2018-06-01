<?php

namespace App\Http\Controllers;

use App\Apartments;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ApartmentsController extends Controller
{
    public function index()
    {
        return view('apartments')->with('list_apartments', Apartments::orderBy('created_at', 'ASC')->paginate(6));
    }
}
