<?php
class shape
{
    function draw()
    {
    }
}

class circle extends shape
{
    function draw()
    {
        print "circle has been drawn.</br>";
    }
}

class Triangle extends shape
{
    function draw()
    {
        print "Triangle has been drawn.</br>";
    }
}

class Ellipse extends shape
{
    function draw()
    {
        print "Ellipse has been drawn.";
    }
}
?>