<?php
namespace App\Modules\Http\Controller;


use Dompdf\Dompdf;
use Dompdf\Options;
use App\Modules\App;
use BadMethodCallException;
use App\Modules\Http\Controller\BaseController;
require_once publicPath("dompdf/autoload.inc.php");

class PdfController extends BaseController{

    public function printPdf(){
        $userData = $_GET['data'];
        $pdfOptions = new Options();
        $pdfOptions->setIsRemoteEnabled(true);
        // instantiate and use the dompdf class
        $dompdf = new Dompdf($pdfOptions);

        
        $dompdf->loadHtml("<p>$userData</p>");

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        global $_dompdf_show_warnings;
        $_dompdf_show_warnings = true;
        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser
        $dompdf->stream('nome.pdf', ['Attachment' => false]);
        exit;
    }
}