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
                'id' => 2,
                'code' => 'U1',
                'name' => 'Usia 0 bulan sampai dengan 2 tahun',
                'variable_id' => 1,
                'description' => 'Usia 0 bulan sampai dengan 2 tahun',
                'created_at' => '2019-09-19 02:01:21',
                'updated_at' => '2019-09-19 02:01:21',
            ),
            1 => 
            array (
                'id' => 3,
                'code' => 'U2',
                'name' => 'Usia 3 bulan sampai dengan 4 tahun',
                'variable_id' => 1,
                'description' => '<p><font color="#6c757d">Usia 3 bulan sampai dengan 4 tahun</font><br></p>',
                'created_at' => '2019-09-19 02:01:56',
                'updated_at' => '2019-09-19 02:01:56',
            ),
            2 => 
            array (
                'id' => 4,
                'code' => 'U3',
                'name' => 'Usia 5 bulan sampai dengan 6 tahun',
                'variable_id' => 1,
            'description' => '<p><span style="color: rgb(108, 117, 125);">Usia 5 bulan sampai dengan 6 tahun</span><br></p>',
                'created_at' => '2019-09-19 02:02:33',
                'updated_at' => '2019-09-19 02:02:33',
            ),
            3 => 
            array (
                'id' => 5,
                'code' => 'MB1',
                'name' => 'Kinetik',
                'variable_id' => 2,
                'description' => '<p><span lang="IN" style="font-size: 12pt; line-height: 150%; font-family: &quot;Times New Roman&quot;, serif;">Anak akan lebih mudah dalam menerima dan
memproses informasi yang diterima dengan menggunakan media gerakan, aktivitas
tubuh, emosi dan hal lainnya yang terkait dengan gerakan.</span><br></p>',
                'created_at' => '2019-09-19 02:03:40',
                'updated_at' => '2019-09-19 02:03:40',
            ),
            4 => 
            array (
                'id' => 6,
                'code' => 'MB2',
                'name' => 'Auditorial',
                'variable_id' => 2,
                'description' => '<p><span lang="IN" style="font-size: 12pt; line-height: 150%; font-family: &quot;Times New Roman&quot;, serif;">Anak akan lebih mudah dalam menerima dan
memproses informasi yang diterima dengan menggunakan media bunyi, suara, musik,
nada, irama, dialog dan hal lain yang terkait.</span><br></p>',
                'created_at' => '2019-09-19 02:04:02',
                'updated_at' => '2019-09-19 02:04:02',
            ),
            5 => 
            array (
                'id' => 7,
                'code' => 'MB3',
                'name' => 'Visual',
                'variable_id' => 2,
                'description' => '<p><span lang="IN" style="font-size: 12pt; line-height: 150%; font-family: &quot;Times New Roman&quot;, serif;">Anak akan lebih mudah dalam menerima dan
memproses informasi yang cara penyampaiannya menggunakan citra visual, gambar,
diagram, warna dan hal lain yang terkait.</span><br></p>',
                'created_at' => '2019-09-19 02:04:25',
                'updated_at' => '2019-09-19 02:04:25',
            ),
            6 => 
            array (
                'id' => 8,
                'code' => 'NM1',
                'name' => 'Mulai meniru gerakan berdoa/sembahyang',
                'variable_id' => 3,
                'description' => '<table border="0" cellpadding="0" cellspacing="0" width="305" style="width: 229pt;"><tbody><tr height="26" style="mso-height-source:userset;height:19.5pt">
<td height="26" class="xl63" width="305" style="height:19.5pt;width:229pt">Mulai
meniru gerakan berdoa/sembahyang&nbsp;</td></tr></tbody></table>',
                'created_at' => '2019-09-19 02:04:40',
                'updated_at' => '2019-09-19 02:04:40',
            ),
            7 => 
            array (
                'id' => 9,
                'code' => 'NM2',
                'name' => 'Mulai memahami kapan mengucapkan salam, terima kasih, maaf, dsb',
                'variable_id' => 3,
                'description' => '<table border="0" cellpadding="0" cellspacing="0" width="305" style="width: 229pt;"><tbody><tr height="42" style="mso-height-source:userset;height:31.5pt">
<td height="42" class="xl65" width="305" style="height:31.5pt;width:229pt">Mulai
memahami kapan mengucapkan salam, terima kasih, maaf, dsb</td></tr></tbody></table>',
                'created_at' => '2019-09-19 02:05:15',
                'updated_at' => '2019-09-19 02:05:15',
            ),
            8 => 
            array (
                'id' => 10,
                'code' => 'NM3',
                'name' => 'Senang mendengarkan cerita dalam kitab suci, cerirta nabi, kumpulan doa',
                'variable_id' => 3,
                'description' => '<table border="0" cellpadding="0" cellspacing="0" width="305" style="width: 229pt;"><tbody><tr height="51" style="mso-height-source:userset;height:38.25pt">
<td height="51" class="xl65" width="305" style="height:38.25pt;width:229pt">Senang
mendengarkan cerita dalam kitab suci, cerirta nabi, kumpulan doa&nbsp;</td></tr></tbody></table>',
                'created_at' => '2019-09-19 02:05:31',
                'updated_at' => '2019-09-19 02:05:31',
            ),
            9 => 
            array (
                'id' => 11,
                'code' => 'NM4',
                'name' => 'Mengetahui  perilaku yang berlawanan meskipun belum selalu dilakukan seperti pemahaman perilaku baik-buruk, benar-salah, sopan-tidak sopan',
                'variable_id' => 3,
                'description' => '<table border="0" cellpadding="0" cellspacing="0" width="305" style="width: 229pt;"><tbody><tr height="80" style="height:60.0pt">
<td height="80" class="xl65" width="305" style="height:60.0pt;width:229pt">Mengetahui&nbsp; perilaku yang berlawanan meskipun belum
selalu dilakukan seperti pemahaman perilaku baik-buruk, benar-salah,
sopan-tidak sopan</td></tr></tbody></table>',
                'created_at' => '2019-09-19 02:05:51',
                'updated_at' => '2019-09-19 02:05:51',
            ),
            10 => 
            array (
                'id' => 12,
                'code' => 'FM1',
                'name' => 'Dapat bergerak dengan lincah dan luwes',
                'variable_id' => 4,
                'description' => '<table border="0" cellpadding="0" cellspacing="0" width="305" style="width: 229pt;"><tbody><tr height="20" style="height:15.0pt">
<td height="20" class="xl65" width="305" style="height:15.0pt;width:229pt">Dapat
bergerak dengan lincah dan luwes&nbsp;</td></tr></tbody></table>',
                'created_at' => '2019-09-19 02:06:03',
                'updated_at' => '2019-09-19 02:06:03',
            ),
            11 => 
            array (
                'id' => 13,
                'code' => 'FM2',
                'name' => 'Kordinasi jari dan tangan cukup baik',
                'variable_id' => 4,
                'description' => '<table border="0" cellpadding="0" cellspacing="0" width="305" style="width: 229pt;"><tbody><tr height="20" style="height:15.0pt">
<td height="20" class="xl65" width="305" style="height:15.0pt;width:229pt">Kordinasi
jari dan tangan cukup baik&nbsp;</td></tr></tbody></table>',
                'created_at' => '2019-09-19 02:06:22',
                'updated_at' => '2019-09-19 02:06:22',
            ),
            12 => 
            array (
                'id' => 14,
                'code' => 'FM3',
                'name' => 'Melakukan koordinasi gerakan mata-kaki-tangan-kepala dalam',
                'variable_id' => 4,
                'description' => '<table border="0" cellpadding="0" cellspacing="0" width="305" style="width: 229pt;"><tbody><tr height="56" style="mso-height-source:userset;height:42.0pt">
<td height="56" class="xl65" width="305" style="height:42.0pt;width:229pt">Melakukan
koordinasi gerakan mata-kaki-tangan-kepala dalam&nbsp;</td></tr></tbody></table>',
                'created_at' => '2019-09-19 02:06:41',
                'updated_at' => '2019-09-19 02:06:41',
            ),
            13 => 
            array (
                'id' => 15,
                'code' => 'K1',
                'name' => 'Melihat dan menyentuh benda yang ditunjukan oleh oranglain',
                'variable_id' => 5,
                'description' => '<table border="0" cellpadding="0" cellspacing="0" width="305" style="width: 229pt;"><tbody><tr height="37" style="mso-height-source:userset;height:27.75pt">
<td height="37" class="xl65" width="305" style="height:27.75pt;width:229pt">Melihat
dan menyentuh benda yang ditunjukan oleh oranglain</td></tr></tbody></table>',
                'created_at' => '2019-09-19 02:07:01',
                'updated_at' => '2019-09-19 02:07:01',
            ),
            14 => 
            array (
                'id' => 16,
                'code' => 'K2',
                'name' => 'Mengeksplorasi sebab dan akibat',
                'variable_id' => 5,
                'description' => '<table border="0" cellpadding="0" cellspacing="0" width="305" style="width: 229pt;"><tbody><tr height="20" style="height:15.0pt">
<td height="20" class="xl65" width="305" style="height:15.0pt;width:229pt">Mengeksplorasi
sebab dan akibat</td></tr></tbody></table>',
                'created_at' => '2019-09-19 02:07:46',
                'updated_at' => '2019-09-19 02:07:46',
            ),
            15 => 
            array (
                'id' => 17,
                'code' => 'K3',
                'name' => 'Menerapkan pengetahuan atau pengalaman dalam konteks yang baru',
                'variable_id' => 5,
                'description' => '<table border="0" cellpadding="0" cellspacing="0" width="305" style="width: 229pt;"><tbody><tr height="21" style="mso-height-source:userset;height:15.75pt">
<td height="21" class="xl65" width="305" style="height:15.75pt;width:229pt">Menerapkan
pengetahuan atau pengalaman dalam konteks yang baru</td></tr></tbody></table>',
                'created_at' => '2019-09-19 02:08:02',
                'updated_at' => '2019-09-19 02:08:02',
            ),
            16 => 
            array (
                'id' => 18,
                'code' => 'K4',
                'name' => 'Mengenal perbedaan berdasarkan ukuran: “lebih dari”; “kurang dari”; dan “paling/ter”',
                'variable_id' => 5,
                'description' => '<table border="0" cellpadding="0" cellspacing="0" width="305" style="width: 229pt;"><tbody><tr height="46" style="mso-height-source:userset;height:34.5pt">
<td height="46" class="xl65" width="305" style="height:34.5pt;width:229pt">Mengenal
perbedaan berdasarkan ukuran: “lebih dari”; “kurang dari”; dan “paling/ter”</td></tr></tbody></table>',
                'created_at' => '2019-09-19 02:08:16',
                'updated_at' => '2019-09-19 02:08:16',
            ),
            17 => 
            array (
                'id' => 19,
                'code' => 'B1',
                'name' => 'Memainkan kata/suara yang didengar dan diucapkan berulang- ulang',
                'variable_id' => 6,
                'description' => '<table border="0" cellpadding="0" cellspacing="0" width="305" style="width: 229pt;"><tbody><tr height="40" style="height:30.0pt">
<td height="40" class="xl65" width="305" style="height:30.0pt;width:229pt">Memainkan
kata/suara yang didengar dan diucapkan berulang- ulang</td></tr></tbody></table>',
                'created_at' => '2019-09-19 02:08:29',
                'updated_at' => '2019-09-19 02:08:29',
            ),
            18 => 
            array (
                'id' => 20,
                'code' => 'B2',
                'name' => 'Memahami cerita/dongeng sederhana',
                'variable_id' => 6,
                'description' => '<table border="0" cellpadding="0" cellspacing="0" width="305" style="width: 229pt;"><tbody><tr height="26" style="mso-height-source:userset;height:19.5pt">
<td height="26" class="xl65" width="305" style="height:19.5pt;width:229pt">Memahami
cerita/dongeng sederhana</td></tr></tbody></table>',
                'created_at' => '2019-09-19 02:08:46',
                'updated_at' => '2019-09-19 02:08:46',
            ),
            19 => 
            array (
                'id' => 21,
                'code' => 'B3',
            'name' => 'Menggunakan 3 atau 4 kata untuk memenuhi kebutuhannya (misal, mau minum air putih)',
                'variable_id' => 6,
                'description' => '<table border="0" cellpadding="0" cellspacing="0" width="305" style="width: 229pt;"><tbody><tr height="40" style="height:30.0pt">
<td height="40" class="xl65" width="305" style="height:30.0pt;width:229pt">Menggunakan
3 atau 4 kata untuk memenuhi kebutuhannya (misal, mau minum air putih)</td></tr></tbody></table>',
                'created_at' => '2019-09-19 02:09:21',
                'updated_at' => '2019-09-19 02:09:21',
            ),
            20 => 
            array (
                'id' => 22,
                'code' => 'B4',
                'name' => 'Berkomunikasi secara lisan, memiliki perbendaharaan kata, serta mengenal simbol-simbol',
                'variable_id' => 6,
                'description' => '<table border="0" cellpadding="0" cellspacing="0" width="305" style="width: 229pt;"><tbody><tr height="63" style="height:47.25pt">
<td height="63" class="xl65" width="305" style="height:47.25pt;width:229pt">Berkomunikasi
secara lisan, memiliki perbendaharaan kata, serta mengenal simbol-simbol&nbsp;</td></tr></tbody></table>',
                'created_at' => '2019-09-19 02:11:23',
                'updated_at' => '2019-09-19 02:11:23',
            ),
            21 => 
            array (
                'id' => 23,
                'code' => 'SM1',
                'name' => 'Menyatakan perasaan terhadap anak lain',
                'variable_id' => 7,
                'description' => '<table border="0" cellpadding="0" cellspacing="0" width="305" style="width: 229pt;"><tbody><tr height="28" style="mso-height-source:userset;height:21.0pt">
<td height="28" class="xl65" width="305" style="height:21.0pt;width:229pt">Menyatakan
perasaan terhadap anak lain</td></tr></tbody></table>',
                'created_at' => '2019-09-19 02:13:14',
                'updated_at' => '2019-09-19 02:13:14',
            ),
            22 => 
            array (
                'id' => 24,
                'code' => 'SM2',
                'name' => 'Bermain bersama berdasarkan aturan tertentu',
                'variable_id' => 7,
                'description' => '<p>Bermain bersama berdasarkan aturan tertentu<br></p>',
                'created_at' => '2019-09-19 02:13:31',
                'updated_at' => '2019-09-19 02:13:31',
            ),
            23 => 
            array (
                'id' => 25,
                'code' => 'SM3',
                'name' => 'Memainkan alat musik/instrumen/benda bersama teman',
                'variable_id' => 7,
                'description' => '<table border="0" cellpadding="0" cellspacing="0" width="305" style="width: 229pt;"><tbody><tr height="40" style="mso-height-source:userset;height:30.0pt">
<td height="40" class="xl65" width="305" style="height:30.0pt;width:229pt">Memainkan
alat musik/instrumen/benda bersama teman</td></tr></tbody></table>',
                'created_at' => '2019-09-19 02:13:45',
                'updated_at' => '2019-09-19 02:13:45',
            ),
            24 => 
            array (
                'id' => 26,
                'code' => 'SM4',
                'name' => 'Bersabar menunggu giliran.',
                'variable_id' => 7,
                'description' => '<table border="0" cellpadding="0" cellspacing="0" width="305" style="width: 229pt;"><tbody><tr height="21" style="height:15.75pt">
<td height="21" class="xl65" width="305" style="height:15.75pt;width:229pt">Bersabar
menunggu giliran.</td></tr></tbody></table>',
                'created_at' => '2019-09-19 02:13:57',
                'updated_at' => '2019-09-19 02:13:57',
            ),
            25 => 
            array (
                'id' => 27,
                'code' => 'KP1',
                'name' => 'Pengetahuan Agama',
                'variable_id' => 8,
                'description' => '<table border="0" cellpadding="0" cellspacing="0" width="305" style="width: 229pt;"><tbody><tr height="20" style="height:15.0pt">
<td height="20" class="xl65" width="305" style="height:15.0pt;width:229pt">Pengetahuan
Agama&nbsp;</td></tr></tbody></table>',
                'created_at' => '2019-09-19 02:14:18',
                'updated_at' => '2019-09-19 02:14:18',
            ),
            26 => 
            array (
                'id' => 28,
                'code' => 'KP2',
                'name' => 'Pengetahuan Umum',
                'variable_id' => 8,
                'description' => '<table border="0" cellpadding="0" cellspacing="0" width="305" style="width: 229pt;"><tbody><tr height="20" style="height:15.0pt">
<td height="20" class="xl65" width="305" style="height:15.0pt;width:229pt">Pengetahuan
Umum&nbsp;</td></tr></tbody></table>',
                'created_at' => '2019-09-19 02:14:29',
                'updated_at' => '2019-09-19 02:14:29',
            ),
            27 => 
            array (
                'id' => 29,
                'code' => 'KP3',
                'name' => 'Budi Pekerti',
                'variable_id' => 8,
                'description' => '<table border="0" cellpadding="0" cellspacing="0" width="305" style="width: 229pt;"><tbody><tr height="20" style="height:15.0pt">
<td height="20" class="xl65" width="305" style="height:15.0pt;width:229pt">Budi
Pekerti</td></tr></tbody></table>',
                'created_at' => '2019-09-19 02:14:39',
                'updated_at' => '2019-09-19 02:14:39',
            ),
        ));
        
        
    }
}