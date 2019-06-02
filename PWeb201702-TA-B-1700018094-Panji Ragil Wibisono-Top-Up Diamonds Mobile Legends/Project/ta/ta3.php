<?php session_start(); ?>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
    
<title>Mobile Legends - Mudahshop</title>
</head> 

<?php
$nominal=$_SESSION["nominal2"];
$mbayar=$_SESSION['mbayar2'];
$price=$_SESSION['price2'];
?>

<img src="logo.png" class="logo"><p class="judula"> 
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 
    <i>Cara tercepat dan termudah untuk pembelian kredit permainan</i></p>
<br/>

<body class="body">
<br/><br/><br/><br/>
    
<form action="ta.php" method="post"> 
    
<div class="bg" style="padding-top:25px; padding-bottom:50px">
<div class="data" style="text-align:left">
    <br/> <br/>
    <div style="font-size: 30px">Ringkasan Pesanan</div><br/>
    1x Mobile Legends <?php echo "$nominal" ?><br/>
    Metode Pembayaran :&nbsp;&emsp;&emsp; <b><?php echo "$mbayar" ?></b><br/>
    Status Pembayaran :&emsp;&emsp;&emsp; <b>Initiated</b><br/>
    Total Pembayaran :&emsp;&emsp;&emsp;&nbsp;&nbsp; <b><?php echo "Rp$price,-" ?></b><br/>
    <br/>
    
</div>
<button type="submit" class="tombol3">Lakukan Pembelian Lain</button>
</div>
</form>
</body>