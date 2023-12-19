<?php
// Подключение библиотеки Mobile Detect
require_once(DIR_SYSTEM . 'library/Mobile_Detect.php');

// Создание экземпляра Mobile Detect
$detect = new Mobile_Detect();

// Определение, является ли текущее устройство мобильным
define('isMobile', $detect->isMobile(), false);

// Определение, является ли текущее устройство планшетным
define('isTablet', $detect->isTablet(), false);
?>
