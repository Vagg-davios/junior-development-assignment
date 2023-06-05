<?php
$BASE = dirname(__DIR__, 2);

return [
    '/' => $BASE . "/src/controller/book/index.php",
    '/borrowed' => $BASE . "/src/controller/book/borrowed.php",
    '/book' => $BASE . "/src/controller/book/show.php",
];