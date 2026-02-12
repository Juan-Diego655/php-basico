<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/juandiego', function () {
    return view('welcome');
});

Route::get('/contactanos', function () {
    return view('form');
});

Route::get('/php-basico', function () {
    echo "<h1 style='color:red;'>Aprendiendo PHP </h1>";
    $name = "Juan Diego Niño Solano";
    $height = 1.86;
    $isLogin = true;
    $age = 26;

    echo "<h4> ". $name . "</h4>";
    echo "<p> ". $name . "</p>";


    echo "<br><br><br> ***************** Estructuras de control ************************** <br><br>";

    $message = "Soy $name, tengo $age años. ". valadateAge($age);
    $message .= $isLogin ? " Estoy logueado" : " No estoy logueado";
    echo $message;

    echo "<br><br><br> ******************* Estructuras de datos ************************ <br><br>";

    $pc = [
        "name" => "pc Gamer core9",
        "price" => 6000,
        "marca" => "Lenovo"
    ];

    $teclado = [
        "name" => "Teclado",
        "price" => 200,
        "marca" => "Asus"
    ];

    $listaProductos = [$pc, $teclado];

    foreach ($listaProductos as $item){
        echo $item['name'] . "<br>";
    }
});


function valadateAge($age){
    if ($age >= 18){
        return "Soy mayor de edad. ";
    }else{
        return  "Soy menor de edad.";
    }
}