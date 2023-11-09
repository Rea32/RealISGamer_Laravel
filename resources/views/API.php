<?php

/*function getJuegos(){
    $apiToken = "de4d7ef946134f0381915b4db701d308";
    $url = 'https://api.rawg.io/api/games?key=de4d7ef946134f0381915b4db701d308';
    // Inicializar una solicitud cURL
    $ch = curl_init($url);

    // Configurar las opciones de cURL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Realizar la solicitud GET
    $response = curl_exec($ch);

    // Verificar si la solicitud fue exitosa
    if ($response !== false) {
        // Decodificar la respuesta JSON a un array
        $data = json_decode($response, true);
        $arr_juegos = [];
        if ($data) {
            foreach ($data["results"] as $juegos){
             
               array_push($arr_juegos,$juegos);     
            
            }
            return view ('index',['juegos'=>$arr_juegos]);
        }else{   
            return view ('index',['juegos'=>"Error al decodificar la respuesta JSON."]);     
            
        }
    }else {
        return view ('index',['juegos'=>"Error al decodificar la respuesta JSON."]);
    }

}
*/
function getGeneros(){

    $url = 'https://api.rawg.io/api/genres?key=de4d7ef946134f0381915b4db701d308';
    // Inicializar una solicitud cURL
    $ch = curl_init($url);

    // Configurar las opciones de cURL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Realizar la solicitud GET
    $response = curl_exec($ch);

    // Verificar si la solicitud fue exitosa
    if ($response !== false) {
        // Decodificar la respuesta JSON a un array
        $data = json_decode($response, true);
        $arr_generos = [];
        if ($data) {
            foreach ($data["results"] as $generos){
             
               array_push($arr_generos,$generos);     
            
            }
            return view ('index',['generos'=>$arr_generos]);
        }else{        
            return "Error al decodificar la respuesta JSON.";
        }
    }else {
        return "Error al realizar la solicitud GET: " . curl_error($ch);
    }

}

function getPlataformas(){

    $url = 'https://api.rawg.io/api/platforms?key=de4d7ef946134f0381915b4db701d308';
    // Inicializar una solicitud cURL
    $ch = curl_init($url);

    // Configurar las opciones de cURL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Realizar la solicitud GET
    $response = curl_exec($ch);

    // Verificar si la solicitud fue exitosa
    if ($response !== false) {
        // Decodificar la respuesta JSON a un array
        $data = json_decode($response, true);
        $arr_plataformas = [];
        if ($data) {
            foreach ($data["results"] as $plataformas){
             
               array_push($arr_plataformas,$plataformas);     
            
            }
            return view ('index',['plataformas'=>$arr_plataformas]);
        }else{        
            return "Error al decodificar la respuesta JSON.";
        }
    }else {
        return "Error al realizar la solicitud GET: " . curl_error($ch);
    }

}
