<?php
// форма
echo "<form action='index.php' method='post'>
<p>Id <input type='hidden' name='id'></p>
<p>Firstname <input type='text' name='firstname'></p>
<p>Lastname <input type='text' name='lastname'></p>
<p>Date_of_birth <input type='text' name='date_of_birth'></p>
<p>Genre <input type='text' name='genre'></p>
<input type='submit' name='button' value='Update'></form>";
//соединение с БД
$connect = mysqli_connect("localhost", "root", "Leo2803leo", "literature");
//полуение данных у БД
if (isset($_POST['button'])) {
    $id = $_POST["id"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $date_of_birth = $_POST["date_of_birth"];
    $genre = $_POST["genre"];
//обновление
    $sql = "UPDATE literature.authors_info SET
    `firstname`='$firstname', `lastname`='$lastname', `date_of_birth`='$date_of_birth', `genre` = '$genre' WHERE id=$id";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        echo "OK!!!";
    } else {
        echo "Error: " . $connect->error;
    }
}




