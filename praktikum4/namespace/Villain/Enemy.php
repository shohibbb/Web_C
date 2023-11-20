<?php

namespace Villain;

trait introduction
{
    public function intro()
    {
        return ' against';
    }
}

abstract class biodata
{
    private $EnemyName;
    private $EnemyType;

    public function setEnemyName($EnemyName)
    {
        $this->EnemyName = $EnemyName;
    }
    public function setEnemyType($EnemyType)
    {
        $this->EnemyType = $EnemyType;
    }
    public function getEnemyName()
    {
        return $this->EnemyName;
    }
    public function getEnemyType()
    {
        return $this->EnemyType;
    }
}

class Enemy extends biodata
{
    use introduction;

    public function Against()
    {
        echo $this->intro() . " " . $this->getEnemyName() . ", " . $this->getEnemyType();
    }
}
