<html>
<body>
    <?php
$amount_incl = 121;
$tax = 21;
$amount_ex = $amount_incl/(100*$tax)*100;
$total = $amount_incl;

function incl($amount_incl)
{
    echo 'amount incl tax:'. $amount_incl .'<br>';
}
function excl($amount_ex)
{
    echo 'amount excl tax:' .$amount_ex. '<br>';
}
if(array_key_exists('+',$_POST)){
    incl(121);
}
if(array_key_exists('-',$_POST)){
    excl($amount_ex);
}
echo 'total:'. $total .'<br>';
    ?>
Tax:
<form method='post'>
<input type="submit" class="button" name="+" value="+">
<input type="submit" class="button" name="-" value="-">
</form>
</body>
</html>