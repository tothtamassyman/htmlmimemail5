<?php
/**
 * Created by PhpStorm
 * User: toth1tamas114
 * Date: 2020. 10. 08.
 * Time: 9:21
 */

namespace HtmlMimeMail5;

/**
 * Encoding interface
 */
interface IEncoding
{
    public function encode($input);
    public function getType();
}
