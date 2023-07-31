<?php

namespace App;

require 'vendor/autoload.php';

use jc21\CliTable;

class CliTableOverride extends CliTable {
    protected $chars = array(
        'top'          => '-',
        'top-mid'      => '+',
        'top-left'     => '+',
        'top-right'    => '+',
        'bottom'       => '-',
        'bottom-mid'   => '+',
        'bottom-left'  => '+',
        'bottom-right' => '+',
        'left'         => '│',
        'left-mid'     => '+',
        'mid'          => '-',
        'mid-mid'      => '+',
        'right'        => '│',
        'right-mid'    => '+',
        'middle'       => '│ ',
    );
}