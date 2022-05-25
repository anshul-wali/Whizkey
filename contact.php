<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact1.css">
    
    <title>Document</title>
</head>
<body>
    <?php include_once('navbar1.php') ?>
    <br>
    <br>
    <br>

    <span class="title">CONTACT US</span>
    <div class="info">
    <h4>Better yet, see us in person!</h4>
        <p>We love our customers, so feel free to visit during normal business hours</p>
        <h4> Whiz Key (OPC) Pvt Ltd</h4>
        <p>Marathwada Mitra Mandal College Of Engineering, Pune, Maharashtra, India</p>
        <p class="number"><a class="nav-link" href="tel:+919011021614">(91)-9011021614</a></p>
        <h4>Hours</h4>
            <p>
                Mon 09:00 am – 05:00 pm <br>
                Tue 09:00 am – 05:00 pm <br>
                Wed 09:00 am – 05:00 pm <br>
                Thu 09:00 am – 05:00 pm <br>
                Fri 09:00 am – 05:00 pm <br>
                Sat Closed <br>
                Sun Closed
             </p>
       <button id="myBtn">Drop us a line!</button>
    </div> 


    <div class="container-fluid">
             <div class="map-responsive">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.8445729601112!2d73.80712821489233!3d18.490698187426432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bfdad7143a4f%3A0xabd31c8f9e6eca9a!2sMarathwada%20Mitra%20Mandal&#39;s%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1653134436368!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
    </div>

    <div class="review" >
        <div class="text">
            <h3>REVIEWS</h3>
            <h5>Reviews Coming Soon</h5>
        </div>
        <img src="Images/review.jpg" class="image" alt="Responsive image"  >
    </div>
    



<!-- <h4>form for drop a line</h4> -->
<div class="modal" id="myModal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <form action="" method="post" id="query">
                <label for="name">Name</label>
                <input type="text" id="name" name="Name" size="100">
                <label for="email">Email*</label>
                <input type="text id="email" name="Email" size="50">
                <label for="message">Message</label>
                <input type="text" id="message" name="Message" size="1000">
                <button type ="submit" form="query" value="submit">Send</button>
                <a href="contact.php">Cancel</a>
                
            </form>
        </div>
    </div>    
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<?php include_once('footer1.php')?>
</body>
</html>

<!-- img-fluid -->