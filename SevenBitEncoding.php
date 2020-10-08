<?php
/**
 * Created by PhpStorm
 * User: toth1tamas114
 * Date: 2020. 10. 08.
 * Time: 9:23
 */

namespace HtmlMimeMail5;

/**
 * 7Bit Encoding class
 */
class SevenBitEncoding implements IEncoding
{
    /*
    * Function to "encode" data using
    * 7bit encoding.
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
        return '7bit';
    }
}
