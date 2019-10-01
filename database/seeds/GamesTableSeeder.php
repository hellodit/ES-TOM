<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('games')->delete();

        \DB::table('games')->insert(array (
            0 =>
            array (
                'id' => 1,
                'code' => 'P01',
                'name' => 'Hafiz dan Hafizah',
                'image' => '5d82c55ba8651_in_20190919.jpg',
                'category' => 'Alqolam',
                'description' => '<p>Merupakan boneka yang dapat berinteraksi dengan anak, memiliki kemampuan untuk mengeluarkan audio dalam bahasa Indonesia dan bahasa inggris yang isinya adalah konten islami seperti murottal 30 juz, Asmaul Husna, doa, dll.&nbsp;<br></p>',
                'created_at' => '2019-09-19 00:01:31',
                'updated_at' => '2019-09-19 00:01:31',
            ),
            1 =>
            array (
                'id' => 2,
                'code' => 'P02',
                'name' => 'Smart Hafiz',
                'image' => '5d82c5a2da104_in_20190919.jpg',
                'category' => 'Alqolam',
                'description' => '<p>Tablet PC yang dirancang khusus untuk penggunaan oleh anak – anak dengan warna yang disukai anak dan frame yang mudah digengam sehingga tidak mudah jatuh, tablet PC memiliki kemampuan penyampaian materi dengan mengandalkan Audiovisual. Dalam tablet PC smart hafiz terdapat konten islami yang meliputi cerita nabi, lagu anak islami, kompulan doa, dll.&nbsp;&nbsp;<br></p>',
                'created_at' => '2019-09-19 00:02:43',
                'updated_at' => '2019-09-19 00:02:43',
            ),
            2 =>
            array (
                'id' => 3,
                'code' => 'P03',
                'name' => 'Smart Sajadah',
                'image' => '5d82c6139e522_in_20190919.png',
                'category' => 'Alqolam',
                'description' => 'Sajadah yang memiliki desain yang dapat membuat anak menjadi lebih nyaman untuk belajar ibadah 5 sholat waktu, sajadah dapat mengeluarkan audio yang membantu anak dalam belajar ibadah sholat 5 waktu.',
                'created_at' => '2019-09-19 00:04:35',
                'updated_at' => '2019-09-19 00:04:35',
            ),
            3 =>
            array (
                'id' => 4,
                'code' => 'P04',
                'name' => 'Mushaf For Kids',
                'image' => '5d82c68cb4acd_in_20190919.jpg',
                'category' => 'Alqolam',
                'description' => '<p>Merupakan musyaf yang dirancang khusus untuk anak, dapat mempermudah anak untuk belajar bagaimana membaca sesuai tahqiq, dilengkapi dengan 6 desain yang berbeda pada setiap juznya membuat anak lebih tertarik dalam belajar membaca alquran, selain itu juga terdapat robo pen yang dapat mengeluarkan audio untuk membantu anak dalam pelafalan.<br></p>',
                'created_at' => '2019-09-19 00:06:36',
                'updated_at' => '2019-09-19 00:06:36',
            ),
            4 =>
            array (
                'id' => 5,
                'code' => 'P05',
                'name' => 'Super Cute cam',
                'image' => '5d82c71626232_in_20190919.png',
                'category' => 'Alqolam',
                'description' => '<p>Merupakan miniatur kamera mini yang dapat digunakan oleh anak untuk belajar fotografi dan dapat digunakan dalam media mengenal lingkungannya.<br></p>',
                'created_at' => '2019-09-19 00:08:54',
                'updated_at' => '2019-09-19 00:08:54',
            ),
            5 =>
            array (
                'id' => 6,
                'code' => 'P06',
                'name' => 'Widya Wiyata Pertama',
                'image' => '5d82c796a0075_in_20190919.png',
                'category' => 'ETL Learning',
                'description' => '<p>Merupakan ensiklopedia untuk menjawab berbagai pertanyaan anak, terdapat 4 pengetahuan dasar yang dapat dipelajari oleh anak diantaranya adalah kehidupan, alam, ilmu pengetahuan dan dunia.<br></p>',
                'created_at' => '2019-09-19 00:11:04',
                'updated_at' => '2019-09-19 00:11:04',
            ),
            6 =>
            array (
                'id' => 7,
                'code' => 'P07',
                'name' => 'Learning Math with albert',
                'image' => '5d82c88882a1e_in_20190919.jpg',
                'category' => 'ETL Learning',
                'description' => 'Media pembelajaran yang dirancang untuk mengejarkan ke anak mengenai konsep dasar dalam matematika. Pembelajaran dilakukan dengan interaktif dengan media pembelajaran melalui audio, video dan animasi.',
                'created_at' => '2019-09-19 00:15:04',
                'updated_at' => '2019-09-19 00:15:04',
            ),
            7 =>
            array (
                'id' => 8,
                'code' => 'P08',
                'name' => 'Little Abid',
                'image' => '5d82c8d36feda_in_20190919.jpg',
                'category' => 'Cordoba Kids',
                'description' => '<p>Paket pembelajaran yang berisi buku dengan tulisan yang ringan dan imajinatif dan penuh makna, terdapat 8 buku bahasa inggris dan 19 buku bahasa Indonesia. Paket pembelajaran ini dapat mengajarkan anak mengenai basic knowlegde, life skill, genetal values, spiritual values.<br></p>',
                'created_at' => '2019-09-19 00:16:19',
                'updated_at' => '2019-09-19 00:16:19',
            ),
        ));


    }
}
