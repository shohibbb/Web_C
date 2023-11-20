<?php

namespace Hero;

trait Introduction
{
    public function intro()
    {
        return 'Game Started';
    }
}

abstract class BioData
{
    private $name;
    private $element;
    private $weapon;

    abstract public function started();

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setElement($element)
    {
        $this->element = $element;
    }

    public function setWeapon($weapon)
    {
        $this->weapon = $weapon;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getElement()
    {
        return $this->element;
    }

    public function getWeapon()
    {
        return $this->weapon;
    }
}

class Character extends BioData
{
    use Introduction;

    public function started()
    {
        echo $this->intro() . " Battle between " . $this->getName() . " using " . $this->getElement() . " and " . $this->getWeapon();
    }
}
