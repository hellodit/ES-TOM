<?php

if (!function_exists('consts')){

    function consts($string){
        return $string == 'success' ? '<span class="badge badge-secondary">Berhasil</span>' : '<span class="badge badge-danger">Tidak ditemukan</span>';
    };

}

if(!function_exists('hitungusia')){
    function hitungusia($tanggal_lahir) {
        list($year,$month,$day) = explode("-",$tanggal_lahir);
        $year_diff  = date("Y") - $year;
        $month_diff = date("m") - $month;
        $day_diff   = date("d") - $day;
        if ($month_diff < 0) $year_diff--;
            elseif (($month_diff==0) && ($day_diff < 0)) $year_diff--;
        return $year_diff.' Tahun '.$month_diff.' Bulan '.$day_diff.' Hari';
    }
}
