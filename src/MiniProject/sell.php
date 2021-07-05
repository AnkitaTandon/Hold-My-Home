<?php
    include 'dbconnect.php';
    if(isset($_POST['submitfield'])){
        $name=$_POST['namefield'];
        $numfield=$_POST['numfield'];
        $mailfield=$_POST['mailfield'];
        $toSRL=$_POST['toSRL'];
        $loc=$_POST['loc'];
        $datetimefield=date($_POST['datetimefield']);
        $rangefield=$_POST['rangefield'];
        $message=$_POST['message'];
        $image_link=$_POST['image_link'];

        $sql="INSERT into Sell(name,phone,email,SRL,loc,owned_since ,price,descp,image) values('$name','$numfield','$mailfield', '$toSRL','$loc','$datetimefield','$rangefield','$message','$image_link');";
        mysqli_query($conn, $sql);

        /*if(mysqli_query($conn,$sql)){
            echo 'Inserted';
        }		 	
        else{
            echo 'Error0';
        }*/
    }
?>

<html>
    <head>
        <title>SELL</title>
        <link rel="stylesheet" type="text/css" href="bar.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
           
            body {
                font-family: cursive;
                background-color: blossom;
            }
            
            form {
                border: 10px solid #cacaca;
                height: 100%;
                width: 98%;
                background-color:'#EBB2D6';}

            input[type=text], input[type=name] {
              width: 35%;
              padding: 12px 20px;
              margin: 8px 0;
              display: inline-block;
              border: 2px solid #ccc;
              box-sizing: border-box;
            }

        </style>
    </head>
    <body>
        <ul id="bar" >
            <li ><a href="home.html">Home</a></li>
            <li ><a class="active" href="sell.php">Sell</a></li>
            <li ><a href="buy.php">Buy</a></li>
            <li ><a href="rent.php">Rent</a></li>
            <li ><a href="lease.php">Lease</a></li>
           
            <li style="float:right"><a href="#about">About</a></li>
          </ul>

          <form action="sell.php" method="post">
          <br><br>
            <form>
              <table style="border:'none'" height='600px' width='650px' align='center' cellpadding='10'>
                  <tr>
                      <td colspan="4" align="center" ><b>REGISTER YOUR HOUSE</b></td>
                     
                  </tr>
                  <tr>
                      <td colspan="2" align="right" cellpadding="15">NAME</td>
                      <td colspan="2"><input type="text" name="namefield" required></td>
                  </tr>
                  <tr>
                      <td colspan="2" align="right" cellpadding="15">PHONE NUMBER</td>
                      <td colspan="2"><input type="number" name="numfield" width="800" required></td>
                  </tr>
                  <tr>
                      <td colspan="2" align="right" cellpadding="15">EMAIL</td>
                      <td colspan="2"><input type="email" name="mailfield" width="800" required></td>
                  </tr>
                  <tr>
                      <td colspan="2" align="right" cellpadding="15">TYPE</td>
                      <td colspan="2"><input type="radio" name="toSRL" title="Sell" value="Buy" width="800" required><label for="Sell">Sell</label>
                                    <input type="radio" name="toSRL" title="Rent" value="Rent" width="800"><label for="Rent">Rent</label>
                                    <input type="radio" name="toSRL" title="Lease" value="Lease" width="800"><label for="Lease">Lease</label></td>
                  </tr>
                  <tr>
                      <td colspan="2" align="right" cellpadding="15">CHOOSE YOUR LOCATION</td>
                      <td colspan="2"><select id="loc" name="loc"><option value="def">Choose your location</option><option value="Mumbai">Mumbai</option><option value="Bangalore">Bangalore</option><option value="Kolkata">Kolkata</option><option value="oth">Other</option></select></td>
                  </tr>
                  <tr>
                      <td colspan="2" align="right" cellpadding="15">OWNED SINCE</td>
                      <td colspan="2"><input type="date" name="datetimefield" required></td>
                  </tr>
                  <tr>
                      <td colspan="2" align="right" cellpadding="15">RATE YOUR HOME</td>
                      <td colspan="2"><input type="range" name="rangefield" min="500" max="100000"></td>
                  </tr>
                  <tr>
                      <td colspan="2" align="right" cellpadding="15">DESCRIPTION</td>
                      <td colspan="2"><textarea name="message" rows="5" cols="30"></textarea></td>
                  </tr>
                  <tr>
                    <td colspan="2" align="right" cellpadding="15">IMAGE LINK</td>
                    <td colspan="2"><input type="text" name="image_link" width=100px></textarea></td>
                </tr>
                  <tr>
                      <td colspan="3" align="center"><button type="reset" name="resetfield">RESET</button></td>
                      <td colspan="2" ><button type="submit" name="submitfield">SUBMIT</button></td>
                  </tr>
                  
                  
              </table></form>
         
         </form>
         <section class="footer">
            
            <p>Home is where the happiness begins </p>
            <p>Made with <i class="fa fa-heart"></i> by HoldMyHome</p>
            <p><i class="fa fa-instagram"></i> &emsp;
                <i class="fa fa-facebook"></i> &emsp;
                <i class="fa fa-linkedIn"></i>&emsp;
                <i class="fa fa-twitter"></i>  </p>
        </section>
    </body>
</html>