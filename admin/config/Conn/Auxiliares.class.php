<?php

/**
 * Created by PhpStorm.
 * User: Wilterson garcia
 * Date: 12/06/2016
 * Time: 18:10
 */
class Auxiliares{

    public $date;

    public $dateBR;

    public $idade;

    public function converteData($data){
        if (strstr($data, "/")){//verifica se tem a barra /
            $d = explode ("/", $data);//tira a barra
            $rstData = "$d[2]-$d[1]-$d[0]";//separa as datas $d[2] = ano $d[1] = mes etc...
            $this->date = $rstData;
            return $this->date;
        }
        else if(strstr($data, "-")){
            $data = substr($data, 0, 10);
            $d = explode ("-", $data);
            $rstData = "$d[2]/$d[1]/$d[0]";
            $this->date = $rstData;
            return $this->date;
        }
        else{
            return '';
        }
    }

    public function dataBR($data){
        $timestamp = strtotime($data);
        $this->dateBR = date('d/m/Y', $timestamp);
        return $this->dateBR;
    }

    public function getIdade($data){
        $anoNasc = explode('/',$data);
        $anoAtual = date('Y');
        $this->idade = ($anoAtual - $anoNasc[2]);
        return $this->idade;
    }
    
}