<?php
    //проверить, получены ли данные
if (isset($_POST["id"])) {
    $connect = mysqli_connect("localhost", "root", "Leo2803leo", "literature");
    if (!$connect) {
        echo "Error: " . mysqli_connect_error();
    }
    $id = mysqli_real_escape_string($connect, $_POST["id"]);
    //удаление
    $sql = "DELETE FROM literature.authors_info WHERE id='$id'";
    //если успешно, перейти на главную страницу
    if (mysqli_query($connect, $sql)) {
        header("Location: index.php");
    } else {
        mysqli_error($connect);
    }
}

