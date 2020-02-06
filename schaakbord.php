<style>
    table {
        border-collapse: collapse;
        border: 1px solid black;
    }
    .tile {
        width: 50px;
        height: 50px;
    }
</style>
<?php
$table = "<table>";
$size = 8;
$color = "white";
for($i = 0;$i<$size;$i++) {
    $table .= "<tr>";
    for($j = 0;$j<$size;$j++) {
        $table .= "<td class='tile' style='background-color:".$color.";'></td>";
        $color = switchColor($color);
    }
    $color = switchColor($color);
    $table .= "</tr>";
}
echo($table);
function switchColor($color) {
    if($color == "white"){
        return "black";
    }else {
        return "white";
    }
}
?>