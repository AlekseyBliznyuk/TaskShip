<?php

    //соедиение с БД
$connect = mysqli_connect("localhost", "root", "Leo2803leo", "literature");
    //выборка
$sql = "SELECT * FROM literature.authors_info";
    // кол-во авторов
$count = $connect->query($sql);
$row_num = $count->num_rows;
printf("<br>Всего " . $row_num . " авторов");
    // вывод таблицы
if ($result = mysqli_query($connect, $sql)) {
    echo "<table border='1'><tr><th>id</th><th>firstname</th><th>lastname</th><th>date_of_birth</th><th>genre</th><th>edit</th><th>delete</th></tr>";
    foreach ($result as $Author) {
        echo "<td>" . $Author["id"] . "</td>";
        echo "<td>" . $Author["firstname"] . "</td>";
        echo "<td>" . $Author["lastname"] . "</td>";
        echo "<td>" . $Author["date_of_birth"] . "</td>";
        echo "<td>" . $Author["genre"] . "</td>";
        echo "<td><a href='update.php'>Редактировать</a></td>";
        echo "<td><form action='delete.php' method='post'>
                        <input type='hidden' name='id' value='" . $Author["id"] . "'/>
                        <input type='submit' value='Удалить'>
                    </form></td>";
        echo "</tr>";
    }
    echo "</table>";
}





