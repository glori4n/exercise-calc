<!-- This small calculator was made by Glori4n(https://glori4n.com) as a small exercise for begginer students -->


<!-- Form to receive the desired numbers -->
<form method="POST">
<select id="operator" name="operator">
<option value="sum">sum</option>
<option value="div">div</option>
<option value="sub">sub</option>
<option value="mult">mult</option>

</select>
    <input type="number" name="n1">
    <input type="number" name="n2">
    <input type="submit">
</form>

<!-- PHP logic with the variables, functions and cases -->
<?php 
    function sumNums($x, $y)
    {
        return $x + $y;
    }
    function divNums($x, $y)
    {
        return $x / $y;
    }
    function subNums($x, $y)
    {
        return $x - $y;
    }
    function multNums($x, $y)
    {
        return $x * $y;
    }

    if(@$_POST["n1"] && @$_POST["n2"]){

        $value = $_POST["operator"];
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];

        switch(@$_POST["operator"]){

            case $value == "sum":
            $result = sumNums($n1, $n2);
            echo $result;
            break;

            case $value == "div":
            $result = divNums($n1, $n2);
            echo $result;
            break;
            
            case $value == "sub":
            $result = subNums($n1, $n2);
            echo $result;
            break;

            case $value == "mult":
            $result = multNums($n1, $n2);
            echo $result;
            break;
        }
    }
?>

<!-- // This little snippet picks up the value chosen so as to keep it selected even after the submission. -->
<script type="text/javascript">
  document.getElementById('operator').value = "<?php echo $_POST['operator'];?>";
</script>