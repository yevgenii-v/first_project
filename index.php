<?php
    function sum(int $a, int $b): int
    {
        return $a + $b;
    }

    function div(int $a, int $b): int
    {
        if ($b !== 0)
        {
            return $a / $b;
        }

        return 0;
    }

    function main()
    {
        echo 'Hello GitHub';
    }