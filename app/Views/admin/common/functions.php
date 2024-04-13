<?php
    function slug($title){
        // replace non letter or digits by -
        $text = preg_replace('`~[^\\pL\//d]+~u`', '-', $text);

        // trim
        $text = trim($title);

        $text = str_replace(' ','-', $title);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        //lowercase
        $text = strtolower($text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // if (empty($text))
        // {
        //     return 'N-A';
        // }

        return $text;

    }
    


?>