<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\DataBin;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.dashboard');
    }
    public function bintotal()
    {
        $dataBin = DataBin::count();
        return($dataBin);
    }
    public function bininstocktotal()
    {
        // Status 2 In Stock
        $bininstocktotal = DataBin::count() - DataBin::where('status', 3)->count();
        return($bininstocktotal);
    }
    public function binoutstocktotal()
    {
        // Status 3 Out Stock
        $binoutstocktotal = DataBin::where('status', 3)->count();
        return($binoutstocktotal);
    }
    public function applicationtotal()
    {
        $applicationCount = Application::count();
        return $applicationCount;
    }
    public function applicationtotalbyscheme1()
    {
        // PHKT 01
        $applicationtotalbyscheme1 = Application::where('skim', 1)->count();
        return $applicationtotalbyscheme1;
    }
    public function applicationtotalbyscheme2()
    {
        // PHKT 02
        $applicationtotalbyscheme2 = Application::where('skim', 2)->count();
        return $applicationtotalbyscheme2;
    }
}
