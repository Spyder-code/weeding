@php
    function searchArray($searchArray, $mainArray) {
        foreach ($searchArray as $element) {
            if (!in_array($element, $mainArray)) {
                return false;
            }
        }
        return true;
    }
@endphp
{{-- <li class="menu-title">Navigation</li> --}}

{{-- <li class="menu-item">
    <a href="#menuDashboards" data-bs-toggle="collapse" class="menu-link">
        <span class="menu-icon"><i data-feather="airplay"></i></span>
        <span class="menu-text"> Dashboards </span>
        <span class="badge bg-success rounded-pill ms-auto">4</span>
    </a>
    <div class="collapse" id="menuDashboards">
        <ul class="sub-menu">
            <li class="menu-item">
                <a href="index.html" class="menu-link">
                    <span class="menu-text">Dashboard 1</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="dashboard-2.html" class="menu-link">
                    <span class="menu-text">Dashboard 2</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="dashboard-3.html" class="menu-link">
                    <span class="menu-text">Dashboard 3</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="dashboard-4.html" class="menu-link">
                    <span class="menu-text">Dashboard 4</span>
                </a>
            </li>
        </ul>
    </div>
</li> --}}

@if (searchArray([14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33],$data))
<li class="menu-title">Master</li>
@endif

@if (in_array(14,$data))
<li class="menu-item">
    <a href="#menuPasien" data-bs-toggle="collapse" class="menu-link">
        <span class="menu-icon"><i class="fas fa-calendar-alt"></i></span>
        <span class="menu-text"> Pendaftaran </span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="menuPasien">
        <ul class="sub-menu">
            <li class="menu-item">
                <a href="{{ route('v-pasien.new') }}" class="menu-link">
                    <span class="menu-text">Pasien</span>
                </a>
            </li>
        </ul>
    </div>
</li>
@endif

@if (searchArray([15,16,17,18,19],$data))
    <li class="menu-item">
        <a href="#menuEcommerce" data-bs-toggle="collapse" class="menu-link">
            <span class="menu-icon"><i class="fas fa-shopping-cart"></i></span>
            <span class="menu-text"> Produk </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="menuEcommerce">
            <ul class="sub-menu">
                @if (in_array(15,$data))
                    <li class="menu-item">
                        <a href="{{ route('v-kategori.index') }}" class="menu-link">
                            <span class="menu-text">Kategori</span>
                        </a>
                    </li>
                @endif
                @if (in_array(16,$data))
                    <li class="menu-item">
                        <a href="{{ route('v-satuan.index') }}" class="menu-link">
                            <span class="menu-text">Satuan</span>
                        </a>
                    </li>
                @endif
                @if (in_array(17,$data))
                    <li class="menu-item">
                        <a href="{{ route('v-golonganobat.index') }}" class="menu-link">
                            <span class="menu-text">Golongan Obat</span>
                        </a>
                    </li>
                @endif
                @if (in_array(18,$data))
                    <li class="menu-item">
                        <a href="{{ route('v-supplier.index') }}" class="menu-link">
                            <span class="menu-text">Supplier</span>
                        </a>
                    </li>
                @endif
                @if (in_array(19,$data))
                    <li class="menu-item">
                        <a href="{{ route('v-produk.index') }}" class="menu-link">
                            <span class="menu-text">List Produk</span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </li>
@endif

@if (searchArray([20,21],$data))
    <li class="menu-item">
        <a href="#menuDokter" data-bs-toggle="collapse" class="menu-link">
            <span class="menu-icon"><i class="fas fa-user"></i></span>
            <span class="menu-text"> Dokter </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="menuDokter">
            <ul class="sub-menu">
                @if (in_array(20,$data))
                    <li class="menu-item">
                        <a href="{{ route('v-dokter.index') }}" class="menu-link">
                            <span class="menu-text">List Dokter</span>
                        </a>
                    </li>
                @endif
                @if (in_array(21,$data))
                    <li class="menu-item">
                        <a href="{{ route('v-jadwaldokter.index') }}" class="menu-link">
                            <span class="menu-text">Jadwal Dokter</span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </li>
@endif

