<?php session_start(); ?>

<head>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="data.js"></script>
    
<title>Mobile Legends - Mudahshop</title>
</head> 

<?php
$id=$_POST['ids'];
$server=$_POST['server'];
$nominal=$_POST['nominal'];
$mbayar=$_POST['mbayar'];

if($nominal=="11 Diamonds"){
    $price=3000;
}
else if($nominal=="14 Diamonds"){
    $price=4000;
}
else if($nominal=="19 Diamonds"){
    $price=5000;
}
else if($nominal=="36 Diamonds"){
    $price=10000;
}
else if($nominal=="74 Diamonds"){
    $price=20000;
}
else if($nominal=="220 Diamonds"){
    $price=60000;
}
else if($nominal=="275 Diamonds"){
    $price=75000;
}
else if($nominal=="366 Diamonds"){
    $price=100000;
}
else if($nominal=="966 Diamonds"){
    $price=250000;
}
else if($nominal=="2010 Diamonds"){
    $price=500000;
}
else if($nominal=="4804 Diamonds"){
    $price=1200000;
}
?>

<img src="logo.png" class="logo"><p class="judula"> 
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 
    <i>Cara tercepat dan termudah untuk pembelian kredit permainan</i></p>
<br/>

<body class="body">
<br/><br/><br/><br/>
    
<form name="tapp" action="ta3.php" method="post" onsubmit="return validateForm()"> 
    
<div class="bg">
<div class="number"><p class="nomor">4</p></div><br/>
<h1 class="tit">Detail Pesanan</h1>
<div class="data">
    <b>User ID:</b>&nbsp; <?php echo "$id($server)" ?><br/>
    <b>Nominal:</b>&nbsp; <?php echo "$nominal" ?><br/>
    <b>Price:</b>&nbsp; <?php echo "Rp$price,-" ?><br/>
    <b>Paying by:</b>&nbsp; <?php echo "$mbayar" ?><br/><br/>
    
    <br/>
    <b style="font-size:17px">Masukkan Nomor Ponsel Anda</b> 
    <div class="kecil"><i>(Anda akan mengkonfirmasi transaksi pada langkah berikutnya)</i></div>
<input type="tel" name="tele">
</div>
<br/>  
<button type="submit" class="tombol2">Lanjut</button>
</div>
</form>
</body>

<?php
    $_SESSION["nominal2"]=$nominal;
    $_SESSION["price2"]=$price;
    $_SESSION["mbayar2"]=$mbayar;
?>
