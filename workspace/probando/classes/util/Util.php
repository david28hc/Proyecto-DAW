<?php

class Util {

    static function encriptar($cadena, $coste = 10) {
        $opciones = array(
            'cost' => $coste
        );
        return password_hash($cadena, PASSWORD_DEFAULT, $opciones);
    }

    static function renderHtmlSelect(array $array, $name, $valor = null) {
        $html = '<select name="' . $name . '">';
        foreach ($array as $key => $value) {
            $selected = '';
            if ($valor == $key) {
                $selected = 'selected="selected"';
            }
            $html .= '<option ' . $selected . 'value=' . $key . '>' . $value . '</option>';
        }
        $html .= '</select>';
        return $html;
    }

    static function renderSelectEstadoCivil($name, $valor = null) {
        $array = array(
            "" => "",
            1 => 'soltero',
            2 => 'casado',
            3 => 'divorciado',
            4 => 'viudo',
            5 => 'de hecho',
            6 => 'otro'
        );
        return self::renderHtmlSelect($array, $name, $valor);
    }

    static function renderTemplate($template, array $data = array()) {
        if (!file_exists($template)) {
            return '';
        }
        $content = file_get_contents($template);
        return self::renderText($content, $data);
    }

    static function renderText($text, array $data = array()) {
        foreach ($data as $indice => $dato) {
            $text = str_replace('{{' . $indice . '}}', $dato, $text);
        }
        $text = preg_replace('/{{[^\s]+}}/', '', $text);
        return $text;
    }

    static function varDump($valor) {
        return '<pre>' . var_export($valor, true) . '</pre>';   
    }

    static function var_dump($valor) {
        echo self::varDump($valor);
    }

    static function verificarClave($claveSinEncriptar, $claveEncriptada) {
        return password_verify($claveSinEncriptar, $claveEncriptada);
    }
}