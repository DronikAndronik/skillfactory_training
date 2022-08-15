<form method= "GET" action="">
        Введите строку, чтобы развернуть её (вводим латиницей)
    <input name="input_string" type="text">
    <br>
    <input href="?show_result=Y" type="submit" value= "Развернуть">
<input type="submit" value= "Очистить">
</form>

<div class="output">
<?php 
    if($_REQUEST["input_string"] != "") {echo strrev($_REQUEST["input_string"]);}
?>
</div>
