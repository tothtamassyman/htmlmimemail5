<?php
/**
 * Created by PhpStorm
 * User: toth1tamas114
 * Date: 2020. 10. 08.
 * Time: 9:22
 */

namespace HtmlMimeMail5;

/**
 * Base64 Encoding class
 */
class Base64Encoding implements IEncoding
{
    /*
    * Function to encode data using
    * base64 encoding.
    *
    * @param string $input Data to encode
    */
    public function encode($input)
    {
        return rtrim(chunk_split(base64_encode($input), 76, defined('MAIL_MIME_PART_CRLF') ? MAIL_MIME_PART_CRLF : "\r\n"));
    }

    /**
     * Returns type
     */
    public function getType()
    {
        return 'base64';
    }
}
