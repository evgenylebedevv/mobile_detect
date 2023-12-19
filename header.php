<?php
if (isMobile) {
    if (isset($_COOKIE['mobile-app']) && $_COOKIE['mobile-app'] == 'true') {
        // Ничего не делать
    } elseif (isMobile) {
        // Установить cookie с именем 'mobile-app' и значением 'true', которая истекает через 1 день
        setcookie('mobile-app', 'true', time() + 84600, '/');
        
        // Подключить файл 'mobile-app.php'
        require('mobile-app.php');
        
        // Завершить выполнение скрипта
        exit;
    } else {
        echo "Что-то пошло не так";
        exit;
    }
} else {
    // Если пользователь не использует мобильное устройство, ничего не делать
}
?>
