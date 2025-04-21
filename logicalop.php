<!-- 
&& = if want mo parehas ng value yung ipagcocompare mo
|| = kapag isa sa icocompare mo ay true
! = isnot true or gagawin niyang false

-->


<?php
$student = true;
$senior = true;
$minimum_payment = 370;
$discount =  70;
$discount_payment = NULL;

if ($student == true && $senior == true){
    $discount_payment = $minimum_payment -  $discount;
    echo "The orginal Price is {$minimum_payment} but you are a student/senior you will only pay {$discount_payment}";
}else{
    echo "The price is: {$minimum_payment}";
}
?>