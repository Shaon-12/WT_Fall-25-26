<!DOCTYPE html>
<html>
    <body>
        <h1> calculate the applydiscount </h1>

        <?php
    function applyDiscounts($amounts){  

    foreach($amounts as $amount){  
      if($amount >= 1000){
            $discount = $amount * 0.20;
      }
      elseif($amount >=500){
            $discount =$amount * 0.10;
      }
      else{
            $discount = $amount * 0.05; 
        }
     $finalPrice = $amount - $discount;

        echo "Original Amount: $amount <br>";
        echo "Discount: $discount <br>";
        echo "Final Price: $finalPrice <br><br>";
    }

}
$purchaseAmounts = array(300, 600, 1500);
applyDiscounts($purchaseAmounts);
?>
</body>
</html>