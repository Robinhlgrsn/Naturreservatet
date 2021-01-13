<?php

abstract class Animal
{
    function __construct($image, $name, $sound)
    {
        $this->name = $name;
        $this->sound = $sound;
        $this->image = $image;
    }

    abstract function makeSound();

    public $image;
    public $name;
    public $sound;
}

class Ape extends Animal
{
    function makeSound()
    {
        return "apeSound";
    }
}

class Giraff extends Animal
{
    function makeSound()
    {
        return "giraffsound";
    }
}

class Tiger extends Animal
{
    function makeSound()
    {
        return "tigersound";
    }
}

class coconut extends Animal
{
    function makeSound()
    {
        return "coconutsound";
    }
}
