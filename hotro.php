<?php
function idcontinue(){
static $userid = 1;
return $userid++;
}
?>