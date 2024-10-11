<?php
class Laptop extends Gadget {
    private $os;

    public function __construct($brand, $price, $os) {
        parent::__construct($brand, $price);
        $this->os = $os;
    }

    public function getOS() {
        return $this->os;
    }

    public function getDetail() {
        return "Nama: " . $this->getBrand() . ", Harga: Rp." . $this->getPrice() . ", OS: " . $this->os;
    }

    public function getDescription() {
        return "Laptop ini menggunakan sistem operasi " . $this->os . ".";
    }
}
?>
