<?php
namespace App\Http2;
class AnimalClass
{
  // クラスの変数（プロパティ）
  public $animal = "lion";
  // クラスの関数（メソッド）
  public function displayAnimal(){
    echo "hamster";
  }
}


$animal1 = new AnimalClass;
// プロパティを出力する
$animal1->animal; //lion
// メソッドを使う
$animal1->displayAnimal(); //echo hamster;

// クラスの静的メソッドを使う
AnimalClass::displayAnimal();//echo hamster;
