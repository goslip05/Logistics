<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class ClienteController extends Controller
{
    public function index()
    {
        try {
            
            return view('pages.inscripcion');



        } catch (\Exception $e) {
            dd($e);
        }
    }
}
