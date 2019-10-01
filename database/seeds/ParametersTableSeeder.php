<?php

use Illuminate\Database\Seeder;

class ParametersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('parameters')->delete();
        
        \DB::table('parameters')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'U1',
                'name' => '<p>Usia antara 0 bulan sampai dengan 2 tahun<br></p>',
                'variable_id' => 1,
                'created_at' => '2019-10-01 08:48:20',
                'updated_at' => '2019-10-01 08:48:20',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'U2',
                'name' => '<p>Usia antara 3 tahun sampai dengan 4 tahun<br></p>',
                'variable_id' => 1,
                'created_at' => '2019-10-01 08:48:54',
                'updated_at' => '2019-10-01 08:48:54',
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'U3',
                'name' => '<p>Usia antara 5 tahun sampai dengan 6 tahun<br></p>',
                'variable_id' => 1,
                'created_at' => '2019-10-01 08:50:01',
                'updated_at' => '2019-10-01 08:50:01',
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 'MB1',
                'name' => '<p>Anak lebih mudah dalam menerima dan memproses informasi dengan menggunakan metode media gerakan, aktivitas tubuh, emosi dan hal lainnya yang terkait dengan gerakan<br></p>',
                'variable_id' => 2,
                'created_at' => '2019-10-01 08:52:37',
                'updated_at' => '2019-10-01 08:52:37',
            ),
            4 => 
            array (
                'id' => 5,
                'code' => 'MB2',
                'name' => '<p>Anak lebih mudah dalam menerima dan memproses informasi yang diterima dengan menggunakan media bunyi, suara, musik, nada, irama, dialog dan hal lain yang terkait<br></p>',
                'variable_id' => 2,
                'created_at' => '2019-10-01 08:53:20',
                'updated_at' => '2019-10-01 08:53:20',
            ),
            5 => 
            array (
                'id' => 6,
                'code' => 'MB3',
                'name' => '<p>Anak lebih mudah dalam menerima dan memproses informasi yang cara penyampaiannya menggunakan citra visual, gambar, diagram, warna dan hal lain yang terkait<br></p>',
                'variable_id' => 2,
                'created_at' => '2019-10-01 08:53:57',
                'updated_at' => '2019-10-01 08:53:57',
            ),
            6 => 
            array (
                'id' => 7,
                'code' => 'NM1',
                'name' => '<p><font face="Times New Roman, serif"><span style="font-size: 16px;">Mulai meniru gerakan berdoa atau sembahyang yang dilakukan orang tua</span></font><br></p>',
                'variable_id' => 3,
                'created_at' => '2019-10-01 08:55:17',
                'updated_at' => '2019-10-01 08:55:17',
            ),
            7 => 
            array (
                'id' => 8,
                'code' => 'NM2',
                'name' => '<p>Mulai memahami kapan mengucapkan salam, terima kasih, maaf, dan sebagainya<br></p>',
                'variable_id' => 3,
                'created_at' => '2019-10-01 08:55:44',
                'updated_at' => '2019-10-01 08:55:44',
            ),
            8 => 
            array (
                'id' => 9,
                'code' => 'NM3',
                'name' => '<p>Senang mendengarkan cerita dalam kitab suci, cerita nabi, dan kumpulan doa<br></p>',
                'variable_id' => 3,
                'created_at' => '2019-10-01 08:57:02',
                'updated_at' => '2019-10-01 08:57:02',
            ),
            9 => 
            array (
                'id' => 10,
                'code' => 'NM4',
                'name' => '<p>Mengetahui&nbsp; perilaku yang berlawanan meskipun belum selalu dilakukan seperti pemahaman perilaku baik-buruk, benar-salah, sopan-tidak sopan<br></p>',
                'variable_id' => 3,
                'created_at' => '2019-10-01 08:57:17',
                'updated_at' => '2019-10-01 08:57:17',
            ),
            10 => 
            array (
                'id' => 11,
                'code' => 'FM1',
                'name' => '<p>Mulai dapat bergerak dengan lincah dan luwes<br></p>',
                'variable_id' => 4,
                'created_at' => '2019-10-01 08:58:21',
                'updated_at' => '2019-10-01 08:58:21',
            ),
            11 => 
            array (
                'id' => 12,
                'code' => 'FM2',
                'name' => '<p>Telah mampu mengkoordinasikan jari tangan dengan luwes.<br></p>',
                'variable_id' => 4,
                'created_at' => '2019-10-01 08:58:48',
                'updated_at' => '2019-10-01 08:58:48',
            ),
            12 => 
            array (
                'id' => 13,
                'code' => 'FM3',
                'name' => '<p>Melakukan koordinasi gerakan mata-kaki-tangan-kepala dalam melakukan aktivitas<br></p>',
                'variable_id' => 4,
                'created_at' => '2019-10-01 08:59:13',
                'updated_at' => '2019-10-01 08:59:13',
            ),
            13 => 
            array (
                'id' => 14,
                'code' => 'K1',
                'name' => '<p>Dapat melihat dan menyentuh benda yang ditunjukkan oleh orang lain<br></p>',
                'variable_id' => 5,
                'created_at' => '2019-10-01 09:00:50',
                'updated_at' => '2019-10-01 09:00:50',
            ),
            14 => 
            array (
                'id' => 15,
                'code' => 'K2',
                'name' => '<p>Dapat mengeksplorasi sebab dan akibat.<br></p>',
                'variable_id' => 5,
                'created_at' => '2019-10-01 09:01:12',
                'updated_at' => '2019-10-01 09:01:12',
            ),
            15 => 
            array (
                'id' => 16,
                'code' => 'K3',
                'name' => '<p>Menerapkan pengetahuan atau pengalaman dalam konteks yang baru<br></p>',
                'variable_id' => 5,
                'created_at' => '2019-10-01 09:01:31',
                'updated_at' => '2019-10-01 09:01:31',
            ),
            16 => 
            array (
                'id' => 17,
                'code' => 'K4',
                'name' => '<p>Mengenal perbedaan berdasarkan ukuran: “lebih dari”; “kurang dari”; dan “paling atau ter”<br></p>',
                'variable_id' => 5,
                'created_at' => '2019-10-01 09:01:51',
                'updated_at' => '2019-10-01 09:01:51',
            ),
            17 => 
            array (
                'id' => 18,
                'code' => 'B1',
                'name' => '<p>Dapat memainkan kata/suara yang didengar dan diucapkan berulang-ulang<br></p>',
                'variable_id' => 6,
                'created_at' => '2019-10-01 09:02:14',
                'updated_at' => '2019-10-01 09:02:14',
            ),
            18 => 
            array (
                'id' => 19,
                'code' => 'B2',
                'name' => '<p>Telah memahami cerita atau dongeng sederhana<br></p>',
                'variable_id' => 6,
                'created_at' => '2019-10-01 09:02:28',
                'updated_at' => '2019-10-01 09:02:28',
            ),
            19 => 
            array (
                'id' => 20,
                'code' => 'B3',
                'name' => '<p>Dapat menggunakan 3 atau 4 kata untuk memenuhi kebutuhannya<br></p>',
                'variable_id' => 6,
                'created_at' => '2019-10-01 09:02:41',
                'updated_at' => '2019-10-01 09:02:41',
            ),
            20 => 
            array (
                'id' => 21,
                'code' => 'B4',
                'name' => '<p>Mampu berkomunikasi secara lisan, memiliki perbendaharaan kata, serta mengenal simbol<br></p>',
                'variable_id' => 6,
                'created_at' => '2019-10-01 09:02:55',
                'updated_at' => '2019-10-01 09:02:55',
            ),
            21 => 
            array (
                'id' => 22,
                'code' => 'SM1',
                'name' => '<p>Telah dapat menyatakan perasaan kepada anak lain<br></p>',
                'variable_id' => 7,
                'created_at' => '2019-10-01 09:03:43',
                'updated_at' => '2019-10-01 09:03:43',
            ),
            22 => 
            array (
                'id' => 23,
                'code' => 'SM2',
                'name' => '<p>Telah mampu bermain bersama dengan anak lain dengan aturan tertentu<br></p>',
                'variable_id' => 7,
                'created_at' => '2019-10-01 09:03:55',
                'updated_at' => '2019-10-01 09:03:55',
            ),
            23 => 
            array (
                'id' => 24,
                'code' => 'SM3',
                'name' => '<p>Dapat memainkan alat musik/instrumen/benda bersama teman<br></p>',
                'variable_id' => 7,
                'created_at' => '2019-10-01 09:04:15',
                'updated_at' => '2019-10-01 09:04:15',
            ),
            24 => 
            array (
                'id' => 25,
                'code' => 'SM4',
                'name' => '<p>Telah mampu bersabar dalam menunggu giliran<br></p>',
                'variable_id' => 7,
                'created_at' => '2019-10-01 09:04:34',
                'updated_at' => '2019-10-01 09:04:34',
            ),
            25 => 
            array (
                'id' => 26,
                'code' => 'KP1',
                'name' => '<p>Kelompok permainan dengan materi pengetahuan agama&nbsp;<br></p>',
                'variable_id' => 8,
                'created_at' => '2019-10-01 09:05:10',
                'updated_at' => '2019-10-01 09:05:10',
            ),
            26 => 
            array (
                'id' => 27,
                'code' => 'KP2',
                'name' => '<p><font color="#6c757d">Kelompok permainan dengan materi pengetahuan umum</font><br></p>',
                'variable_id' => 8,
                'created_at' => '2019-10-01 09:05:43',
                'updated_at' => '2019-10-01 09:05:43',
            ),
            27 => 
            array (
                'id' => 28,
                'code' => 'KP3',
            'name' => '<p><span style="color: rgb(108, 117, 125);">Kelompok permainan dengan materi pengetahuan budi pekerti</span><br></p>',
                'variable_id' => 8,
                'created_at' => '2019-10-01 09:06:07',
                'updated_at' => '2019-10-01 09:06:07',
            ),
        ));
        
        
    }
}