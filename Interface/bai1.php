<?php
interface Resizable {
    public function resize($scale);
}

class Rectangle implements Resizable {
    private $width;
    private $height;
    
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    
    public function resize($scale) {
        $this->width *= $scale;
        $this->height *= $scale;
    }
}
$rectangle = new Rectangle(10, 5);
$rectangle->resize(2);
?>