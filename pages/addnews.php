<style>
    #title{
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    #text{
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        height: 100px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        resize: vertical;
    }
    #path{
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    #ok{
        font-family: "Open Sans", sans-serif;
        color: white;
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        background-color: #666f6e;
    }
</style>
<form action="" method="post">
    <label for="fname">Заголовок новини</label>
    <input id="title" type="text" name="title">
    <label for="fname">Текст новини</label>
    <textarea id="text" type="text" name="text"></textarea>
    <label for="fname">Шлях до зображення</label>
    <input id="path" type="text" name="path">
    <input id="ok" type="submit" name="enter">
</form>
<?php 
if (isset($_POST["enter"])) { 
    $title= $_POST["title"];
    $text= $_POST["text"];
    $path= $_POST["path"];
    $date=  date("d.m.y"); 
    if ($path=='') {
        $path='/images/emp.jpg';
    }
    $db = mysql_connect('localhost','root','');
    mysql_select_db("rugena81",$db);
    mysql_query("SET NAMES 'utf8'",$db);
    if($title!='' && $text!=''){
        $insert = mysql_query(
            "INSERT INTO information(`id`,`name`,`desc`,`img`,`date`)  VALUES ('NULL','$title','$text','$path','$date')");
        if(!$insert){
            echo "Error...";

        } else {
        }
    } else {
        echo "Заповніть усі поля.";
    }
}  
?> 