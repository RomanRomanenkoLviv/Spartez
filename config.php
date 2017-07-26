<?php
// База данных
/* define("HOST", "localhost");
   define("USER", "user");
   define("PASS", "password");
   define("DB", "database"); */

date_default_timezone_set('Europe/Moscow'); // Часовой пояс
ini_set('display_errors', 'Off'); // отключение отображения РНР ошибок

// Константы
define(DEFAULT_BIG_SCREEN, '1440'); // Экран верстки макета
define(DEFAULT_MEDIUM_SCREEN, '777'); // Экран адаптации под планшеты
define(DEFAULT_SMALL_SCREEN, '599'); // Экран адаптации под телефоны