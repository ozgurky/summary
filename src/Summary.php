<?php

namespace Ozgurky\Summary;

class Summary
{
    public static function summarize($text)
    {
        return substr($text, 0, 50);
    }
}
