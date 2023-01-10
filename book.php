<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel</title>
    <link rel="stylesheet" href="r.css">
</head>
<body>
   
   <?php include('header.php');?>

    <div class="header">
        <h2>Book Hostel</h2>
        <span style="color:black;font-weight:bold; background:white;"> <p>Note: All rooms cost Ksh. 6.000.</p>
          <p>Note: Rooms Available on first come first served basis.</p>
          <p>Note: All payments made through Mpesa Paybill: 123456 & Accno. 123478 or Bank Account:45678900218 </p>
          <p>Note: Attach the Payment Confirmation Code to this hostel application.</p>
         </span>
          <p style="color:red; background: white;">After verification of the payment, 
          <br> a room will be allocated to you and details  sent to you via email address and also you can check under my room</p>
          
        </div>
 
     <form action="conn.php" method="post">
         <div class="input">
             <label for="">Full Name</label>
             <input type="text" name="fn" required placeholder="Your full names  here">
         </div>
           <div class="input">

         <label for="">Email</label>
        <input type="text" name="em" required placeholder="Email Adress">
        </div>
        <div class="input">
        <label for="">Gender</label>
        <select name="gn" id="" style="height: 30px; text-transform:uppercase; width: 93%;">
           <option value="Male"  selected>Male</option>
           <option value="Female"> Female</option>
           </select>
   </div>
        <div class="input">
        <label for="">Block Name</label>
        <select name="bl" id="" style="height: 30px; text-transform:uppercase; width: 93%;">
           <option value="Block A(Male)"  selected>Block A (Male)</option>
           <option value="Block B(Female)"> Block B (Female)</option>
           <option value="Block C(Male)" >Block C (Male)</option>
           <option value="Block D(Female)"> Block D (Female)</option>
           </select>
        </div>
        <div class="input">
        <label for="">Room Name</label>
        <select name="rm" id="" style="height: 30px; text-transform:uppercase; width: 93%;">
           <option value="Room One"  selected>Room one</option>
           <option value="Room two "> Room two</option>
           <option value="Room three" >Room three</option>
           <option value="Room four"> Room four</option>
           </select>
        </div>
        <div class="input">
        <label for="">Bed Name</label>
        <select name="be" id="" style="height: 30px; text-transform:uppercase; width: 93%;">
           <option value="Bed One"  selected>Bed One</option>
           <option value="Bed Two"> Bed Two</option>
           <option value="Bed Three" >Bed Three</option>
           <option value="Bed Four"> Bed Four</option>
           </select>
        </div>
         
        <div class="input">
          <label for="">Payment Method</label>
          <select name="md" id="" style="height: 30px; text-transform:uppercase; width: 93%;">
           <option value="Mpesa"  selected>Mpesa</option>
           <option value="Bank">Bank</option>
           </select>
        </div>
        <div class="input">
          <label for="">Payment Code</label>
          <input type="text" name="pc" required placeholder="Payment Code">
        </div>
     <div class="input">
          <label for="">Amount</label>
          <input type="number" name="am" required placeholder="Payed Amount">
     </div>
     
    

     <div class="input">
          <button type="submit" name="book" class="btn">Book Hostel</button>
     </div>
     </form>
    
</body>
</html>