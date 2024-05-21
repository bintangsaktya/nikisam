<div>
    <div class="formulir bawah container-fluid row d-flex justify-content-center gap-3 mt-5">
        <div class="col-7 formulir-kiri d-flex justify-content-around pt-5">
            <div class="formulir-dalam">
                <form>
                    <div class="mb-3 row table-head">
                        <p class="name col-5">Nama Lengkap Nasabah</p>
                        <p class="id-nas col-3">ID Nasabah</p>
                        <p class="tgl-gabung col-4">Tanggal Bergabung</p>
                    </div>
                    <div class="mb-3 row">
                        <p class="name-text col-5">Budi Santoso</p>
                        <p class="id-nas-text col-3">NAS0001</p>
                        <p class="tgl-gabung-text col-4">XX/XX/XXXX</p>
                    </div>

                    <div class="mb-3">
                        <label for="Select" class="form-label tarikan-text">Besaran Tarikan</label>
                        <select id="Select" class="form-select">
                            <option value="20k">Rp 20.000</option>
                            <option value="50k">Rp 50.000</option>
                            <option value="100k">Rp 100.000</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-4 formulir-kanan ">
            <h3 class="px-3 pt-5 pb-3 head-rekap">Rekapitulasi Tarikan</h3>
            <div class="harga-sampah d-flex justify-content-between px-3">
                <p><span>Saldo Awal</span></p>
                <p>Rp150.000</p>
            </div>

            <div class="harga-sampah d-flex justify-content-between px-3">
                <p><span>Tarikan</span></p>
                <p>Rp50.000</p>
            </div>

            <div class="harga-sampah d-flex justify-content-between px-3">
                <p><span>Tanggal Tarikan</span></p>
                <p>18/05/2024</p>
            </div>

            <div class="thin-separator mx-4"></div>

            <div class="total-harga d-flex justify-content-between">
                <p class="ps-3 py-4 total-kiri">Saldo Akhir</p>
                <p class="pe-3 py-4 total-harga-sampah" style="text-align: right;">Rp100000</p>
            </div>

            <a href="/admin"><button type="submit" class="button-green mx-5">Simpan dan Konfirmasi
                    Data</button></a>
        </div>
    </div>
</div>