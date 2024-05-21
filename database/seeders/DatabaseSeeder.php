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
            'harga_kilo' => "6000",
            'deskripsi' => "Ini Plastik",
            'id_admin' => "1"
        ]);
    }
}
