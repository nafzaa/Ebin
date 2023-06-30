<main>
    @if ($statePage == 0)
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto">
                                <img src="{{asset('assets/img/logo.png')}}" alt="logo" style="transform: scale(5) ">
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">
                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Butiran Penghantar</h5>
                                </div>
                                <form wire:submit.prevent="HandleSubmit" class="row g-3 needs-validation" novalidate>
                                    <div class="col-12">
                                        <label for="namaPekerja" class="form-label">Nama Pekerja</label>
                                        <input type="text" class="form-control" id="namaPekerja" required
                                            wire:model='nama_pekerja'>
                                    </div>

                                    <div class="col-12">
                                        <label for="noPekerja" class="form-label">No Pekerja</label>
                                        <input type="text" class="form-control" id="noPekerja" required
                                            wire:model='no_pekerja'>
                                    </div>
                                    <div class="col-12">
                                        <label for="noLori" class="form-label">No Lori</label>
                                        <input type="text" class="form-control" id="noLori" required
                                            wire:model='no_lori'>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Hantar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
    @elseif($statePage == 1)
    <div class="row m-5 justify-content-center">
        <h4 class="text-center mb-4">Senarai Permohonan</h4>
        <div class="col-md-5">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari Lokasi" aria-label="Cari Lokasi"
                    aria-describedby="button-addon2" wire:model='lokasisearch'>
            </div>
        </div>

        <div class="col-md-8">
            <div style="width: 100%; overflow-x: scroll;">
                <table class="table table-bordered">
                    <tbody>
                        @foreach ($datatable as $data)
                        <tr>
                            <td>{{ $data->nama_penerima }}</td>
                            <td>{{ $data->lokasi }}</td>
                            <td>
                                @foreach ($dataNegeri as $negeri)
                                @if ($negeri->kod_negeri == $data->negeri)
                                {{ $negeri->nama_negeri }}
                                @endif
                                @endforeach
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#viewApplication" wire:click="HandleDetail({{ $data->id }})">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @else
    <form wire:submit.prevent='HandleSumbitForm'>
        <div class="row justify-content-center m-3">
            <div class="col-md-11">
                {{-- title --}}
                <h4 class="text-center mb-3">BUTIRAN PEMOHON</h4>
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
                                    <input type="text" class="form-control" id="namaJalan" wire:model='nama_jalan'>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="namaTaman" class="form-label">Nama Taman</label>
                                    <input type="text" class="form-control" id="namaTaman" wire:model='nama_taman'>
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
                                    <select class="form-select" id="statusPenerima" wire:model='status_penerima'>
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
                                    <input type="text" class="form-control" id="noTelefon" wire:model='no_tel_penerima'>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" wire:model='email_penerima'>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="warganegara" class="form-label">Warganegara</label>
                                    <select class="form-select" id="warganegara" wire:model='warganegara_penerima'>
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
                                    <input type="text" class="form-control" id="jumlahTong" wire:model='jumlah_tong'>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="noSiriTongb" class="form-label">No Siri Tong (Baru)</label>
                                    <input type="text" class="form-control" id="noSiriTongb" wire:model='no_siri_tongB'>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="noSiriTongl" class="form-label">No Siri Tong (Lama)</label>
                                    <input type="text" class="form-control" id="noSiriTongl" wire:model='no_siri_tongL'>
                                </div>
                            </div>
                        </div>

                        {{-- button scan qr code --}}
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="d-flex justify-content-center">
                                    <div class="mb-3">
                                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                            data-bs-target="#qrCodeModal" onclick="runningqrcode()">
                                            <i class="ri-qr-code-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- modal scan qr code --}}
                        <div wire:ignore class="modal fade" id="qrCodeModal" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div id="reader" width="600px"></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
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

                        {{-- button hantar center --}}
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="d-flex justify-content-center">
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-outline-primary">
                                            HANTAR
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @endif
</main>

@push('js')

<script>
    // emit data to livewire
    document.addEventListener('livewire:load', function () {
        Livewire.on('scanQrCode', function (data) {
            if (data.jenis_tong == "MGB 120L") {
                @this.set('jenis_tong', "1");
            } else {
                @this.set('jenis_tong', "2");
            }
            @this.set('no_siri_tongB', data.no_siri_tong);
            @this.set('jumlah_tong', "1");

        })
    })



    function runningqrcode(id) {
        function onScanSuccess(decodedText, decodedResult) {
        // handle the scanned code as you like, for example:
        console.log(`Code matched = ${decodedText}`, decodedResult);

        // Stop the scanner to avoid scanning of other QR codes.
        html5QrcodeScanner.clear();

        // close modal scan qr code
        $('#qrCodeModal').modal('hide');

        axios.get('/databin/' + decodedText)
            .then(function (response) {
                console.log(response);
                Livewire.emit('scanQrCode', response.data.data);
            })
            .catch(function (error) {
                console.log(error);
            });

        // send data to livewire
        

        }

        // function onScanFailure(error) {
        //     // handle scan failure, usually better to ignore and keep scanning.
        //     // for example:
        //     console.warn(`Code scan error = ${error}`);
        // }

        let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader",
            { fps: 10, qrbox: { width: 250, height: 250 } },
            /* verbose= */ false);
        html5QrcodeScanner.render(onScanSuccess);
    }

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