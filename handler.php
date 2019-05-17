<?php 

function checkReg() {
    //Проверка заголовка запроса
    if (
        isset($_SERVER['HTTP_X_REQUESTED_WITH']) 
        && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) 
        && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
    ) {
        //Проверка имени и пароля
        $login = $_POST['login'];
        $password = $_POST['password'];
        if ($login === 'admin' && $password === '123456') {
            echo 'Вы вошли';
        } else {
            echo 'Проверка не пройдена, неверные данные';
        }   
    } else {
        echo 'Ошибка авторизации';
    }
    
}

checkReg();

?>