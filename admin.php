<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
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
    <?php 
    require_once 'modal_map.php';
    ?>
                <!-- Футер модального окна -->
               

    <!-- Скрипт, вызывающий модальное окно после загрузки страницы -->
    <script>
        function showModal() {
            $("#myModalBox").modal('show');
        };

    </script>
    <div class="alert bs-example">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#panel1">Карты</a></li>
            <li><a data-toggle="tab" href="#panel2">Аудитории</a></li>
            <li><a data-toggle="tab" href="#panel3">Преподаватели</a></li>
            <li><a data-toggle="tab" href="#panel4">Разметка</a></li>
        </ul>

        <div class="tab-content">
            <div id="panel1" class="tab-pane fade in active">
                <!--<h3>Карты</h3>-->
                <div class="panel panel-default">
                    <!-- Обычное содержимое панели -->
                    <div class="panel-heading">Карты</div>
                    <div class="panel-body">
                        <a onclick="showModal()">Добавить</a>
                    </div>
                    <?php                    
require_once 'date_list_map.php';
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
require_once 'date_list_rooms.php';
?>
                </div>
            </div>
            <div id="panel3" class="tab-pane fade">
                <div class="panel panel-default">
                    <!-- Обычное содержимое панели -->
                    <div class="panel-heading">Преподаватели</div>
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
