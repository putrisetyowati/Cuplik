<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Redaksi;

class RedaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Redaksi::create([
            'title' => 'Redaksi Media Online CuplikCom',
            'image' => 'redaksi_cuplik.jpg',
            'date' => '23/07/2022',
            'time' => '10:12',
            'content' => 'Seluruh layanan yang diberikan mengikuti aturan main yang berlaku dan ditetapkan oleh cuplikcom.

            Pasal Sanggahan (Disclaimer):
            
            cuplikcom tidak bertanggung-jawab atas tidak tersampaikannya data/informasi yang disampaikan oleh pembaca melalui berbagai jenis saluran komunikasi (e-mail, sms, online form) karena faktor kesalahan teknis yang tidak diduga-duga sebelumnya.
            
            cuplikcom berhak untuk memuat, tidak memuat, mengedit, dan/atau menghapus data/informasi yang disampaikan oleh pembaca.
            
            Data dan/atau informasi yang tersedia di cuplikcom hanya sebagai rujukan/referensi belaka, dan tidak diharapkan untuk tujuan perdagangan saham, transaksi keuangan/bisnis maupun transaksi lainnya. Walau berbagai upaya telah dilakukan untuk menampilkan data dan/atau informasi seakurat mungkin, cuplikcom dan semua mitra yang menyediakan data dan informasi, termasuk para pengelola halaman Curhat Rakyat dan Iklan Baris, tidak bertanggung jawab atas segala kesalahan dan keterlambatan memperbarui data atau informasi, atau segala kerugian yang timbul karena tindakan yang berkaitan dengan penggunaan data/informasi yang disajikan cuplikcom.',
        ]);
    }
}
