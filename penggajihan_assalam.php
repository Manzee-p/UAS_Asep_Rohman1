<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggajian Karyawan</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
</head>
<body class="body">
    <div class="contain">
        <div class="text-center">
            <img src="SMK ASSALAM.jpg" class="rounded" alt="">
        </div>
        <div>
            <h3 class="text-center mb-4"><b>PENGGAJIHAN <br> GURU/KARYAWAN YAYASAN ASSALAM</b></h3>
        </div>

    <form action="" method="post" class="mt-4">
        <div class="card">
            <div class="card-header">Data Penggajihan</div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="no" class="form-label">No</label>
                    <input type="text" class="form-control" id="no" name="no" placeholder="No" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Karyawan</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama" required>
                </div>
                <div class="mb-3">
                    <label for="unit" class="form-label">Unit Pendidikan</label>
                    <select class="form-select" id="unit" name="unit" required>
                        <option value="" disabled selected>Pilih Unit Pendidikan</option>
                        <option value="TK">TK</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="MTS">MTS</option>
                        <option value="MA">MA</option>
                        <option value="SMA">SMA</option>
                        <option value="SMK">SMK</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal Gaji</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>

                <div class="row">
                    <!-- Kolom Gaji -->
                    <div class="col-md-6">
                        <div class="col-title">Gaji</div>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <select class="form-select" id="jabatan" name="jabatan" required>
                                <option value="" disabled selected>Pilih Jabatan</option>
                                <option value="Kepala Sekolah">Kepala Sekolah</option>
                                <option value="Wakasek">Wakasek</option>
                                <option value="Guru">Guru</option>
                                <option value="Karyawan">Karyawan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="lama_kerja" class="form-label">Lama Kerja (Tahun)</label>
                            <input type="text" class="form-control" id="lama_kerja" name="lama_kerja" placeholder="lama kerja">
                        </div>
                        <div class="mb-3">
                        <label for="status" class="form-label">Status Kerja</label>
                        <select class="form-select" id="status" name="status" required>
                            <option value="" disabled selected>Pilih Status Kerja</option>
                            <option value="Tetap">Tetap</option>
                            <option value="Kontrak">Kontrak</option>
                        </select>
                    </div>
                    </div>

                    <div class="col-md-6">
                        <div class="col-title">Potongan</div>
                        <div class="mb-3">
                            <label for="" class="form-label">BPJS</label>
                            <input type="text" class="form-control" id="bpjs" name="bpjs" placeholder="Masukkan potongan BPJS" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Pinjaman</label>
                            <input type="text" class="form-control" id="pinjaman" name="pinjaman" placeholder="Masukkan pinjaman" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Cicilan</label>
                            <input type="text" class="form-control" id="cicilan" name="cicilan" placeholder="Masukkan cicilan" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Infaq</label>
                            <input type="text" class="form-control" id="infaq" name="infaq" placeholder="lainnya" required>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center mb-4">
                    <button type="submit" class="btn btn-primary btn-center" name="submit">Proses</button>
                </div>
            </div>
        </div>
    </form>

        <?php
        if (isset($_POST['submit'])) {
            $no = $_POST['no'];
            $name = $_POST['name'];
            $unit = $_POST['unit'];
            $date = $_POST['date'];
            $jabatan = $_POST['jabatan'];
            $status = $_POST['status'];
            $lama_kerja = $_POST['lama_kerja'];
            $bpjs = $_POST['bpjs'];
            $pinjaman = $_POST['pinjaman'];
            $cicilan = $_POST['cicilan'];
            $infaq = $_POST['infaq'];

            class Karyawan {
                private $no;
                private $name;
                private $unit;
                private $date;
                private $jabatan;
                private $status;
                private $lamaKerja;
                private $bpjs;
                private $pinjaman;
                private $cicilan;
                private $infaq;
            
                public function __construct($no, $name, $unit, $date, $jabatan, $status, $lamaKerja, $bpjs, $pinjaman, $cicilan, $infaq) {
                    $this->no = $no;
                    $this->name = $name;
                    $this->unit = $unit;
                    $this->date = $date;
                    $this->jabatan = $jabatan;
                    $this->status = $status;
                    $this->lamaKerja = $lamaKerja;
                    $this->bpjs = $bpjs;
                    $this->pinjaman = $pinjaman;
                    $this->cicilan = $cicilan;
                    $this->infaq = $infaq;
                }
            
                // Menghitung gaji pokok berdasarkan jabatan
                public function Hitung_GajiPokok() {
                    if ($this->jabatan == "Kepala Sekolah") {
                        return 10000000;
                    } elseif ($this->jabatan == "Wakasek") {
                        return 7000000;
                    } elseif ($this->jabatan == "Guru") {
                        return 5000000;
                    } elseif ($this->jabatan == "Karyawan") {
                        return 2500000;
                    } else {
                        return 0;
                    }
                }
            
                // Menghitung bonus berdasarkan status kerja
                public function Hitung_Bonus() {
                    return ($this->status == 'Tetap') ? 1000000 : 0;
                }
            
                // Menghitung total potongan
                public function Hitung_TotalPotongan() {
                    return $this->bpjs + $this->pinjaman + $this->cicilan + $this->infaq;
                }
            
                // Menghitung gaji bersih
                public function Hitung_GajiBersih() {
                    $gajiPokok = $this->Hitung_GajiPokok();
                    $bonus = $this->Hitung_Bonus();
                    $totalPotongan = $this->Hitung_TotalPotongan();
                    return ($gajiPokok + $bonus) - $totalPotongan;
                }

                public function tampilkanInformasi() {
                    echo '<div class="card mt-4"><div class="card-header">Rincian Gaji Karyawan</div>';
                    echo '<div class="card-body">';
                    echo '<div class="text-center"><h5>STRUK GAJI</h5></div>';
                    echo '<table>';
                    echo '<tr><th> No</th><td> : ' . $this->no . '</td></tr>';
                    echo '<tr><th> Nama</th><td> : ' . $this->name . '</td></tr>';
                    echo '<tr><th> Unit Pendidikan</th><td> : ' . $this->unit . '</td></tr>';
                    echo '<tr><th> Tanggal Gaji</th><td> : ' . $this->date . '</td></tr>';
                    echo '<tr><th> Jabatan</th><td> : ' . $this->jabatan . '</td></tr>';
                    echo '<tr><th> Gaji</th><td> : Rp ' . number_format($this->Hitung_GajiPokok(), 0, ',', '.') . '</td></tr>';
                    echo '<tr><th> Lama Kerja</th><td> : ' . $this->lamaKerja . '</td></tr>';
                    echo '<tr><th> Status Kerja</th><td> : ' . $this->status . '</td></tr>';
                    echo '<tr><th> Bonus</th><td> : Rp ' . number_format($this->Hitung_Bonus(), 0, ',', '.') . '</td></tr>';
                    echo '<tr><th> BPJS</th><td> : Rp ' . number_format($this->bpjs, 0, ',', '.') . '</td></tr>';
                    echo '<tr><th> Pinjaman</th><td> : Rp ' . number_format($this->pinjaman, 0, ',', '.') . '</td></tr>';
                    echo '<tr><th> Cicilan</th><td> : Rp ' . number_format($this->cicilan, 0, ',', '.') . '</td></tr>';
                    echo '<tr><th> Infaq</th><td> : Rp ' . number_format($this->infaq, 0, ',', '.') . '</td></tr>';
                    echo '<tr><th>Gaji Bersih</th><td> : Rp ' . number_format($this->Hitung_GajiBersih(), 0, ',', '.') . '</td></tr>';
                    echo '</table>';
                    echo '</div></div>';
                }
            }

            $karyawan = new Karyawan($no, $name, $unit, $date, $jabatan, $status, $lama_kerja, $bpjs, $pinjaman, $cicilan, $infaq);
            
            $karyawan->tampilkanInformasi();
        }
    ?>
</div>
</body>
</html>
