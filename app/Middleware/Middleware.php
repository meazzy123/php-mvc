<?php

namespace GilangSatria\BelajarPhpMvc\Middleware;

// middleware dieksekusi sebelum controller, bisa digunakan untuk cek sudah login atau belum
interface Middleware{
    function before(): void;
}