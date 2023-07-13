<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Exception;

class ReportesController extends Controller
{
    public function descargarPdf()
    {
        try {
            $pdf = PDF::loadView('reportes.reportes')
            ->setPaper('a4')
            ->setOption(['margin-top', 5, 'margin-bottom', 5]);

            return $pdf->stream('Mi_reporte_' . date('d_m_Y_H_i_s', strtotime(now())) . '.pdf');
        } catch (Exception $error) {
            
        }
    }
}
