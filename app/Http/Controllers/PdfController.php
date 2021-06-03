<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function index()
    {
        $pdf = PDF::loadView('intervenant');
        return $pdf->download('monprofil.pdf');
    }
}
