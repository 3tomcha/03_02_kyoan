<?php
class AnimalClass
{
  // クラスの変数（プロパティ）
  public $animal = "cat";
  // クラスの関数（メソッド）
  public function displayAnimal(){
    echo "dog";
  }
}


$animal1 = new AnimalClass;
// プロパティを出力する
$animal1->animal; //cat
// メソッドを使う
$animal1->displayAnimal(); //echo dog;

// クラスの静的メソッドを使う
AnimalClass::displayAnimal();//echo dog;
