<?php

namespace Core;

class Validator {
    public static function string($data, $min = 1, $max = INF) {
        $data = trim($data);

        return strlen($data) >= $min && strlen($data) <= $max;
    } 

    public static function number($data, $min = 1, $max = 300) {
        if(!is_numeric($data)) {
            return false;
        }

        $data = $data + 0; // Convert to number

        if($min !== null && $data < $min) {
            return false;
        }

        if($max !== null && $data > $max) {
            return false;
        }

        return true;
    }
    
    public static function email($data) {
        return filter_var($data, FILTER_VALIDATE_EMAIL);
    }
}