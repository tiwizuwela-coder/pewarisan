<?php

// Parent Class
class Clothes {

    public $brand; //Public : diwariskan dan bisa diakses dari luar class
    protected $color; //Protected: bisa diakses parent dan child class
    private $price; // Private: hanya bisa diakses langsung di dalam Clothes

    // Constructor
    public function __construct($brand, $color, $price) {
        $this->brand = $brand;
        $this->color = $color;
        $this->price = $price;
    }

    public function getBrand() {
        return $this->brand;
    }

    protected function getColor() {
        return $this->color;
    }

    private function getPrice() {
        return $this->price;
    }

    public function showPrice() {
        return $this->getPrice();
    }
}

// Child Class Jacket
class Jacket extends Clothes {
     // Mewarisi brand, color, constructor, dan tampilkanHarga()
    // Price tidak bisa diakses secara langsung karena private
    public function display() {
        echo "=== JACKET ===<br>";
        echo "Brand: " . $this->getBrand() . "<br>";
        echo "Color: " . $this->getColor() . "<br>";
        echo "Price: Rp" . number_format($this->showPrice()) . "<br><br>";
    }
}

// Child Class T-Shirt
class TShirt extends Clothes {
     // Mewarisi brand, color, constructor, dan tampilkanHarga()
    // Price tidak bisa diakses secara langsung karena private
    public function display() {
        echo "=== T-SHIRT ===<br>";
        echo "Brand: " . $this->getBrand() . "<br>";
        echo "Color: " . $this->getColor() . "<br>";
        echo "Price: Rp" . number_format($this->showPrice()) . "<br><br>";
    }
}

// Child Class Pants
class Pants extends Clothes {
      // Mewarisi brand, color, constructor, dan tampilkanHarga()
    // Price tidak bisa diakses secara langsung karena private
    public function display() {
        echo "=== PANTS ===<br>";
        echo "Brand: " . $this->getBrand() . "<br>";
        echo "Color: " . $this->getColor() . "<br>";
        echo "Price: Rp" . number_format($this->showPrice()) . "<br><br>";
    }
}

// Membuat Object
$jacket = new Jacket("Adidas", "Black", 350000);
$tshirt = new TShirt("Nike", "White", 150000);
$pants = new Pants("Levis", "Blue", 250000);

// Menampilkan hasil
$jacket->display();
$tshirt->display();
$pants->display();

?>
