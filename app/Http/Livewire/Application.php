<?php

namespace App\Http\Livewire;

use App\Models\Application as ModelsApplication;
use App\Models\Negeri;
use Livewire\Component;

class Application extends Component
{
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
    public $terma_syarat;

    public $dataApplication;
    public $dataNegeri;

    public function mount()
    {
        $this->dataApplication = ModelsApplication::all();
        $this->dataNegeri = Negeri::all();
    }

    public function render()
    {
        return view('livewire.application');
    }

    public function HandleStore()
    {
        $data = [
            'skim' => $this->skim,
            'jenis_premis' => $this->jenis_premis,
            'kategori_permohonan' => $this->kategori_permohonan,
            'lokasi' => $this->lokasi,
            'nama_jalan' => $this->nama_jalan,
            'nama_taman' => $this->nama_taman,
            'poskode' => $this->poskode,
            'negeri' => $this->negeri,
            'nama_penerima' => $this->nama_penerima,
            'no_kp_penerima' => $this->no_kp_penerima,
            'status_penerima' => $this->status_penerima,
            'no_tel_penerima' => $this->no_tel_penerima,
            'email_penerima' => $this->email_penerima,
            'warganegara_penerima' => $this->warganegara_penerima,
            'jenis_tong' => $this->jenis_tong,
            'jumlah_tong' => $this->jumlah_tong,
            'no_siri_tongB' => $this->no_siri_tongB,
            'no_siri_tongL' => $this->no_siri_tongL,
            'Kategori_penerima' => $this->Kategori_penerima,
            'catatan' => $this->catatan,
            'terma_syarat' => $this->terma_syarat,
        ];

        ModelsApplication::create($data);

        $this->reset();

        $this->dataApplication = ModelsApplication::all();
        $this->dataNegeri = Negeri::all();

        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Permohonan berjaya dihantar."
        ]);
    }
}
