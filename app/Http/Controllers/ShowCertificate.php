<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class ShowCertificate extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $data = [
            'backgroundImage' => public_path('images/certificate.jpg'),
        ];

        $pdf = PDF::loadView('certificate', $data);
        return $pdf
            ->setPaper('a4', 'landscape')
            ->stream('certificado.pdf');
    }
}
