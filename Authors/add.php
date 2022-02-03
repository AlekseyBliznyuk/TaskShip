<?php
    //форма
echo "<form action='add.php' method='post'>
<p>Firstname <input type='text' name='firstname'></p>
<p>Lastname <input type='text' name='lastname'></p>
<p>Date_of_birth <input type='text' name='date_of_birth'></p>
<p>Genre <input type='text' name='genre'></p>
<input type='submit' value='Add'></form>";
    // проверить, получены ли данные
if (isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["date_of_birth"]) && isset($_POST["genre"])) {
    $connect = mysqli_connect("localhost", "root", "Leo2803leo", "literature");
    if ($connect->connect_error) {
        print("Error: " . $connect->connect_error);
    }
    $firstname = $connect->real_escape_string($_POST["firstname"]);
    $lastname = $connect->real_escape_string($_POST["lastname"]);
    $date_of_birth = $connect->real_escape_string($_POST["date_of_birth"]);
    $genre = $connect->real_escape_string($_POST["genre"]);
    //запрос на вставку введенных данных
    $sql = "INSERT INTO literature.authors_info (id, firstname, lastname, date_of_birth, genre) 
            VALUES (NULL,'$firstname','$lastname','$date_of_birth','$genre') ";
    // если работает, перенаправить на главную страницу
    if ($connect->query($sql)) {
        header("Location: index.php");
    } else {
        echo "Error: " . $connect->error;
    }
}
