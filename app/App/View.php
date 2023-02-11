<?php

namespace GilangSatria\BelajarPhpMvc\App;

class View{
    public static function render(string $view, $model){
        require __DIR__ . '/../view/' . $view . '.php';
    }
}