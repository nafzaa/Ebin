<?php

namespace App\Http\Livewire;

use App\Models\Application;
use App\Models\Negeri;
use Livewire\Component;

class DeliveryBin extends Component
{
    public $statePage = 0;

    public $nama_pekerja;
    public $no_pekerja;
    public $no_lori;

    public $lokasisearch;

    public $iddatabin;
    public $skim;
    public $jenis_premis;
    public $kategori_permohonan;
    public $lokasi;
    public $nama_jalan;
    public $nama_taman;
    public $poskode;
    public $negeri;
    public $nama_penerima;
    public $no_kp_penerima;
    public $status_penerima;
    public $no_tel_penerima;
    public $email_penerima;
    public $warganegara_penerima;
    public $jenis_tong;
    public $jumlah_tong;
    public $no_siri_tongB;
    public $no_siri_tongL;
    public $Kategori_penerima;
    public $catatan;

    public $datatable = [];
    public $dataNegeri = [];
    public $dataQrCode;

    public function updated()
    {
        $this->dataNegeri = Negeri::all();

        // fitter lokasi dan negeri with data lokasi
        $this->datatable = Application::where('lokasi', 'like', '%' . $this->lokasisearch . '%')
            ->orWhere('negeri', 'like', '%' . $this->lokasisearch . '%')
            ->get();

        if ($this->lokasisearch == "") {
            $this->datatable = [];
        }
    }

    public function render()
    {
        return view('livewire.delivery-bin');
    }

    public function HandleSubmit()
    {
        $this->statePage = 1;
    }

    public function HandleDetail($id)
    {
        $dataApplication = Application::find($id);

        $this->iddatabin = $dataApplication->id;
        $this->skim = $dataApplication->Skim;
        $this->jenis_premis = $dataApplication->jenis_premis;
        $this->kategori_permohonan = $dataApplication->kategori_permohonan;
        $this->lokasi = $dataApplication->lokasi;
        $this->nama_jalan = $dataApplication->nama_jalan;
        $this->nama_taman = $dataApplication->nama_taman;
        $this->poskode = $dataApplication->poskode;
        $this->negeri = $dataApplication->negeri;
        $this->nama_penerima = $dataApplication->nama_penerima;
        $this->no_kp_penerima = $dataApplication->no_kp_penerima;
        $this->status_penerima = $dataApplication->status_penerima;
        $this->no_tel_penerima = $dataApplication->no_tel_penerima;
        $this->email_penerima = $dataApplication->email_penerima;
        $this->warganegara_penerima = $dataApplication->warganegara_penerima;
        $this->no_siri_tongL = $dataApplication->no_siri_tongB;

        $this->statePage = 2;
    }

    public function HandleSumbitForm()
    {
        // update data application
        $dataApplication = Application::find($this->iddatabin);

        $dataApplication->skim = $this->skim;
        $dataApplication->jenis_premis = $this->jenis_premis;
        $dataApplication->kategori_permohonan = $this->kategori_permohonan;
        $dataApplication->lokasi = $this->lokasi;
        $dataApplication->nama_jalan = $this->nama_jalan;
        $dataApplication->nama_taman = $this->nama_taman;
        $dataApplication->poskode = $this->poskode;
        $dataApplication->negeri = $this->negeri;
        $dataApplication->nama_penerima = $this->nama_penerima;
        $dataApplication->no_kp_penerima = $this->no_kp_penerima;
        $dataApplication->status_penerima = $this->status_penerima;
        $dataApplication->no_tel_penerima = $this->no_tel_penerima;
        $dataApplication->email_penerima = $this->email_penerima;
        $dataApplication->warganegara_penerima = $this->warganegara_penerima;
        $dataApplication->jenis_tong = $this->jenis_tong;
        $dataApplication->jumlah_tong = $this->jumlah_tong;
        $dataApplication->no_siri_tongB = $this->no_siri_tongB;
        $dataApplication->no_siri_tongL = $this->no_siri_tongL;
        $dataApplication->Kategori_penerima = $this->Kategori_penerima;
        $dataApplication->catatan = $this->catatan;
        $dataApplication->nama_pekerja = $this->nama_pekerja;
        $dataApplication->no_pekerja = $this->no_pekerja;
        $dataApplication->no_lori = $this->no_lori;
        $dataApplication->status_permohonan = 1;
        $dataApplication->status_penerimaan = 1;

        $dataApplication->save();

        // clear form
        $this->skim = "";
        $this->jenis_premis = "";
        $this->kategori_permohonan = "";
        $this->lokasi = "";
        $this->nama_jalan = "";
        $this->nama_taman = "";
        $this->poskode = "";
        $this->negeri = "";
        $this->nama_penerima = "";
        $this->no_kp_penerima = "";
        $this->status_penerima = "";
        $this->no_tel_penerima = "";
        $this->email_penerima = "";
        $this->warganegara_penerima = "";
        $this->jenis_tong = "";
        $this->jumlah_tong = "";
        $this->no_siri_tongB = "";
        $this->no_siri_tongL = "";
        $this->Kategori_penerima = "";
        $this->catatan = "";
        $this->lokasisearch = "";
        $this->datatable = [];

        // redirect to page 3
        $this->statePage = 1;

        // show toast bootstrap
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Permohonan berjaya dihantar."
        ]);
    }
}
