<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    $pdf = PDF::loadView('pdf.invoice', $data);
    return $pdf->download('invoice.pdf');
}
