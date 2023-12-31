<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\DataBin;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.dashboard');
    }
    public function bintotal()
    {
        $dataBinCount = DataBin::count();
        return($dataBinCount);
    }
    public function binUpdatedAt()
    {
        $dataBin = DataBin::latest()->first();
        if ($dataBin) {
            $latestUpdatedAt = $dataBin->updated_at;
            $dateTime = Carbon::parse($latestUpdatedAt);
            $formattedDateTime = $dateTime->format('Y-m-d H:i:s');
            return $formattedDateTime;    
        }else {
            return "Tiada Rekod";
        }
    }
    public function applicationTotalUpdatedAt()
    {
        $applicationTotalUpdatedAt = Application::latest()->first();
        if ($applicationTotalUpdatedAt) {
            $latestUpdatedAt = $applicationTotalUpdatedAt->updated_at;
            $dateTime = Carbon::parse($latestUpdatedAt);
            $formattedDateTime = $dateTime->format('Y-m-d H:i:s');
            return $formattedDateTime;
        }else {
            return "Tiada Rekod";
        }
    }
    public function bininstocktotal()
    {
        // Status 2 In Stock
        $bininstocktotal = DataBin::count() - DataBin::where('status', 2)->count();
        return($bininstocktotal);
    }
    public function bininstockUpdatedAt()
    {
        $dataBinInStockUpdatedAt = DataBin::where('status', 1)->latest()->first();
        if ($dataBinInStockUpdatedAt) {
            $latestUpdatedAt = $dataBinInStockUpdatedAt->updated_at;
            $dateTime = Carbon::parse($latestUpdatedAt);
            $formattedDateTime = $dateTime->format('Y-m-d H:i:s');
            return $formattedDateTime;
        }else {
            return "Tiada Rekod";
        }
    }
    public function binoutstocktotal()
    {
        // Status 3 Out Stock
        $binoutstocktotal = DataBin::where('status', 2)->count();
        return($binoutstocktotal);
    }
    public function binoutstockUpdatedAt()
    {
        $dataBinOutStockUpdatedAt = DataBin::where('status', 2)->latest()->first();
        if ($dataBinOutStockUpdatedAt) {
            $latestUpdatedAt = $dataBinOutStockUpdatedAt->updated_at;
            $dateTime = Carbon::parse($latestUpdatedAt);
            $formattedDateTime = $dateTime->format('Y-m-d H:i:s');
            return $formattedDateTime;
        }else {
            return "Tiada Rekod";
        }
    }
    public function applicationtotal()
    {
        $applicationCount = Application::count();
        return $applicationCount;
    }
    public function delivered()
    {
        $deliveredCount = Application::where('status_penerimaan', 1)->count();
        return $deliveredCount;
    }
    public function deliveredUpdatedAt()
    {
        $deliveredUpdatedAt = Application::where('status_penerimaan', 1)->latest()->first();
        if ($deliveredUpdatedAt) {
            $latestUpdatedAt = $deliveredUpdatedAt->updated_at;
            $dateTime = Carbon::parse($latestUpdatedAt);
            $formattedDateTime = $dateTime->format('Y-m-d H:i:s');
            return $formattedDateTime;
        }else {
            return "Tiada Rekod";
        }
    }
    public function dalamprosesUpdatedAt()
    {
        $deliveredUpdatedAt = Application::whereNot('status_penerimaan', 1)->latest()->first();
        if ($deliveredUpdatedAt) {
            $latestUpdatedAt = $deliveredUpdatedAt->updated_at;
            $dateTime = Carbon::parse($latestUpdatedAt);
            $formattedDateTime = $dateTime->format('Y-m-d H:i:s');
            return $formattedDateTime;
        }else {
            return "Tiada Rekod";
        }
    }
    public function dalamproses()
    {
        $dalamProsesCount = Application::whereNot('status_penerimaan', 1)->count();
        return $dalamProsesCount;
    }
    public function applicationtotalbyscheme1()
    {
        // PHKT 01
        $applicationtotalbyscheme1 = Application::where('skim', 1)->count();
        return $applicationtotalbyscheme1;
    }
    public function applicationbyscheme1UpdatedAt()
    {
        $applicationScheme1UpdatedAt = Application::where('skim', 1)->latest()->first();
        if ($applicationScheme1UpdatedAt) {
            $latestUpdatedAt = $applicationScheme1UpdatedAt->updated_at;
            $dateTime = Carbon::parse($latestUpdatedAt);
            $formattedDateTime = $dateTime->format('Y-m-d H:i:s');
            return $formattedDateTime;
        }else {
            return "Tiada Rekod";
        }
    }
    public function applicationtotalbyscheme2()
    {
        // PHKT 02
        $applicationtotalbyscheme2 = Application::where('skim', 2)->count();
        return $applicationtotalbyscheme2;
    }
    public function applicationbyscheme2UpdatedAt()
    {
        $applicationScheme1UpdatedAt = Application::where('skim', 2)->latest()->first();
        if ($applicationScheme1UpdatedAt) {
            $latestUpdatedAt = $applicationScheme1UpdatedAt->updated_at;
            $dateTime = Carbon::parse($latestUpdatedAt);
            $formattedDateTime = $dateTime->format('Y-m-d H:i:s');
            return $formattedDateTime;
        }else {
            return "Tiada Rekod";
        }
    }
    public function applicationtotalbyscheme3()
    {
        // PHKT 03
        $applicationtotalbyscheme3 = Application::where('skim', 3)->count();
        return $applicationtotalbyscheme3;
    }
    public function applicationbyscheme3UpdatedAt()
    {
        $applicationScheme3UpdatedAt = Application::where('skim', 3)->latest()->first();
        if ($applicationScheme3UpdatedAt) {
            $latestUpdatedAt = $applicationScheme3UpdatedAt->updated_at;
            $dateTime = Carbon::parse($latestUpdatedAt);
            $formattedDateTime = $dateTime->format('Y-m-d H:i:s');
            return $formattedDateTime;
        }else {
            return "Tiada Rekod";
        }
    }
    public function applicationtotalbypremise1()
    {
        // Kedai
        $applicationtotalbypremise1 = Application::where('jenis_premis', 1)->count();
        return $applicationtotalbypremise1;
    }
    public function applicationbypremise1UpdatedAt()
    {
        $applicationPremise1UpdatedAt = Application::where('jenis_premis', 1)->latest()->first();
        if ($applicationPremise1UpdatedAt) {
            $latestUpdatedAt = $applicationPremise1UpdatedAt->updated_at;
            $dateTime = Carbon::parse($latestUpdatedAt);
            $formattedDateTime = $dateTime->format('Y-m-d H:i:s');
            return $formattedDateTime;
        }else {
            return "Tiada Rekod";
        }
    }
    public function applicationtotalbypremise2()
    {
        // Rumah
        $applicationtotalbypremise2 = Application::where('jenis_premis', 2)->count();
        return $applicationtotalbypremise2;
    }
    public function applicationbypremise2UpdatedAt()
    {
        $applicationPremise2UpdatedAt = Application::where('jenis_premis', 2)->latest()->first();
        if ($applicationPremise2UpdatedAt) {
            $latestUpdatedAt = $applicationPremise2UpdatedAt->updated_at;
            $dateTime = Carbon::parse($latestUpdatedAt);
            $formattedDateTime = $dateTime->format('Y-m-d H:i:s');
            return $formattedDateTime;
        }else {
            return "Tiada Rekod";
        }
    }
    public function applicationtotalbypremise3()
    {
        // Rumah Kampung
        $applicationtotalbypremise3 = Application::where('jenis_premis', 3)->count();
        return $applicationtotalbypremise3;
    }
    public function applicationbypremise3UpdatedAt()
    {
        $applicationPremise3UpdatedAt = Application::where('jenis_premis', 3)->latest()->first();
        if ($applicationPremise3UpdatedAt) {
            $latestUpdatedAt = $applicationPremise3UpdatedAt->updated_at;
            $dateTime = Carbon::parse($latestUpdatedAt);
            $formattedDateTime = $dateTime->format('Y-m-d H:i:s');
            return $formattedDateTime;
        }else {
            return "Tiada Rekod";
        }
    }
    public function applicationtotalbykategori1()
    {
        // Khidmat Pelanggan (AFSB)
        $applicationtotalbykategori1 = Application::where('kategori_permohonan', 1)->count();
        return $applicationtotalbykategori1;
    }
    public function applicationbykategori1UpdatedAt()
    {
        $applicationKategori1UpdatedAt = Application::where('kategori_permohonan', 1)->latest()->first();
        if ($applicationKategori1UpdatedAt) {
            $latestUpdatedAt = $applicationKategori1UpdatedAt->updated_at;
            $dateTime = Carbon::parse($latestUpdatedAt);
            $formattedDateTime = $dateTime->format('Y-m-d H:i:s');
            return $formattedDateTime;
        }else {
            return "Tiada Rekod";
        }
    }
    public function applicationtotalbykategori2()
    {
        // Operasi
        $applicationtotalbykategori2 = Application::where('kategori_permohonan', 2)->count();
        return $applicationtotalbykategori2;
    }
    public function applicationbykategori2UpdatedAt()
    {
        $applicationKategori2UpdatedAt = Application::where('kategori_permohonan', 2)->latest()->first();
        if ($applicationKategori2UpdatedAt) {
            $latestUpdatedAt = $applicationKategori2UpdatedAt->updated_at;
            $dateTime = Carbon::parse($latestUpdatedAt);
            $formattedDateTime = $dateTime->format('Y-m-d H:i:s');
            return $formattedDateTime;
        }else {
            return "Tiada Rekod";
        }
    }
    public function applicationtotalbykategori3()
    {
        // Pelanggan (Walk-In)
        $applicationtotalbykategori3 = Application::where('kategori_permohonan', 3)->count();
        return $applicationtotalbykategori3;
    }
    public function applicationbykategori3UpdatedAt()
    {
        $applicationKategori3UpdatedAt = Application::where('kategori_permohonan', 3)->latest()->first();
        if ($applicationKategori3UpdatedAt) {
            $latestUpdatedAt = $applicationKategori3UpdatedAt->updated_at;
            $dateTime = Carbon::parse($latestUpdatedAt);
            $formattedDateTime = $dateTime->format('Y-m-d H:i:s');
            return $formattedDateTime;
        }else {
            return "Tiada Rekod";
        }
    }
    public function applicationtotalbykategori4()
    {
        // Semakan Di Lapangan (Tukar Terus)
        $applicationtotalbykategori4 = Application::where('kategori_permohonan', 4)->count();
        return $applicationtotalbykategori4;
    }
    public function applicationbykategori4UpdatedAt()
    {
        $applicationKategori4UpdatedAt = Application::where('kategori_permohonan', 4)->latest()->first();
        if ($applicationKategori4UpdatedAt) {
            $latestUpdatedAt = $applicationKategori4UpdatedAt->updated_at;
            $dateTime = Carbon::parse($latestUpdatedAt);
            $formattedDateTime = $dateTime->format('Y-m-d H:i:s');
            return $formattedDateTime;
        }else {
            return "Tiada Rekod";
        }
    }
}
