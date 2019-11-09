<?php

if (!function_exists('consts')){

    function consts($string){
        return $string == 'success' ? '<span class="badge badge-secondary">Berhasil</span>' : '<span class="badge badge-danger">Tidak ditemukan</span>';
    };

}
