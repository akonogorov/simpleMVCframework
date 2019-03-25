<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 06.07.2018
 * Time: 4:11
 */

?>

<div class="row" style="margin-top:2%;">
    <div class="col-md-9 align-self-center">
        <h2>Результаты поискар</h2>
    </div>
    <div class="col-md-3 align-self-center">
        <a href="../">Главная</a>
    </div>
</div>
<br>
<table class="table table-hover">
    <tr>
        <td>Модель</td>
        <td>Компания</td>
        <td>Цена</td>
        <td></td>
        <td></td>
    </tr>
    <?php foreach ($data as $val): ?>
        <tr>
            <td>
                <a href="/description/<?php echo $val['id'];?>"><?php echo $val['model'];?></a>
            </td>
            <td>
                <?php echo $val['name']; ?>
            </td>
            <td>
                <?php echo $val['cost']; ?>
            </td>
            <td>
                <a href="/change/<?php echo $val['id']; ?>">Изменить</a>
            </td>
            <td>
                <a href="/delete/<?php echo $val['id'];?>">Удалить</a>
            </td>
        </tr>
    <?php endforeach;?>
</table>