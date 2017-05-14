<?php
$f = fopen("quest.txt", 'a');
ftruncate($f, 0) ;
echo "Ответы очищены";
?>