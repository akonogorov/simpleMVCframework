<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 05.07.2018
 * Time: 22:40
 */
?>
<div class="row" style="margin-top:2%;">
    <div class="col-md-9 align-self-center">
        <h2>Добавить товар</h2>
    </div>
    <div class="col-md-3 align-self-center">
        <a href="../">Главная</a>
    </div>
</div>
<br>
<form action="/save" method="post">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputModel">Модель *</label>
            <input type="text" class="form-control" name='model' id="modelPhone" placeholder="Модель" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputCompany">Компания</label>
            <input type="text" class="form-control" name='company' id="company" placeholder="Компания">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-14">
            <label for="inputCountry">Страна</label>
            <input type="text" class="form-control" id="country" name="country" placeholder="Страна">
        </div>
        <div class="form-group col-md-14">
            <label for="Price">Цена *</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Цена" required>
        </div>
        <div class="form-group col-md-14">
            <label for="guarantee">Гарантия</label>
            <input type="text" class="form-control" id="guarantee" name="guarantee" placeholder="Гарантия">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Добавить</button>
</form>
