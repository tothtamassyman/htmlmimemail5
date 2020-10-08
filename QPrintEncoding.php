<?php
/**
 * Created by PhpStorm
 * User: toth1tamas114
 * Date: 2020. 10. 08.
 * Time: 9:23
 */

namespace HtmlMimeMail5;

/**
 * Quoted Printable Encoding class
 */
class QPrintEncoding implements IEncoding
{
    /**
     * Function to encode data using
     * quoted-printable encoding.
     *
     * @param string $input Data to encode
     * @return string
     */
    public function encode($input)
    {
        // Replace non printables
        $input = preg_replace('/([^\x20\x21-\x3C\x3E-\x7E\x0A\x0D])/e', 'sprintf("=%02X", ord("\1"))', $input);
        #$inputLen = strlen($input);
        $outLines = array();
        $lineMax = 0;

        $lines = preg_split('/\r?\n/', $input);

        // Walk through each line
        for ($i = 0; $i < count($lines); $i++) {
            // Is line too long ?
            if (strlen($lines[$i]) > $lineMax) {
                $outLines[] = substr($lines[$i], 0, $lineMax - 1) . "="; // \r\n Gets added when lines are imploded
                $lines[$i] = substr($lines[$i], $lineMax - 1);
                $i--; // Ensure this line gets redone as we just changed it
            } else {
                $outLines[] = $lines[$i];
            }
        }

        // Convert trailing whitespace
        $output = preg_replace('/(\x20+)$/me', 'str_replace(" ", "=20", "\1")', $outLines);

        return implode("\r\n", $output);
    }

    /**
     * Returns type
     */
    public function getType()
    {
        return 'quoted-printable';
    }
}
