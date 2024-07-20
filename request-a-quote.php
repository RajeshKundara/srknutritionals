<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.themexriver.com/industrio/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Oct 2023 07:20:47 GMT -->

<?php
$title = 'Request a Quote for Liquid Dietary Supplement Manufacturing - SRK Nutritionals';
$discription = 'Get a personalized quote for manufacturing liquid dietary supplements. Our expert team specializes in producing high-quality dietary supplements in liquid dosage forms.';
include 'head.php';
?>

<body class="_active-preloader-ovh">

  

    <div class="page-wrapper">

        <?php include 'header.php';?>
        <!--Main Slider-->
        <section class="contact-page sec-pad">
            <div class="container">
                <div class="sec-title text-center">
                    <h1>Request A <span>Quote</span></h1>
                    <p>Are you looking to bring your liquid dietary supplement ideas to life or explore ways to enhance your existing product line? We're here to help. At [Your Company Name], we're dedicated to delivering top-quality contract manufacturing services tailored to your specific needs.</p>
                </div><!-- /.sec-title text-center -->
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <!-- <form action="https://html.themexriver.com/industrio/inc/sendemail.php" class="contact-form">
                            
                            <input type="text" placeholder="Company name.." name="CompanyName" />
                            <input type="text" placeholder="Product Name" name="ProductName" />
                            <input type="text" placeholder="Email" name="Email" />
                            <textarea placeholder="Product Type,Botle Count,Order Quantity" name="message"></textarea>
                            <button type="submit" class="hvr-sweep-to-right">Send</button>
                        </form> -->
                        <form onsubmit="return CustomerQuery(event)" class="contact-form" id='contact-form' style="padding: 16px;border: #010156 1px solid;border-radius: 5px;">
                            <h3>Send Mail</h3>
                            <input type="text" placeholder="Your name.." id='CustomerName' name="name" />
                            <input type="text" placeholder="Your email address.." id='CustomerEmail' name="email" />
                            <input type="text" placeholder="Your Phone No" id='CustomerPhone' name="Phone" />
                            <textarea placeholder="Write..." id='CustomerMessage' name="message"></textarea>
                            <button type="submit" id="btnSubmit" class="hvr-sweep-to-right">Send</button>
                        </form>
						<div class="col text-center" id="contactSuccess" style="display:none;opacity:1;transition:opacity 1s">
							<img src="img/success.webp" alt="Sent Ok" style="height:120px" class="rd-10 mb-4">
							<h2 style="color:#010156">Thank you!</h2>
							<h3 style="color:#010156">We have got your message! You will get instant reply from us very soon.</h3>
						</div>
                    </div>
                    <div class="col-md-3"></div>
                       <!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-page -->
        <section class="team-style-one sec-pad pb0">
            <div class="container">
                <div class="sec-title text-center">
                    <h1><span>Our Qualifications</span></h1>
                </div>
            </div>
            <?php include 'sec-our-qualification.php'; ?>
        </section>
    </div><!-- /.page-wrapper -->

   <?php
include 'footer.php';
   ?>
  

</body>

<!-- Mirrored from html.themexriver.com/industrio/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Oct 2023 07:21:07 GMT -->

</html>