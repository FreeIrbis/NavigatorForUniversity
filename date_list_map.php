<?php
require_once 'connection.php';

$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link)); 
     
$query ="SELECT map.id_map,map.link_map,date_fak.name_fak,map.number_hole FROM map,date_fak WHERE date_fak.id_fak=date_fak.id_fak";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
     
    echo "<table class='table table-striped'><thead><tr><th>Id</th><th>Ссылка</th><th>Факультет</th><th>Этаж</th></tr></thead><tbody>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 4 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</tbody></table>";
     
    // очищаем результат
    mysqli_free_result($result);
}
 
mysqli_close($link);

?>
