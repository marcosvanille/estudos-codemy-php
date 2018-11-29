<?php


interface Veiculo
{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMacha($macha);

}


abstract class  automovel implements Veiculo
{

    public function acelerar($velocidade)
    {
        echo "O veiculo acelerou ate " . $velocidade . "km/h";
    }

    public function frenar($velocidade)
    {
        echo "o veiculo frenou ate" . $velocidade . "km/h";
    }

    public function trocarMacha($macha)
    {
        echo "o veiculo engatou a marcha" . $macha;
    }


}