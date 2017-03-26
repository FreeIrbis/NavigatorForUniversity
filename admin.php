<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/konvajs/konva/1.5.0/konva.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!—Название сайта и кнопка раскрытия меню для мобильных-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
                <a class="navbar-brand" href="#">Admin Panel</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Пункт 1</a></li>
                    <li><a href="#1">Пункт 2</a></li>
                    <li><a href="#2">Пункт 3</a></li>
                    <li><a href="#3">Пункт 4</a></li>
                    <li><a href="#4">Пункт 5</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="alert bs-example">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#panel1">Карты</a></li>
            <li><a data-toggle="tab" href="#panel2">Аудитории</a></li>
            <li><a data-toggle="tab" href="#panel3">Области</a></li>
            <li><a data-toggle="tab" href="#panel4">Разметка</a></li>
        </ul>

        <div class="tab-content">
            <div id="panel1" class="tab-pane fade in active">
                <!--<h3>Карты</h3>-->
                <div class="panel panel-default">
                    <!-- Обычное содержимое панели -->
                    <div class="panel-heading">Карты</div>
                    <div class="panel-body">
                        <a>+</a>
                    </div>
                    <?php
require_once 'connection.php'; // подключаем скрипт
 
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link)); 
     
$query ="SELECT * FROM map";
 
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
                </div>
            </div>
            <div id="panel2" class="tab-pane fade">
                <div class="panel panel-default">
                    <!-- Обычное содержимое панели -->
                    <div class="panel-heading">Аудитории</div>
                    <div class="panel-body">
                        Список товаров в нашем магазине.
                    </div>
                    <?php
require_once 'connection.php'; // подключаем скрипт
 
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link)); 
     
$query ="SELECT * FROM rooms";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
     
    echo "<table class='table table-striped'><thead><tr><th>Id</th><th>Модель</th><th>Производитель</th><th>Информация</th></tr></thead><tbody>";
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
                </div>
            </div>
            <div id="panel3" class="tab-pane fade">
                <div class="panel panel-default">
                    <!-- Обычное содержимое панели -->
                    <div class="panel-heading">Области</div>
                    <div class="panel-body">
                        Список товаров в нашем магазине.
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>№ п/п</th>
                                <th>Имя</th>
                                <th>Фамилия</th>
                                <th>E-mail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Иван</td>
                                <td>Чмель</td>
                                <td>ivan@mail.ru</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Петр</td>
                                <td>Щербаков</td>
                                <td>petr@mail.ru</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Юрий</td>
                                <td>Голов</td>
                                <td>yuri@mail.ru</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="panel4" class="tab-pane fade">
                <h3>Разметка</h3>
                <p>Lorem ipsum dolor sit amet. Cupiditate non numquam eius modi. Sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae. Modi tempora incidunt, ut aliquid ex ea voluptate velit esse. Velit esse, quam nihil molestiae consequatur, vel eum fugiat, quo minus. Quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in.</p>
            </div>
        </div>
    </div>
</body>

</html>
