<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        foreach ($theme_tour as $value) {
            print_r($value);
            echo sizeof($value['tours']);
            ?>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <?php
            }?>
    </body>
</html>
