<?php

if(!function_exists('georgian_slug')){
    function georgian_slug($word)
    {
        $georgian = [
            'ა' => 'a',
            'ბ' => 'b',
            'გ' => 'g',
            'დ' => 'd',
            'ე' => 'e',
            'ვ' => 'v',
            'ზ' => 'z',
            'თ' => 't',
            'ი' => 'i',
            'კ' => 'k',
            'ლ' => 'l',
            'მ' => 'm',
            'ნ' => 'n',
            'ო' => 'o',
            'პ' => 'p',
            'ჟ' => 'j',
            'რ' => 'r',
            'ს' => 's',
            'ტ' => 't',
            'უ' => 'u',
            'ფ' => 'f',
            'ქ' => 'q',
            'ღ' => 'g',
            'ყ' => 'y',
            'ჩ' => 'ch',
            'ც' => 'ts',
            'ძ' => 'dz',
            'წ' => 'w',
            'ჭ' => 'ch',
            'ხ' => 'kh',
            'ჯ' => 'j',
            'ჰ' => 'h',
            ' ' => '-',
        ];

        $slug = array();
        $strLen = mb_strlen($word, 'UTF-8');
        for ($i = 0; $i < $strLen; $i++)
            {
                $slug[] = $georgian[mb_substr($word, $i, 1, 'UTF-8')];
            }

        return implode('',$slug);
    }
}

?>