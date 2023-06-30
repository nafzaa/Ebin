<div class="row">
    <div class="col-md-12">
        <div class="card mt-5">
            <div class="card-body">
                {{-- button add application left --}}
                <div class="row mt-3">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#addApplication">
                            Tambah Permohonan
                        </button>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search Application"
                                aria-label="Search Application" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Penerima</th>
                            <th scope="col">No Kad Pengenalan/No Passport</th>
                            <th scope="col">No Telefon</th>
                            <th scope="col">No Siri Tong</th>
                            <th scope="col">Status</th>
                            <th scope="col" style="width: 12%">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($dataApplication->count() > 0 )
                        @foreach ($dataApplication as $data)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $data->nama_penerima }}</td>
                            <td>{{ $data->no_kp_penerima }}</td>
                            <td>{{ $data->no_tel_penerima }}</td>
                            <td>{{ $data->no_siri_tongB }}</td>
                            <td>Baharu</td>
                            <td>
                                <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#viewApplication">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#editApplication">
                                    <i class="bi bi-pen"></i>
                                </button>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#deleteApplication">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="7" class="text-center">Tiada Data Permohonan</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div wire:ignore class="modal fade" id="addApplication" tabindex="-1" aria-labelledby="Appliation"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <form wire:submit.prevent="HandleStore">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="Appliation">Tambah Permohonan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="skim" class="form-label">Skim (untuk kegunaan AFSB)</label>
                                            <select class="form-select" id="skim" wire:model='skim'>
                                                <option selected>Pilih Skim</option>
                                                <option value="1">PHKT01</option>
                                                <option value="2">PHKT02</option>
                                                <option value="3">PHKT03</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="jenisPremis" class="form-label">Jenis Premis</label>
                                            <select class="form-select" id="jenisPremis" wire:model='jenis_premis'>
                                                <option selected>Pilih Premis</option>
                                                <option value="1">Kedai</option>
                                                <option value="2">Rumah</option>
                                                <option value="3">Rumah Kampung</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="kategoriPermohonan" class="form-label">Kategori
                                                Permohonan</label>
                                            <select class="form-select" id="kategoriPermohonan"
                                                wire:model='kategori_permohonan'>
                                                <option selected>Pilih Kategori Permohonan</option>
                                                <option value="1">Khidmat Pelanggan (AFSB)</option>
                                                <option value="2">Operasi</option>
                                                <option value="3">Pelanggan (Walk-In)</option>
                                                <option value="4">Semakan Di Lapangan (Tukar Terus)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="row mt-3">
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label for="nlnpnp" class="form-label">Nama Lokasi/Nombor Premis/Nama
                                                Program</label>
                                            <input type="text" class="form-control" id="nlnpnp" wire:model='lokasi'>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="namaJalan" class="form-label">Nama Jalan</label>
                                            <input type="text" class="form-control" id="namaJalan"
                                                wire:model='nama_jalan'>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="namaTaman" class="form-label">Nama Taman</label>
                                            <input type="text" class="form-control" id="namaTaman"
                                                wire:model='nama_taman'>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="poskode" class="form-label">Poskode</label>
                                            <input type="text" class="form-control" id="poskode" wire:model='poskode'>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="negeri" class="form-label">Negeri</label>
                                            <select class="form-select" id="negeri" wire:model='negeri'>
                                                <option selected>Pilih Negeri</option>
                                                @foreach ($dataNegeri as $negeri)
                                                <option value="{{ $negeri->kod_negeri }}">{{ $negeri->nama_negeri }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="namaPenerima" class="form-label">Nama Penerima</label>
                                            <input type="text" class="form-control" id="namaPenerima"
                                                wire:model='nama_penerima'>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="statusPenerima" class="form-label">Status Penerima</label>
                                            <select class="form-select" id="statusPenerima"
                                                wire:model='status_penerima'>
                                                <option selected>Pilih Status Penerima</option>
                                                <option value="1">Pemilik</option>
                                                <option value="2">Penyewa</option>
                                                <option value="3">Wakil</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="noIcPassport" class="form-label">No Kad Pengenalan/No
                                                Passport</label>
                                            <input type="text" class="form-control" id="noIcPassport"
                                                wire:model='no_kp_penerima'>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="noTelefon" class="form-label">No Telefon</label>
                                            <input type="text" class="form-control" id="noTelefon"
                                                wire:model='no_tel_penerima'>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email"
                                                wire:model='email_penerima'>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="warganegara" class="form-label">Warganegara</label>
                                            <select class="form-select" id="warganegara"
                                                wire:model='warganegara_penerima'>
                                                <option selected>Pilih Warganegara</option>
                                                <option value="1">Malaysia</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="row mt-3">
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="jenisTong" class="form-label">Jenis Tong</label>
                                            <select class="form-select" id="jenisTong" wire:model='jenis_tong'>
                                                <option selected>Pilih Jenis Tong</option>
                                                <option value="1">MGB 120L</option>
                                                <option value="2">MGB 240L</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="jumlahTong" class="form-label">Jumlah Tong</label>
                                            <input type="text" class="form-control" id="jumlahTong"
                                                wire:model='jumlah_tong'>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="noSiriTongb" class="form-label">No Siri Tong (Baru)</label>
                                            <input type="text" class="form-control" id="noSiriTongb"
                                                wire:model='no_siri_tongB'>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="noSiriTongl" class="form-label">No Siri Tong (Lama)</label>
                                            <input type="text" class="form-control" id="noSiriTongl"
                                                wire:model='no_siri_tongL'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="kategoriPenerimaanTong" class="form-label">Kategori Penerimaan
                                                Tong</label>
                                            <select class="form-select" id="kategoriPenerimaanTong"
                                                wire:model='Kategori_penerima'>
                                                <option selected>Pilih Kategori Penerimaan</option>
                                                <option value="1">Vo Baharu</option>
                                                <option value="2">Vo Lama</option>
                                                <option value="3">Pecah/Rosak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="catatan" class="form-label">Catatan</label>
                                            <textarea class="form-control" id="catatan" rows="3"
                                                wire:model='catatan'></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Acceptance Agreement with checkbox --}}

                        <div class="card">
                            <div class="card-body">
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <label for="PerjanjianPenerimaan" class="form-label">Perjanjian
                                            Penerimaan</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="PerjanjianPenerimaan" wire:model='terma_syarat'>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Saya Setuju Dengan <a href="#">Terma Dan Syarat-Syarat</a> Yang
                                                Dinyatakan.
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@push('js')
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 2000,
    })

    window.addEventListener('alert', ({
        detail: {
            type,
            message
        }
    }) => {
        Toast.fire({
            icon: type,
            title: message
        })
    })
</script>
@endpush