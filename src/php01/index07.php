<?php
function triangle($a, $b)
{
    return 0.5 * $a * $b;
}
function square($a, $b)
{
    return $a * $b;
}
function trapezoid($a, $b, $c)
{
    return ($a + $b) * $c * 0.5;
}
echo triangle(5, 10) . "\n";
echo square(5, 10) . "\n";
echo trapezoid(5, 10, 10);