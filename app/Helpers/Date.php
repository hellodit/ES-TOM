<?php

if (!function_exists('indo_date')){
    function indo_date($date, $length = null, $show_hour = null, $format = null) {
        $datetime = explode(' ', $date);

        if (empty($datetime[1])) {
            $get_hour = null;
        } else {
            if (isset($show_hour)) {
                $hour = explode(":", $datetime[1]);
                $milis = !empty($format) ? ":$hour[2]" : null;
                $get_hour = " Pukul  <i class='fas fa-clock m-r-5 m-l-5'></i> $hour[0]:$hour[1]$milis";
            } else {
                $get_hour = null;
            }
        }
        $tgl = explode("-", $datetime[0]);
        if ($tgl[1] == '01')
            $mo = empty($length) ? "Januari" : "Jan";
        if ($tgl[1] == '02')
            $mo = empty($length) ? "Februari" : "Feb";
        if ($tgl[1] == '03')
            $mo = empty($length) ? "Maret" : "Mar";
        if ($tgl[1] == '04')
            $mo = empty($length) ? "April" : "Apr";
        if ($tgl[1] == '05')
            $mo = "Mei";
        if ($tgl[1] == '06')
            $mo = "Juni";
        if ($tgl[1] == '07')
            $mo = "Juli";
        if ($tgl[1] == '08')
            $mo = empty($length) ? "Agustus" : "Agust";
        if ($tgl[1] == '09')
            $mo = empty($length) ? "September" : "Sept";
        if ($tgl[1] == '10')
            $mo = empty($length) ? "Oktober" : "Okt";
        if ($tgl[1] == '11')
            $mo = empty($length) ? "November" : "Nov";
        if ($tgl[1] == '12')
            $mo = empty($length) ? "Desember" : "Des";
        $tglutuh = "$tgl[2] $mo $tgl[0]";
        $convert = !empty($length) ? "$tglutuh $get_hour" : $get_hour;

        return $convert;
    }
}
