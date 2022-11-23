<?php
require 'lpu.php';
$lpus = getLpu();
include 'components/header.php';
?>
    <div class="create_section">
        <a href="create.php" class="create_btn">Добавить новую запись</a>
    </div>
    <div class="table_lpu">
        <span class="collapsible_column1">Наименование</span>
        <span class="collapsible_column2">Адрес</span>
        <span class="collapsible_column3">Телефон</span> 
        <span class="collapsible_column4">Действие</span> 
    </div>
            <?php 
                $str ='';
                $plus_mark='';
                foreach ($lpus as $lpu):           
                    if ($lpu['hid'] == null) {
                        foreach ($lpus as $lpu_item) {
                            if ($lpu_item['hid'] == $lpu['id']) {
                                $plus_mark = '+';
                            }
                        }
                        $str = $str.'<div class="collapsible"><div class="content show"><span class="plus">'.$plus_mark.'</span>';
                        $str = $str.'<span class="collapsible_column1">'.$lpu['full_name'].'</span>'; 
                        $str = $str.'<span class="collapsible_column2">'.$lpu['address'].'</span>';
                        $str = $str.'<span class="collapsible_column3">'.$lpu['phone'].'</span>';
                        $str = $str.'<span class="collapsible_column4">';
                        $str = $str.'<a href="update.php?id='.$lpu['id'].'" class="icons"><img src="icons/update.png" alt="Редактировать"></a>';
                        $str = $str.'<a href="delete.php?id='.$lpu['id'].'"><img src="icons/delete.png" alt="Удалить"></a></span></div>';
                        $plus_mark = '';
                    } 
                    else {
                        "<input type='hidden'>";
                    } 
                    foreach ($lpus as $lpu_podr): 
                            if ($lpu_podr['hid'] == $lpu['id']) {
                                $str = $str.'<div class="content"><span class="collapsible_column1">'.$lpu_podr['full_name'].'</span>'; 
                                $str = $str.'<span class="collapsible_column2">'.$lpu_podr['address'].'</span>';
                                $str = $str.'<span class="collapsible_column3">'.$lpu_podr['phone'].'</span>';
                                $str = $str.'<span class="collapsible_column4">';
                                $str = $str.'<a href="update.php?id='.$lpu_podr['id'].'" class="icons"><img src="icons/update.png" alt="Редактировать"></a>';
                                $str = $str.'<a href="delete.php?id='.$lpu_podr['id'].'"><img src="icons/delete.png" alt="Удалить"></a></span></div>';
                            } 
                            else {
                                "<input type='hidden'>";
                            }
                    endforeach;
                    $str = $str.'</div>';
                endforeach; 
                echo $str; 
                include 'components/footer.php';?>


<script>
    let col1 = document.getElementsByClassName('collapsible');
    for (let i = 0; i < col1.length; i++) {
        col1[i].addEventListener('click', function() {
            this.classList.toggle('active');
            let content = this.childNodes;
            for (let i = 1; i <= content.length; i++) {
                content[i].classList.toggle('show');
            }
        })
    }
</script>

<style scoped>
    body {
        font-size: 16px;
        font-family: Arial, Helvetica, sans-serif;
        width: 80%;
        margin: auto;
        margin-top: 40px;
        margin-bottom: 50px;
    }

    .collapsible {
        padding: 10px;
        background-color: rgba(97, 68, 144, 0.2);;
        border-radius: 10px;
        border-bottom: 1px grey solid;
        cursor: pointer;
        transition: all 0.2s ease-in;
    }

    .active {
        display: block;
    }

    .collapsible:hover {
        background-color: rgba(230, 230, 230, 50%);
    }

    .content {
        display: none;
        padding: 10px;
        word-break: break-all;
    }

    .show {
        display: flex;
        justify-content: space-around;
    }

    .collapsible_column1 {
        width: 45%;
    }

    .collapsible_column2 {
        width: 25%;
    }

    .collapsible_column3 {
        width: 15%;
    }

    .collapsible_column4 {
        width: 10%;
    }

    .table_lpu {
        padding: 15px;
        background-color: rgba(97, 68, 144, 0.2);;
        border: 1px grey solid;
        border-radius: 10px;
        display: flex;
        justify-content: space-around;
        font-weight: bold;
        font-size: 1.3rem;
    }

    .icons {
        margin-right: 15px;
    }

    .create_btn {
        border: 1px grey solid;
        text-decoration: none;
        padding: 15px;
        border-radius: 10px;
        background-color: rgba(97, 68, 144, 0.2);
        transition: all 0.2s ease-in;
        color: black;
        font-size: 1.1em;
        font-weight: bold;
    }

    .create_btn:hover {
        background-color: rgba(230, 230, 230, 50%);
    }

    .create_section {
        margin-bottom: 40px;
    }

    .plus {
        font-weight: bold;
        font-size: 1.1em;
        width: 1%;
    }
</style>