@if (searchArray([22,23,24,25,26,27,28],$data))
    <li class="menu-item">
        <a href="#menuBaseui" data-bs-toggle="collapse" class="menu-link">
            <span class="menu-icon"><i class="fas fa-heart"></i></span>
            <span class="menu-text"> Klinik </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse collapse-md" id="menuBaseui">
            <ul class="sub-menu">
                @if (in_array(22,$data))
                    <li class="menu-item">
                        <a href="{{ route('v-diagnosa.index') }}" class="menu-link">
                            <span class="menu-text">Diagnosa</span>
                        </a>
                    </li>
                @endif
                @if (in_array(23,$data))
                    <li class="menu-item">
                        <a href="{{ route('v-jaminan.index') }}" class="menu-link">
                            <span class="menu-text">Jaminan</span>
                        </a>
                    </li>
                @endif
                @if (in_array(24,$data))
                    <li class="menu-item">
                        <a href="{{ route('v-jenispembayaran.index') }}" class="menu-link">
                            <span class="menu-text">Jenis Pembayaran</span>
                        </a>
                    </li>
                @endif
                @if (in_array(25,$data))
                    <li class="menu-item">
                        <a href="{{ route('v-layanan.index') }}" class="menu-link">
                            <span class="menu-text">Layanan</span>
                        </a>
                    </li>
                @endif
                @if (in_array(26,$data))
                    <li class="menu-item">
                        <a href="{{ route('v-pemakaian.index') }}" class="menu-link">
                            <span class="menu-text">Pemakaian Obat</span>
                        </a>
                    </li>
                @endif
                @if (in_array(27,$data))
                    <li class="menu-item">
                        <a href="{{ route('v-poli.index') }}" class="menu-link">
                            <span class="menu-text">Poli</span>
                        </a>
                    </li>
                @endif
                @if (in_array(28,$data))
                    <li class="menu-item">
                        <a href="{{ route('v-tarifpendaftaran.index') }}" class="menu-link">
                            <span class="menu-text">Tarif Pendaftaran</span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </li>
@endif

@if (searchArray([29,30,31,32,33],$data))
    <li class="menu-item">
        <a href="#menuAuth" data-bs-toggle="collapse" class="menu-link">
            <span class="menu-icon"><i class="fas fa-users"></i></span>
            <span class="menu-text"> Pengguna </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse collapse-md" id="menuAuth">
            <ul class="sub-menu">
                @if (in_array(29,$data))
                    <li class="menu-item">
                        <a href="{{ route('v-dokter.index') }}" class="menu-link">
                            <span class="menu-text">Dokter</span>
                        </a>
                    </li>
                @endif
                @if (in_array(30,$data))
                    <li class="menu-item">
                        <a href="{{ route('v-perawat.index') }}" class="menu-link">
                            <span class="menu-text">Perawat</span>
                        </a>
                    </li>
                @endif
                @if (in_array(31,$data))
                    <li class="menu-item">
                        <a href="{{ route('v-role.index') }}" class="menu-link">
                            <span class="menu-text">Role</span>
                        </a>
                    </li>
                @endif
                @if (in_array(32,$data))
                    <li class="menu-item">
                        <a href="{{ route('v-users.index') }}" class="menu-link">
                            <span class="menu-text">List Pengguna</span>
                        </a>
                    </li>
                @endif
                @if (in_array(33,$data))
                    <li class="menu-item">
                        <a href="{{ route('v-rolemenu.index') }}" class="menu-link">
                            <span class="menu-text">Hak Akses</span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </li>
@endif

<li class="menu-item">
    <a href="#menuPcare" data-bs-toggle="collapse" class="menu-link">
        <span class="menu-icon"><i class="fas fa-hospital"></i></span>
        <span class="menu-text"> PCare </span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse collapse-md" id="menuPcare">
        <ul class="sub-menu">
            <li class="menu-item">
                <a href="{{ route('pcare.peserta') }}" class="menu-link">
                    <span class="menu-text">Peserta</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('pcare.diagnosa') }}" class="menu-link">
                    <span class="menu-text">Diagnosa</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('pcare.dokter') }}" class="menu-link">
                    <span class="menu-text">Dokter</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('v-dokter.index') }}" class="menu-link">
                    <span class="menu-text">Club Polaris</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('v-perawat.index') }}" class="menu-link">
                    <span class="menu-text">Peserta Kegiatan Kelompok</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('v-role.index') }}" class="menu-link">
                    <span class="menu-text">Kesadaran</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('v-users.index') }}" class="menu-link">
                    <span class="menu-text">Rujukan</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('v-rolemenu.index') }}" class="menu-link">
                    <span class="menu-text">Riwayat Kunjungan</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('v-rolemenu.index') }}" class="menu-link">
                    <span class="menu-text">MCU</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('v-rolemenu.index') }}" class="menu-link">
                    <span class="menu-text">DPHO</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('v-rolemenu.index') }}" class="menu-link">
                    <span class="menu-text">Obat Kunjungan</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('v-rolemenu.index') }}" class="menu-link">
                    <span class="menu-text">Pendaftaran No. Urut</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('v-rolemenu.index') }}" class="menu-link">
                    <span class="menu-text">Pendaftaran Provider</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('v-rolemenu.index') }}" class="menu-link">
                    <span class="menu-text">Peserta Jenis Kartu</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('v-rolemenu.index') }}" class="menu-link">
                    <span class="menu-text">Poli</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('v-rolemenu.index') }}" class="menu-link">
                    <span class="menu-text">Provider Rayonisasi</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('v-rolemenu.index') }}" class="menu-link">
                    <span class="menu-text">Spesialis</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('v-rolemenu.index') }}" class="menu-link">
                    <span class="menu-text">Sub Spesialis</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('v-rolemenu.index') }}" class="menu-link">
                    <span class="menu-text">Sarana</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('v-rolemenu.index') }}" class="menu-link">
                    <span class="menu-text">Khusus</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('v-rolemenu.index') }}" class="menu-link">
                    <span class="menu-text">Faskes Rujukan Sub Spesialis</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('v-rolemenu.index') }}" class="menu-link">
                    <span class="menu-text">Faskes Rujukan Alih Rawat</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('v-rolemenu.index') }}" class="menu-link">
                    <span class="menu-text">Faskes Rujukan Thalasemia</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('v-rolemenu.index') }}" class="menu-link">
                    <span class="menu-text">Status Pulang</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('v-rolemenu.index') }}" class="menu-link">
                    <span class="menu-text">Tindakan Kunjungan</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('v-rolemenu.index') }}" class="menu-link">
                    <span class="menu-text">Tindakan</span>
                </a>
            </li>
        </ul>
    </div>
