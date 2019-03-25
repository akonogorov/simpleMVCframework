<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 05.07.2018
 * Time: 1:06
 */

use application\controllers;

?>
        <div class="row" style="margin-top: 2%;">
            <div class="col-md-6 align-self-center">
                <h2>Товары</h2>
            </div>
            <div class="col-4 align-self-center" style="padding: 0;">
                <form class="form-row" style="margin: 0" method="post" action="/search">
                    <div class="form-group" style="margin:0;">
                        <input class="form-control" type="text" placeholder="Поиск..." name="search">
                    </div>
                    <div class="form-group" style="margin: 0;">
                        <button type="submit" class="btn btn-primary">Искать</button>
                    </div>
                </form>
            </div>
            <div class="col-md-2 align-self-center" style="padding: 0;">
                <a href="addItem">Добавить товар</a>
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
        <?php foreach ($item as $val): ?>
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