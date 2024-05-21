<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Ipsum",
            'email' => "ipsum@example.com",
            'password' => bcrypt("password"),
            'role' => "admin",
        ]);

        DB::table('users')->insert([
            'name' => "Lorem",
            'email' => "lorem@example.com",
            'password' => bcrypt("password"),
            'role' => "penjemput",
        ]);


        DB::table('admin')->insert([
            'id_admin' => 1,
            'id' => 1,
            'nama_lengkap' => "Ipsum",
            'alamat' => "Jalan Entah Berantah",
            'no_hp' => "0821321",
            'tahun_masuk' => Carbon::now()
        ]);

        DB::table('penjemput')->insert([
            'id_penjemput' => 1,
            'id' => 2,
            'nama_lengkap' => "Lorem",
            'alamat' => "Jalan Jalan",
            'no_hp' => "0893123",
            'tahun_masuk' => Carbon::now()
        ]);

        DB::table('jenis_sampah')->insert([
            'jenis_sampah' => "Plastik",
            'harga_kilo' => "2000",
            'deskripsi' => "Terbuat dari bahan polimer yang sulit terurai, termasuk botol plastik, kantong plastik, dan styrofoam.",
            'id_admin' => "1"
        ]);

        DB::table('jenis_sampah')->insert([
            'jenis_sampah' => "Kertas",
            'harga_kilo' => "1000",
            'deskripsi' => "Terbuat dari bahan dasar logam yang dapat didaur ulang, seperti kaleng aluminium, besi tua, dan kabel bekas.",
            'id_admin' => "1"
        ]);

        DB::table('jenis_sampah')->insert([
            'jenis_sampah' => "Logam",
            'harga_kilo' => "3000",
            'deskripsi' => "Terbuat dari bahan dasar logam yang dapat didaur ulang, seperti kaleng aluminium, besi tua, dan kabel bekas.",
            'id_admin' => "1"
        ]);

        DB::table('jenis_sampah')->insert([
            'jenis_sampah' => "Kaca",
            'harga_kilo' => "500",
            'deskripsi' => "Terbuat dari silika dan pasir, termasuk botol kaca, pecahan kaca, dan cermin.",
            'id_admin' => "1"
        ]);

        DB::table('jenis_sampah')->insert([
            'jenis_sampah' => "Karet",
            'harga_kilo' => "4000",
            'deskripsi' => "Terbuat dari lateks, termasuk ban bekas, selang karet, dan mainan karet.",
            'id_admin' => "1"
        ]);

        DB::table('jenis_sampah')->insert([
            'jenis_sampah' => "Tekstil",
            'harga_kilo' => "1500",
            'deskripsi' => "Terbuat dari serat alami atau sintetis, seperti pakaian bekas, seprai, dan tirai.",
            'id_admin' => "1"
        ]);

        DB::table('jenis_sampah')->insert([
            'jenis_sampah' => "Elektronik",
            'harga_kilo' => "5000",
            'deskripsi' => "Terdiri dari berbagai komponen elektronik, seperti komputer bekas, televisi, dan kulkas.",
            'id_admin' => "1"
        ]);

        DB::table('jenis_sampah')->insert([
            'jenis_sampah' => "Baterai",
            'harga_kilo' => "2500",
            'deskripsi' => "Mengandung bahan kimia berbahaya, seperti baterai kering, baterai bekas, dan aki.",
            'id_admin' => "1"
        ]);

        DB::table('jenis_sampah')->insert([
            'jenis_sampah' => "Minyak goreng bekas",
            'harga_kilo' => "1000",
            'deskripsi' => "Berpotensi mencemari lingkungan jika tidak diolah dengan benar.",
            'id_admin' => "1"
        ]);

        DB::table('jenis_sampah')->insert([
            'jenis_sampah' => "Lampu neon bekas",
            'harga_kilo' => "1500",
            'deskripsi' => "Mengandung merkuri yang berbahaya bagi kesehatan.",
            'id_admin' => "1"
        ]);

        DB::table('jenis_sampah')->insert([
            'jenis_sampah' => "Ban bekas",
            'harga_kilo' => "2000",
            'deskripsi' => "Dapat diolah menjadi berbagai produk, seperti pot bunga, kursi taman, dan bahan bakar alternatif.",
            'id_admin' => "1"
        ]);

        DB::table('jenis_sampah')->insert([
            'jenis_sampah' => "Kaleng bekas",
            'harga_kilo' => "3000",
            'deskripsi' => "Dapat didaur ulang menjadi kaleng baru atau produk lainnya.",
            'id_admin' => "1"
        ]);

        DB::table('jenis_sampah')->insert([
            'jenis_sampah' => "Botol plastik bekas",
            'harga_kilo' => "2500",
            'deskripsi' => "Dapat didaur ulang menjadi botol baru, tas, atau produk lainnya.",
            'id_admin' => "1"
        ]);

        DB::table('jenis_sampah')->insert([
            'jenis_sampah' => "Karton bekas",
            'harga_kilo' => "1500",
            'deskripsi' => "Dapat didaur ulang menjadi karton baru, kertas, atau produk lainnya.",
            'id_admin' => "1"
        ]);

        DB::table('jenis_sampah')->insert([
            'jenis_sampah' => "Kertas bekas",
            'harga_kilo' => "1000",
            'deskripsi' => "Dapat didaur ulang menjadi kertas baru, tisu, atau produk lainnya.",
            'id_admin' => "1"
        ]);

        DB::table('jenis_sampah')->insert([
            'jenis_sampah' => "Majalah bekas",
            'harga_kilo' => "1000",
            'deskripsi' => "Dapat didaur ulang menjadi kertas baru, tisu, atau produk lainnya.",
            'id_admin' => "1"
        ]);

        DB::table('jenis_sampah')->insert([
            'jenis_sampah' => "Koran bekas",
            'harga_kilo' => "1000",
            'deskripsi' => "Dapat didaur ulang menjadi kertas baru, tisu, atau produk lainnya.",
            'id_admin' => "1"
        ]);

        DB::table('jenis_sampah')->insert([
            'jenis_sampah' => "Buku bekas",
            'harga_kilo' => "1500",
            'deskripsi' => "Dapat didaur ulang menjadi kertas baru, tisu, atau produk lainnya.",
            'id_admin' => "1"
        ]);

        DB::table('jenis_sampah')->insert([
            'jenis_sampah' => "Daun kering",
            'harga_kilo' => "500",
            'deskripsi' => "Dapat diolah menjadi kompos untuk menyuburkan tanaman.",
            'id_admin' => "1"
        ]);

        DB::table('jenis_sampah')->insert([
            'jenis_sampah' => "Ranting pohon",
            'harga_kilo' => "500",
            'deskripsi' => "Dapat diolah menjadi kompos atau bahan bakar alternatif.",
            'id_admin' => "1"
        ]);

        DB::table('jenis_sampah')->insert([
            'jenis_sampah' => "Sampah organik",
            'harga_kilo' => "500",
            'deskripsi' => "Dapat diolah menjadi kompos untuk menyuburkan tanaman.",
            'id_admin' => "1"
        ]);

        DB::table('jenis_sampah')->insert([
            'jenis_sampah' => "Sampah sisa makanan",
            'harga_kilo' => "500",
            'deskripsi' => "Dapat diolah menjadi kompos atau pakan ternak.",
            'id_admin' => "1"
        ]);

        DB::table('jenis_sampah')->insert([
            'jenis_sampah' => "Sampah medis",
            'harga_kilo' => "10000",
            'deskripsi' => "Harus dibuang dengan benar karena mengandung bahan berbahaya.",
            'id_admin' => "1"
        ]);

        DB::table('jenis_sampah')->insert([
            'jenis_sampah' => "Sampah B3",
            'harga_kilo' => "15000",
            'deskripsi' => "Harus dibuang dengan benar karena mengandung bahan berbahaya dan beracun.",
            'id_admin' => "1"
        ]);

        DB::table('jenis_sampah')->insert([
            'jenis_sampah' => "Sampah elektronik",
            'harga_kilo' => "5000",
            'deskripsi' => "Harus dibuang dengan benar karena mengandung bahan berbahaya.",
            'id_admin' => "1"
        ]);

        DB::table('jenis_sampah')->insert([
            'jenis_sampah' => "Sampah konstruksi",
            'harga_kilo' => "5000",
            'deskripsi' => "Harus dibuang dengan benar karena dapat mencemari lingkungan.",
            'id_admin' => "1"
        ]);

        DB::table('jenis_sampah')->insert([
            'jenis_sampah' => "Sampah tekstil",
            'harga_kilo' => "1500",
            'deskripsi' => "Dapat didaur ulang atau dibuang dengan benar.",
            'id_admin' => "1"
        ]);

        DB::table('jenis_sampah')->insert([
            'jenis_sampah' => "Sampah karet",
            'harga_kilo' => "4000",
            'deskripsi' => "Dapat didaur ulang atau dibuang dengan benar.",
            'id_admin' => "1"
        ]);

        DB::table('jenis_sampah')->insert([
            'jenis_sampah' => "Sampah kaca",
            'harga_kilo' => "500",
            'deskripsi' => "Dapat didaur ulang atau dibuang dengan benar.",
            'id_admin' => "1"
        ]);

        DB::table('jenis_sampah')->insert([
            'jenis_sampah' => "Sampah logam",
            'harga_kilo' => "3000",
            'deskripsi' => "Dapat didaur ulang menjadi barang logam lainnya.",
            'id_admin' => "1"
        ]);


    }
}
