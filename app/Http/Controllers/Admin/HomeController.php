<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Alumno;
use App\Models\Admin\Campus;
use App\Models\Admin\CampusUacj;
use App\Models\Admin\Equivalencias;
use App\Models\Admin\Universidad;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        $campus = Campus::count();
        $campusUacj = CampusUacj::count();
        $alumno = Alumno::count();
        $equivalencias = Equivalencias::count();
        return view('Admin/index', compact('campus', 'campusUacj', 'alumno', 'equivalencias'));
    }
}
