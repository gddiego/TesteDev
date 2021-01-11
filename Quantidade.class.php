<?php
class Quantidade
{

    private $num1 = 6;
    private $num2 = 7;
    private $num3 = 8;
    private $num4 = 9 || 10;



    public function __construct($quantidadedezenas, $totaljogos)
    {


        $this->totaljogos = $totaljogos;

        $this->quantidadedezenas = $quantidadedezenas;
    }



    public function setQtdDeDezenas($n)
    {
        $this->num1;
        $this->num2;
        $this->num3;
        $this->num4;

        return $this->quantidadedezenas = $n;
    }



    public  function getQtdDeDezenas()
    {
        return $this->quantidadedezenas;
    }



    private function Dezenas($quantidadedezenas)
    {

        return  rand(0, $quantidadedezenas);
    }



    public function qtdJogos($valores)
    {
        return Quantidade::Dezenas($valores);
    }




    public function apostar()
    {
        $valores = range(1, 60);

        $val = rand($valores);

        $dezenas = array_slice(array( ), $val);

        return $dezenas;
    }




    public function confereJogos()
    {
        return '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
        <html>
        <head><title></title></head>
        <body></body>
        </html>';

        //metodo retornar uma tabela com dados do sorteio e quantos jogos foram feitos
    }
}
