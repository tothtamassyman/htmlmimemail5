<?php
/**
 * Created by PhpStorm
 * User: toth1tamas114
 * Date: 2020. 10. 08.
 * Time: 9:20
 */

namespace HtmlMimeMail5;

/**
 * Attachment class to handle attachments which are contained
 * in a variable.
 */
class StringAttachment extends Attachment
{
    /**
     * Constructor
     *
     * @param string $data        File data
     * @param string $name        Name of attachment (filename)
     * @param string $contentType Content type of file
     * @param string $encoding    What encoding to use
     */
    public function __construct($data, $name = '', $contentType = 'application/octet-stream', $encoding = null)
    {
        $encoding = is_null($encoding) ? new Base64Encoding() : $encoding;

        parent::__construct($data, $name, $contentType, $encoding);
    }
}
