<?php
/*
* Processes the substr of a long text. Great for text labels.
*/
protected function substrText(string $text, int $size)
    {
        $sub = substr($text, 0, $size);
        return substr($sub, 0, strrpos($sub, ' '));
    }
