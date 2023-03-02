<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        if ($request->file) {

            $file = $request->file;
            $filename = $file->getClientOriginalName();
            $timeNow = time();
            $filename = $timeNow . '.jpg';
            $pdfname = $timeNow . '.pdf';
            $file->storeAs('public/', $filename);
            $data = array('imgname' => $filename);
            $pdf = PDF::loadView('pdf', $data);
            $store = $pdf->stream($pdfname);
            // $store = $pdf->storeAs('public/', $timeNow.'.pdf' );
            Storage::put('public/' . $pdfname, $store);
            $data = array('path' => $pdfname);
            return view('viewpdf')->with($data);

        }

    }
    public function download($pdfname)
    {
        $filepath = public_path("storage/{$pdfname}");
        return \Response::download($filepath);
        
    }

}