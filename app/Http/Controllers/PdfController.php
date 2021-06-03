<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function generatePDF()

    {
        $data = ['title' => 'Welcome to belajarphp.net'];

        $pdf = PDF::loadView('intervenant', $data);
        return $pdf->download('laporan-pdf.pdf');
    }
}
