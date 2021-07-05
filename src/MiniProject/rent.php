<?php
    include 'dbconnect.php';
    $sql= "SELECT sid, name, phone, email, SRL, loc, owned_since, price, descp, image FROM sell where SRL='Rent';";
    $res=mysqli_query($conn,$sql);
    $home=mysqli_fetch_all($res,MYSQLI_ASSOC); 
    // mysqli_free_result($res);
    // mysqli_close($conn);   
?>

<html>
    <title>BUY</title>
    <link rel="stylesheet" type="text/css" href="bar.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script>
        function clickLink(i){
            var id = "link"+i;
            var id1 = "quan"+i;
            var v = document.getElementById(id1).value;
            document.getElementById(id).href += "&quan="+v;
            document.getElementById(id).click();
        }
    </script>    
    
    <body>
        <ul id="bar" >
        <li ><a href="home.html">Home</a></li>
            <li ><a  href="sell.php">Sell</a></li>
            <li ><a href="buy.php">Buy</a></li>
            <li ><a class="active" href="rent.php">Rent</a></li>
            <li ><a href="lease.php">Lease</a></li>
           
            <li  style="float:right"><a href="about.html">About Us</a></li>
        </ul>


    <div class="container">
    <div class="row">
        <br>
        <?php foreach($home as $i): ?> 
                    <div class="card" style="width:400px;height:590px; font-family:cursive; margin-bottom:10px;margin:15px 15px;  margin-bottom:30px; background-color:rgb(190,190,190,0.6);border-radius:25px;border:0px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <?php echo "<img src='$i[image]' height='200px' width='400px' style='border-top-left-radius:20px;border-top-right-radius:20px;'>"; ?>
                        <div style="padding:10px;">
                        <h2 style="text-align:center;color:black; font-size:15px;"><?php echo "Seller: ".htmlspecialchars($i['name']);?></h2>
                        <div><?php echo "Description: ".htmlspecialchars($i['descp']);?></div>
                        <div><?php echo "SRL: ".htmlspecialchars($i['SRL']);?></div>
                        <div><?php echo "Location: ".htmlspecialchars($i['loc']);?></div>
                        <div><?php echo "Email ID: ".htmlspecialchars($i['email']);?></div>
                        <div><?php echo "Contact no: ".htmlspecialchars($i['phone']);?></div>
                        <div><?php echo "Owned Since: ".htmlspecialchars($i['owned_since']);?></div>
                        <div><?php echo "Price: $".htmlspecialchars($i['price']);?></div>
                        <hr>

                        <form action="https://formspree.io/f/mbjqkajw" method="POST">
                        <label> Your email ID to get in touch: <input type="email" name="_replyto"></label><br><br>
                        <label>Leave a message:&emsp;<input type="text" name="message"></label>
                        <br><br>
                        <button type="submit" name="interest" >INTERESTED? CLICK TO MAIL THEM</button>
                        </form>
                    </div>
                    </div>
        <?php endforeach; ?>
    </div>
</div>

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