</li>

@if (searchArray([6,7,8,9,10,11],$data))
<li class="menu-title">Antrian Pelayanan</li>
@endif

@if (in_array(6,$data))
    <li class="menu-item">
        <a href="{{ url('display/antrian') }}" class="menu-link" target="d_blank">
            <span class="menu-icon"><i class="fas fa-tv"></i></span>
            <span class="menu-text"> Display </span>
        </a>
    </li>
@endif
@if (in_array(7,$data))
    <li class="menu-item">
        <a href="{{ route('v-pelayanan.index',['tipe'=>'skrining']) }}" class="menu-link">
            <span class="menu-icon"><i class="fas fa-check-circle"></i></span>
            <span class="menu-text"> Skrining </span>
        </a>
    </li>
@endif
@if (in_array(8,$data))
    <li class="menu-item">
        <a href="{{ route('v-pelayanan.index',['tipe'=>'poli']) }}" class="menu-link">
            <span class="menu-icon"><i class="fas fa-info-circle"></i></span>
            <span class="menu-text"> Poli </span>
        </a>
    </li>
@endif
@if (in_array(9,$data))
    <li class="menu-item">
        <a href="{{ route('v-pelayanan.index',['tipe'=>'lab']) }}" class="menu-link">
            <span class="menu-icon"><i class="fas fa-microscope"></i></span>
            <span class="menu-text"> Laboratorium </span>
        </a>
    </li>
@endif
@if (in_array(10,$data))
    <li class="menu-item">
        <a href="{{ route('v-pelayanan.index',['tipe'=>'farmasi']) }}" class="menu-link">
            <span class="menu-icon"><i class="fas fa-capsules"></i></span>
            <span class="menu-text"> Farmasi </span>
        </a>
    </li>
@endif
@if (in_array(11,$data))
    <li class="menu-item">
        <a href="{{ route('v-pelayanan.index',['tipe'=>'kasir']) }}" class="menu-link">
            <span class="menu-icon"><i class="fas fa-cash-register"></i></span>
            <span class="menu-text"> Kasir </span>
        </a>
    </li>
@endif

@if (searchArray([12,13],$data))
<li class="menu-title">Transaksi</li>
@endif

@if (in_array(12,$data))
    <li class="menu-item">
        <a href="{{ route('v-transaksi.pembelian') }}" class="menu-link">
            <span class="menu-icon"><i class="fas fa-download"></i></span>
            <span class="menu-text"> Pembelian </span>
        </a>
    </li>
@endif
@if (in_array(13,$data))
    <li class="menu-item">
        <a href="{{ route('v-transaksi.penjualan') }}" class="menu-link">
            <span class="menu-icon"><i class="fas fa-upload"></i></span>
            <span class="menu-text"> Penjualan</span>
        </a>
    </li>
@endif

{{-- <li class="menu-title">Laporan</li>
<li class="menu-item">
    <a href="#" class="menu-link">
        <span class="menu-icon"><i class="fas fa-file-pdf"></i></span>
        <span class="menu-text"> Pembelian </span>
    </a>
</li>
<li class="menu-item">
    <a href="#" class="menu-link">
        <span class="menu-icon"><i class="fas fa-file-pdf"></i></span>
        <span class="menu-text"> Penjualan</span>
    </a>
</li>
<li class="menu-item">
    <a href="#" class="menu-link">
        <span class="menu-icon"><i class="fas fa-file-pdf"></i></span>
        <span class="menu-text"> Pelayanan Pasien</span>
    </a>
</li> --}}
