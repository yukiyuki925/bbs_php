<?php
// htmlspecialcharsをfunctionを使い、短くする
function h($value) {
return htmlspecialchars($value,ENT_QUOTES);
}
?>