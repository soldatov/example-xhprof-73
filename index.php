<?php

xhprof_enable(XHPROF_FLAGS_CPU + XHPROF_FLAGS_MEMORY);

function foo($n)
{
    $v = 0;
    $i = 0;
    while ($i < $n) {
        $v = $v + $i;
        ++$i;
    }

    return $v;
}

foo(100000);

echo '<pre>';
var_export(xhprof_disable());