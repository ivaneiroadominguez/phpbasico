<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Constantes


define('MSG_ERR', "Error...");


/**
 * Limpia entrada text
 * @param String $valor
 * @return String
 */
function limpiar($valor) {
    return strip_tags(trim(htmlspecialchars($valor, ENT_QUOTES, "ISO-8859-1"))); 
}

/**
 * Devuelve formtao moneda
 * @param String $valor
 * @return String
 */
function formatoMoneda($valor) {
    return number_format($valor, 2, ',', ' ').'&euro;';
}

/**
 * Valida si una cadena una vez limpia 
 * tiene entre 1 y 50 caracteres
 * @param type $valor
 * @return boolean
 */
function validarNombreCliente($valor) {
    $valor = limpiar($valor);
    if (strlen($valor)>0 && strlen($valor)<=50){
        return TRUE;
    } else {
        return FALSE;
    }
}

/**
 * Mira si una entrada es un valor numérico con decimales
 * y además es mayor que 0
 * @param String $valor
 * @return boolean
 */
function validarEmail($email) {
    $email = limpiar($email);
    if (filter_var($email,FILTER_VALIDATE_EMAIL )){
        return TRUE;
    } else {
        return FALSE;
    }
}


/**
 * Mira si una entrada es un valor numérico entreo
 * y además es mayor que 0  
 * @param type $valor
 * @return boolean
 */
function validarPassword($valor) {
    $valor = limpiar($valor);
    if (strlen($valor)>1000 && strlen($valor)<=9999){
        return TRUE;
    } else {
        return FALSE;
    }
}


/**
 * 
 * string strtoupper ( string $string )
 * Devuelve el string con todos los caracteres alfabéticos convertidos a mayúsculas.
 */