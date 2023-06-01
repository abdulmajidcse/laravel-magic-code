<?php

namespace AbdulMajidCSE\LaravelMagicCode\Helpers;

class MagicCode
{
    /**
     * Generate Magic ID (Invoice, Serial etc)
     * @param string $mainID
     * @param int $length
     * @param string $replacedString
     * @param string $prefix
     * @param string $replacedFrom
     * 
     * @return string
     */
    public function generateID(string $mainID, int $length, string $replacedString = '0', string $prefix = "", string $replacedFrom = 'left')
    {
        return $prefix . str_pad($mainID, $length, $replacedString, $replacedFrom == 'right' ? STR_PAD_RIGHT : STR_PAD_LEFT);
    }

    /**
     * Hidden Number or Text (Phone / Mobile Number)
     * @param string $mainID
     * @param int $hiddenFrom
     * @param int $hiddenLength
     * 
     * @return string
     */
    public function hidden(string $mainID, int $hiddenFrom = 3, int $hiddenLength = 5)
    {
        $length = $hiddenFrom + $hiddenLength;
        return str_pad(substr($mainID, 0, $hiddenFrom), $length, '*', STR_PAD_RIGHT) . substr($mainID, $length);
    }
}
