<?php

function validaBandeira($codigo)
 {
 

    $tipo = array(
        "visa"       => "/^4[0-9]{12}(?:[0-9]{3})?$/",
        "mastercard" => "/^5[1-5][0-9]{14}$/",
        "amex"       => "/^3[47][0-9]{13}$/",
        "discover"   => "/^6(?:011|5[0-9]{2})[0-9]{12}$/",
        "hipercard"  => "/^(606282\d{10}(\d{3})?)|(3841\d{15})$/",
        //'elo'        => '/^((((636368)|(438935)|(504175)|(451416)|(636297))\d{0,10})|((5067)|(4576)|(4011))\d{0,12})$/',
        'elo'        => '(4011|431274|438935|451416|457393|4576|457631|457632|504175|627780|636297|636368|636369|(6503[1-3])|(6500(3[5-9]|4[0-9]|5[0-1]))|(6504(0[5-9]|1[0-9]|2[0-9]|3[0-9]))|(650(48[5-9]|49[0-9]|50[0-9]|51[1-9]|52[0-9]|53[0-7]))|(6505(4[0-9]|5[0-9]|6[0-9]|7[0-9]|8[0-9]|9[0-8]))|(6507(0[0-9]|1[0-8]))|(6507(2[0-7]))|(650(90[1-9]|91[0-9]|920))|(6516(5[2-9]|6[0-9]|7[0-9]))|(6550(0[0-9]|1[1-9]))|(6550(2[1-9]|3[0-9]|4[0-9]|5[0-8]))|(506(699|77[0-8]|7[1-6][0-9))|(509([0-9][0-9][0-9])))',
        'aura'       => '/^(5078\d{2})(\d{2})(\d{11})$/',
        'diners'     => '/^3(?:0[0-5]|[68][0-9])[0-9]{11}/',
        'jcb'        => '/^(?:2131|1800|35\d{3})\d{11}$/',
        'sorocred'   => '^627892|^636414',
    );

    if (preg_match($tipo['elo'],$codigo))
    {

        return 'elo';
	
    }
    else if (preg_match($tipo['mastercard'],$codigo))
    {

        return 'mastercard';
    }
    else if (preg_match($tipo['amex'],$codigo))
    {

        return 'amex';
	
    }
    else if (preg_match($tipo['discover'],$codigo))
    {

        return 'discover';
    }
    else if (preg_match($tipo['hipercard'],$codigo)) {
        return 'hipercard';
    }
    else if (preg_match($tipo['visa'],$codigo)) {
        return 'visa';
    }
    else if (preg_match($tipo['aura'],$codigo)) {
        return 'aura';
    }
    else if (preg_match($tipo['diners'],$codigo)) {
        return 'diners';
    }
    else if (preg_match($tipo['jcb'],$codigo)) {
        return 'jcb';
    }
    else
    {
        return "erro";
    } 
 }
