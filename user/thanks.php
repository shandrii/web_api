<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>BTC to UAH rate</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div>
        <h1 class="upperone" align="center">Thank you for using our services!</h1>
    </div>    
    <?php  
      $url = "https://bitpay.com/api/rates";

      $json = file_get_contents($url);
      $data = json_decode($json, true);

      $rate = $data[150]["rate"];
    ?>
    <form id='sign_up_form' action="thanks.php" method="post">
    <div>
        <label><b><h3>Enter amount of BTC:</h3></b></tab></label>
        <input placeholder="Enter amout of BTC..." type="text" name="btc" id="btc" value = "<?php if (isset($btc_amount)) { ?><?php echo $btc_amount ?> <?php } ?>" required />
     </div>
     <button type='submit' class="butt">Get realtime rate</button>
    </form>
    <?php
    $btc_amount = filter_input(INPUT_POST, 'btc');
      $price = $btc_amount*$rate;
    ?>
    
    <div> <h1 class="upperone"><?=1 ?> BTC / <?=$rate ?> ₴ </h1> </div>
   <div> <h1 class="upperone">BTC to UAH rate: <?=$btc_amount ?> BTC / <?=$price ?> ₴ </h1> </div>
    
</body>
</html>