<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LineAdvertisement;

class LineAdvertisementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LineAdvertisement::create([
            'content' => 'DIJUAL RUMAH SHM, 370jt bs Nego Surat2 Lt. 140M2, AJB di Pondok Sintesa Bogor Gg.Gatot rt.03/04 No.65B hub.Bp.Wahid 081318765345.'
        ]);

        LineAdvertisement::create([
            'content' => 'DIJUAL CEPAT (BU) Lt.104m/Lb.170m, 2 Lantai, SHM, Cluster Cinta Sejati Residence Jakarta Timur Hubungi. Johnson. 0812-9233-555.'
        ]);

        LineAdvertisement::create([
            'content' => 'ADA TNH -/+250Ha A/n PT.(ADS). Cocok U/Perumahan,Pertokoan/ hrg Mrh 170Rb/mtr Nego. Lok Strategis di Kwsn Permata Indah Bdg. Peminat Serius Hub 0812.1407.0541, 0857.1171.0799'
        ]);

        LineAdvertisement::create([
            'content' => 'DBTHKN SGR:SUPIR Truk,P/max40th, Pglmn Supir min.2,5th,Mmiliki SIM B II,Mngetahui Jln Jabodetabek, Sht Jasmani,Kuat,.Dtg lgsng:PT. IDWSa Jl.Diponegoro Brt No.17 JakPus Hub: 0215600081.'
        ]);

    }
}
