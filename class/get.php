<?php

class Get 
{
    public function get(string $index=null){
        if (empty($index)) return '';

        return isset($_GET[$index]) ? $_GET[$index] : '';
    }
}