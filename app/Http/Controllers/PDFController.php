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
            $file->storeAs('public/', $filename);
            $data = array('imgname' => $filename);
            $pdf = PDF::loadView('pdf', $data);
            return $pdf->stream($timeNow . '.pdf');


        }

    }

}