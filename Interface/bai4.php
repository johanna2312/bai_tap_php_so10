<?php
interface Sortable {
    public function sort();
}

class ArraySorter implements Sortable {
    public function sort() {
        echo "Sorting array.\n";
    }
}

class LinkedListSorter implements Sortable {
    public function sort() {
        echo "Sorting linked list.\n";
    }
}

$arraySorter = new ArraySorter();
$arraySorter->sort();

$linkedListSorter = new LinkedListSorter();
$linkedListSorter->sort();
?>