<?php
// соединение с БД
$connect = mysqli_connect("localhost", "root", "Leo2803leo", "literature");

if ($connect) {
    print("OK!");
}