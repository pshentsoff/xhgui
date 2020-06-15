<?php

require_once('/usr/local/src/xhgui/external/header.php');

function test_xhgui()
{
    $data = [];
    for ($i = 0; $i < 5000; $i++) {
        $data[] = $i * $i;
        sort($data);
    }
}

test_xhgui();