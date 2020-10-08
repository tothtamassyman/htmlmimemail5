<?php
/**
 * Created by PhpStorm
 * User: toth1tamas114
 * Date: 2020. 10. 08.
 * Time: 9:24
 */

namespace HtmlMimeMail5;

/**
 * 8Bit Encoding class
 */
class EightBitEncoding implements IEncoding
{
    /*
    * Function to "encode" data using
    * 8bit encoding.
    *
    * @param string $input Data to encode
    */
    public function encode($input)
    {
        return $input;
    }

    /**
     * Returns type
     */
    public function getType()
    {
        return '8bit';
    }
}
