<?php
// クラスを読み込んで使う
include 'AnimalClass.php';

$animal1 = new AnimalClass;
// プロパティを出力する
$animal1->animal; //cat
// メソッドを使う
$animal1->displayAnimal(); //echo dog;

// クラスの静的メソッドを使う
AnimalClass::displayAnimal();//echo dog;
