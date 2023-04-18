<?php

class Battlefield
{
    private $warriors1;
    private $warriors2;

    public function __construct($warriors1, $warriors2)
    {
        $this->warriors1 = $warriors1;
        $this->warriors2 = $warriors2;
    }

    public function fight()
    {
        while (count($this->warriors1->getWarriors()) > 0) {
            if (count($this->warriors1->getWarriors()) != null) {
                for ($i = 0; $i < count($this->warriors1->getWarriors()); $i += 1) {
                    echo count($this->warriors1->getWarriors()) . '<br>';
                    echo var_dump($this->warriors1->getWarriors()[$i]). '<br>';

                    $this->warriors1->getWarriors()[$i]->attack($this->warriors1->getWarriors()[$i]->getWeapon());
                    $this->warriors1->getWarriors()[$i]->move();
                    $this->warriors2->getWarriors()[$i]->defend($this->warriors1->getWarriors()[$i]->getWeapon());
                    if ($this->warriors1->getWarriors()[$i]->getHP() < 0) {
                        $this->warriors1->deleteWarrior($this->warriors1->getWarriors()[$i]);
                    }

                }
            }
        }
    }


}
?>