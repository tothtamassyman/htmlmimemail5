<?php
/**
 * Created by PhpStorm
 * User: toth1tamas114
 * Date: 2020. 10. 08.
 * Time: 9:18
 */

namespace HtmlMimeMail5;

/**
 * Attachment classes
 */
class Attachment
{
    /**
     * Data of attachment
     * @var string
     */
    public $data;

    /**
     * Name of attachment (filename)
     * @var string
     */
    public $name;

    /**
     * Content type of attachment
     * @var string
     */
    public $contentType;

    /**
     * Encoding type of attachment
     * @var object
     */
    public $encoding;

    /**
     * Constructor
     *
     * @param string $data        File data
     * @param string $name        Name of attachment (filename)
     * @param string $contentType Content type of attachment
     * @param IEncoding $encoding    Encoding type to use
     */
    public function __construct($data, $name, $contentType, IEncoding $encoding)
    {
        $this->data        = $data;
        $this->name        = $name;
        $this->contentType = $contentType;
        $this->encoding    = $encoding;
    }
}
