<?php
/**
 * Created by PhpStorm.
 * User: korni
 * Date: 27.10.2018
 * Time: 0:15
 */

namespace app\models;


class Tasks
{
    //Написать алгоритм решения задачи:
//В классе 28 учеников. 75% из них занимаются спортом. Сколько учеников в классе занимаются спортом и сколько всего учеников в классе?
    function persents($students,$persents){
        $loveSport=($students*$persents)/100;
        echo $students." ".$loveSport."<br>";
    }


    function task4($a,$b){
        $r=0;
        $q=$a;
        do{
            $q=$q-$b;
            $r++;

        }while($q-$b>0);

    }

//5. Как поменять 2 переменные местами без использования третьей ?
    function swap($a,$b){
        list($a,$b)=[$b,$a];
        print_r( $a." ".$b."<br>");
    }


}