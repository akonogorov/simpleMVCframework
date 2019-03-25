<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 06.07.2018
 * Time: 1:57
 */
//debug($data, 0);
?>

<div class="row" style="margin-top:2%;">
    <div class="col-md-9 align-self-center">
        <h2>Изменить данные</h2>
    </div>
    <div class="col-md-3 align-self-center">
        <a href="../">Главная</a>
    </div>
</div>
<br>
<form action="/saveChanges" method="post">
    <input type="hidden" name="id" value="<?=$data[0]['id']?>">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputModel">Модель *</label>
            <input type="text" class="form-control" name='model' id="modelPhone" placeholder="Модель" value="<?=$data[0]['model'];?>" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputCompany">Компания</label>
            <input type="text" class="form-control" name='company' id="company" placeholder="Компания" value="<?=$data[0]['name']?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-14">
            <label for="inputCountry">Страна</label>
            <input type="text" class="form-control" id="country" name="country" placeholder="Страна" value="<?=$data[0]['country']?>">
        </div>
        <div class="form-group col-md-14">
            <label for="Price">Цена *</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Цена" value="<?=$data[0]['cost']?>" required>
        </div>
        <div class="form-group col-md-14">
            <label for="guarantee">Гарантия</label>
            <input type="text" class="form-control" id="guarantee" name="guarantee" placeholder="Гарантия" value="<?=$data[0]['guarantee']?>">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Обновить</button>
</form>

