<div class="update_label">
    <?php if ($lpu['id']): ?>
        Обновление записи
    <?php else: ?>
        Добавление записи
    <?php endif ?>
</div>
<form method="POST" action="" class="update_form">
    <div class="update_form_data">
        <div class="left">
            <label class="update_item_label">Наименование</label>
            <label class="update_item_label">Адрес</label>
            <label class="update_item_label">Телефон</label>
        </div>
        <div class="right">
            <input type="text" class="update_item_input" name="full_name" value="<?php echo $lpu['full_name']; ?>">
            <input type="text" class="update_item_input" name="address"value="<?php echo $lpu['address']; ?>">
            <input type="text" class="update_item_input" name="phone" value="<?php echo $lpu['phone']; ?>">
            <input type="hidden" name="hid" value="">
        </div>
    </div>
    <div class="form_btn_section">
        <button class="form_btn">Сохранить</button>
    </div>
</form>

<style scoped>
    .left {
        display: flex;
        flex-direction: column;
        width: 20%;
    }

    .right {
        display: flex;
        flex-direction: column;
        width: 80%;
    }

    .update_item_label {
        margin-bottom: 30px;
    }

    .update_item_input {
        margin-bottom: 10px;
        height: 40px;
        font-size: 1em;
    }

    .update_form {
        width: 80%;
        margin: auto;
        border: 1px grey solid;
        font-size: 1.5em;
        padding: 20px;
        box-shadow: 10px 5px 5px rgba(97, 68, 144, 0.2);
        border-radius: 10px;
    }

    .update_form_data {
        display: flex;
    }

    .form_btn {
        font-size: 1em;
        padding: 10px;
        width: 15%;
    }

    .form_btn_section {
        display: flex;
        justify-content: flex-end;
    }

    .update_label {
        font-size: 2em;
        font-weight: bold;
        margin: 30px;
        text-align: center;
        background-color: rgba(97, 68, 144, 0.2);
        padding: 15px;
        border-radius: 10px;
    }
</style>