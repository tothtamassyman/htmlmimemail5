<?php
/**
 * Created by PhpStorm
 * User: toth1tamas114
 * Date: 2020. 10. 08.
 * Time: 9:19
 */

namespace HtmlMimeMail5;

/**
 * File based attachment class
 */
class FileAttachment extends Attachment
{
    /**
     * Constructor
     *
     * @param string $filename    Name of file
     * @param string $contentType Content type of file
     * @param string $encoding    What encoding to use
     */
    public function __construct($filename, $contentType = 'application/octet-stream', $encoding = null)
    {
        $encoding = is_null($encoding) ? new Base64Encoding() : $encoding;

        parent::__construct(file_get_contents($filename), basename($filename), $contentType, $encoding);
    }
}
