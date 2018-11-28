<?php
 //POLIMORFISMO

abstract class  Animal{

    public function falar(){

        return "som";
    }

    public function mover(){

        return "Anda";
    }

}

class cachorro extends Animal{

    public function falar()
    {
        return "Late";
    }
}

class gato extends Animal{

    public function falar()
    {
        return "Mia";
    }

}

class passaro extends Animal{

    public function falar()
    {
        return "canta";
    }

    public function mover()
    {
        return "voa e " . parent::mover();
    }


}


$pluto = new cachorro();

echo $pluto->mover() . "<br/>";
echo $pluto->falar() . "<br/>";

echo "------------------<br/>";


$garfield = new gato();

echo $garfield ->falar() . "<br/>";
echo $garfield->mover() . "<br/>";

echo "------------------<br/>";

$ave = new passaro();

echo $ave->falar()."<br>";
echo $ave->mover() ;


