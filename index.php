<?php
// Encapsulation
class Gadget {
    private $brand;
    private $price;

    public function __construct($brand, $price) {
        $this->brand = $brand;
        $this->price = $price;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getPrice() {
        return $this->price;
    }
}

// Include external files
include 'smartphone.php';
include 'laptop.php';

// Membuat objek dari turunan Gadget
$smartphone = new Smartphone("Samsung", 5000000, "Android");
$laptop = new Laptop("Dell", 12000000, "Windows");

// Polymorphism
class TeknologiPoli {
    public function deskripsi() {
        return "Ini adalah teknologi.";
    }
}
class SistemPoli {
    public function deskripsi() {
        return "Ini adalah sistem operasi.";
    }
}
function tampilkanDeskripsi($item) {
    return $item->deskripsi() . "<br>";
}

// Abstraction
abstract class Perangkat {
    abstract public function penggunaan();
}
class Telepon extends Perangkat {
    public function penggunaan() {
        return "Telepon digunakan untuk berkomunikasi.";
    }
}
class Komputer extends Perangkat {
    public function penggunaan() {
        return "Komputer digunakan untuk bekerja.";
    }
}

// Membuat objek untuk demonstrasi
$teknologiPoli = new TeknologiPoli();
$sistemPoli = new SistemPoli();
$telepon = new Telepon();
$komputer = new Komputer();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4 Pemrograman Internet</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tugas 4 Pemrograman Internet</h1>
    <table>
        <tr>
            <th>Menggunakan Objek</th>
            <td>
                Teknologi: Ini adalah objek teknologi.<br>
                Sistem: Ini adalah objek sistem operasi.
            </td>
        </tr>
        <tr>
            <th>Menggunakan Encapsulation</th>
            <td>
                Nama Gadget: <?php echo $smartphone->getBrand(); ?><br>
                Harga Gadget: Rp.<?php echo $smartphone->getPrice(); ?>
            </td>
        </tr>
        <tr>
            <th>Menggunakan Inheritance</th>
            <td><?php echo $smartphone->getDetail(); ?></td>
        </tr>
        <tr>
            <th>Menggunakan Polimorfisme</th>
            <td>
                <?php echo tampilkanDeskripsi($teknologiPoli); ?>
                <?php echo tampilkanDeskripsi($sistemPoli); ?>
            </td>
        </tr>
        <tr>
            <th>Menggunakan Abstraction</th>
            <td>
                Penggunaan Telepon: <?php echo $telepon->penggunaan(); ?><br>
                Penggunaan Komputer: <?php echo $komputer->penggunaan(); ?>
            </td>
        </tr>
        <tr>
            <th>Menggunakan Access Modifier</th>
            <td>
                Nama Gadget (Private): <?php echo $smartphone->getBrand(); ?><br>
                Harga Gadget (Private): Rp.<?php echo $smartphone->getPrice(); ?>
            </td>
        </tr>
        <tr>
            <th>Menggunakan Include</th>
            <td>
                Smartphone: <?php echo $smartphone->getDescription(); ?><br>
                Laptop: <?php echo $laptop->getDescription(); ?>
            </td>
        </tr>
    </table>
</body>
</html>
