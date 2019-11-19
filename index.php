<?php 
    function somarNumeros($x, $y)
    {
        return $x + $y;
    }
    function dividirNumeros($x, $y)
    {
        return $x / $y;
    }
    function subtrairNumeros($x, $y)
    {
        return $x - $y;
    }

    if(@$_POST["n1"] && @$_POST["n2"]){

        $value = $_POST["operator"];
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];

        switch(@$_POST["operator"]){

            case $value == "soma":
            $resultado = somarNumeros($n1, $n2);
            echo $resultado;
            break;

            case $value == "div":
            $resultado = dividirNumeros($n1, $n2);
            echo $resultado;
            break;
            
            case $value == "sub":
            $resultado = subtrairNumeros($n1, $n2);
            echo $resultado;
            break;
        }
    }
    


?>

<form method="POST">
<select name="operator">
<option value="soma">soma</option>
<option value="div">divisão</option>
<option value="sub">subtração</option>

</select>
    <input type="number" name="n1">
    <input type="number" name="n2">
    <input type="submit">
</form>

