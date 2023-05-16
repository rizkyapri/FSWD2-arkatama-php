<?php

// 1. Buatlah class Animal dengan property nama dan jenis, 
// serta method getinfo() yang mengembalikan informasi tentang hewan tersebut.

//Rizky Apriansyah
class Animal{
    //property
    public $nama;
    public $jenis;

    //constructor
    public function __construct($nama,$jenis)
    {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    //metode
    public function getInfo(){
        return "Hewan ini adalah ".$this->nama." Jenis ".$this->jenis.".";
    }
}


// 2. Buatlah class Cat yang merupakan turunan dari class Animal dengan property 
// jenis bernilai kucing dan method getinfo() yang menambahkan informasi khusus tentang kucing
class Cat extends Animal {
    // constructor, mengambil data dari parent atau class Animal untuk variabel nama dan mengisi jenis kucing
    public function __construct($nama) {
        parent::__construct($nama, "kucing");
    }

    // menambahkan informasi khusus tentang kucing
    public function getInfo() {
        return parent::getInfo() . " Kucing adalah hewan yang suka bermain dan bersih.";
    }
}



// 3. Buatlah class Dog yang merupakan turunan dari class Animal dengan property 
// jenis bernilai anjing dan method getinfo() yang menambahkan informasi khusus tentang anjing
class Dog extends Animal {
    // constructor, mengambil data dari parent atau class Animal untuk variabel nama dan mengisi jenis anjing
    public function __construct($nama) {
        parent::__construct($nama, "anjing");
    }

    // menambahkan informasi khusus tentang kucing
    public function getInfo() {
        return parent::getInfo() . " Anjing adalah hewan yang setia dan cerdas.";
    }
}


// 4. Buatlah objek dari class Animal, Cat, Dog. Lalu panggil method getinfo() 
// untuk masing-masing objek

// objek dari class Animal
$animal = new Animal('Harimau','karnivora');
echo $animal->getInfo() . "</br>";

// objek dari class Cat
$cat = new Cat('Kitty');
echo $cat->getInfo() . "</br>";

// objek dari class Dog
$dog = new Dog('Buddy');
echo $dog->getInfo() . "</br>";


?>