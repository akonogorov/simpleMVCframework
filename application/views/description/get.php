    <div class="row" style="margin-top: 2%;">
        <div class="col-md-9 align-self-center">
            <dic class="row ">
                <h2>Информация о товаре</h2>

            </dic>
        </div>
        <div class="col-md-3 align-self-center">
            <a href="../">Главная</a> |
            <a href="../addItem">Добавить товар</a>
        </div>
    </div>
    <br>
    <table class="table table-hover">
        <tr>
            <td>Модель</td>
            <td>Компания</td>
            <td>Страна-производитель</td>
            <td>Цена</td>
            <td>Гарантия</td>
            <td></td>
            <td></td>
        </tr>
        <?php foreach ($info as $val): ?>
            <tr>
                <td>
                    <a href="/description/<?php echo $val['id'];?>"><?php echo $val['model'];?></a>
                </td>
                <td>
                    <?php echo $val['name']; ?>
                </td>
                <td>
                    <?php echo $val['country']; ?>
                </td>
                <td>
                    <?php echo $val['cost']; ?>
                </td>
                <td>
                    <div class="align-self-center">
                        <?php echo $val['guarantee']; ?>
                    </div>
                </td>
                <td>
                    <a href="/change/<?php echo $val['id']; ?>">Изменить</a>
                </td>
                <td>
                    <a href="/delete/<?php echo $val['id'];?>">Удалить</a>
                </td>
            </tr>
        <?php endforeach;?>