<?php

namespace GilangSatria\BelajarPhpMvc\Controller;
use GilangSatria\BelajarPhpMvc\App\View;

class HomeController{
    function index(): void{
        $model = [
            "title" => "Belajar PHP MVC",
            "content" => "Selamat Belajar PHP MVC dari PZN"
        ];
        View::render('Home/index', $model);
    }
    function hello(): void{
        echo "HomeController.hello()";
    }
    function world(): void{
        echo "HomeController.world()";
    }
    function about(): void{
        echo "Author : Gilang Satria";
    }
    function login(): void{
        $request = [
            "username" => $_POST['username'],
            "password" => $_POST['password']
        ];

        $response = [
            "message" => "Login Sukses"
        ];
        // Kirimkan response ke view 
    }
}

?>