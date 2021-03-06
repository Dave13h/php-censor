<?php

namespace Tests\PHPCensor\Helper;

use PHPCensor\Helper\AnsiConverter;
use PHPUnit\Framework\TestCase;

class AnsiConverterTest extends TestCase
{
    public function testConvert_convertToHtml()
    {
        $input          = "\e[31mThis is red !\e[0m";
        $expectedOutput = '<span class="ansi_color_bg_black ansi_color_fg_red">This is red !</span>';
        $actualOutput   = AnsiConverter::convert($input);

        self::assertEquals($expectedOutput, $actualOutput);
    }
}
