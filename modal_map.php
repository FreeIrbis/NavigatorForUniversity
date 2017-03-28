<?php
require_once 'connection.php'; // подключаем скрипт
 
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link)); 
     
$query ="SELECT name_fak FROM date_fak";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result);
echo $rows;
echo '<div id="myModalBox" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Заголовок модального окна -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Заголовок модального окна</h4>
                </div>
                <!-- Основное содержимое модального окна -->
                <div class="modal-body">
                    <div class="vertical">
                        <form enctype="multipart/form-data" action="__URL__" method="POST">
                            <span class="help-block">Факультет</span>
                            <select class="form-control">';
    for ($i = 0 ; $i < $rows ; ++$i)
    {   $row = mysqli_fetch_row($result);
        echo "<option>";
        echo $row[$i];
        echo "</option>";
    }
    
    echo  '</select><span class="help-block">Этаж</span><select class="form-control"></select>
                            <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                            <!-- Название элемента input определяет имя в массиве $_FILES -->
                            <span class="help-block">Отправить этот файл:</span> <input name="userfile" type="file" />
                        </form>
                    </div>
                </div>
                                 <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-primary">Добавить</button>
                </div>
            </div>
        </div>
    </div>';
     mysqli_free_result($result);
}
    mysqli_close($link);
?>