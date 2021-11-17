<?php

if (isset($_GET['Button_submit_1'])) {
    entrar_ocorrencia();
};

if (isset($_GET['Button_submit_2'])) {
    entrar_proposta();
};

if (isset($_GET['Button_submit_3'])) {
    entrar_consulta();
};


function Button_submit_1()
{
    $usuario = $_GET['usuario'];
    $senha = $_GET['senha'];

    $service_url = 'URL_DO_BANCO_OU_DO_SITE';
    $curl_post_data = array(
        "usuario" => $usuario,
        "senha" => $senha
    );
    $curl = curl_init($service_url . "?" . http_build_query($curl_post_data, "&"));
    $curl_response = curl_exec($curl);
    curl_close($curl);
    $resultado = json_decode($curl_response);
};


function Button_submit_2()
{
    $usuario = $_GET['usuario'];
    $senha = $_GET['senha'];
    $vendedor = $_GET['vendedor'];

    $service_url = 'URL_DO_BANCO_OU_DO_SITE';
    $curl_post_data = array(
        "usuario" => $usuario,
        "senha" => $senha,
        "vendedor" => $vendedor
    );
    $curl = curl_init($service_url . "?" . http_build_query($curl_post_data, "&"));
    $curl_response = curl_exec($curl);
    curl_close($curl);
    $resultado = json_decode($curl_response);
};

function Button_submit_3()
{
    $usuario = $_GET['usuario'];
    $senha = $_GET['senha'];
    $cpf = $_GET['cpf'];

    $service_url = 'URL_DO_BANCO_OU_DO_SITE';
    $curl_post_data = array(
        "usuario" => $usuario,
        "senha" => $senha,
        "cpf" => $cpf
    );
    $curl = curl_init($service_url . "?" . http_build_query($curl_post_data, "&"));
    $curl_response = curl_exec($curl);
    curl_close($curl);
    $resultado = json_decode($curl_response);
};
