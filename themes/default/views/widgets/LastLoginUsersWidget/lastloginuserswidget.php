<div class='portlet'>
    <div class='portlet-decoration'>
        <div class='portlet-title'>Пользователи</div>
    </div>
    <div class='portlet-content'>
        <ul>
            <?php foreach ($models as $model): ?>
            <li><?php echo CHtml::link($model->nick_name, array('/user/people/userInfo/', 'username' => $model->nick_name));?></li>
            <?php endforeach;?>
        </ul>
    </div>
</div>
