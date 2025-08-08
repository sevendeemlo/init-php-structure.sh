<?php

class Escape
{
    public static function html($string)
    {
        return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }
}