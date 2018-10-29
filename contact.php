    <?php
    $title='Contact | ALETRIBI For Steel Structure';
    require 'prince.php';
    require 'header.php';
    ?>

    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Contact Us</h2>
        <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php" class="active">Contact Us</a></li>
        </ol>
    </section>
    <!-- End Banner area -->
 
    <!-- All contact Info -->
    <section class="all_contact_info">
        <div class="container">
            <div class="row contact_row">
                <div class="col-sm-6 contact_info">
                    <h2>Contact Info</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                    <div class="location">
                        <div class="location_laft">
                            <a class="f_location" href="#">location</a>
                            <a href="#">phone</a>
                            
                            <a href="#">email</a>
                        </div>
                        <div class="address">
                            <a href="#">Arab Abo Saed Alsaf ,  <br> Giza, EGYPT </a>
                            <a href="#">+2 01113994999</a>
                            
                            <a href="#">aletribi@aletribi.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 contact_info send_message">
                    <h2>Send Us a Message</h2>
                    <?php
                    require 'alerts.php';
                    ?>
                    <form class="form-inline contact_box" action="process.php" method="post">

                        <input type="email" name="email" class="form-control input_box"  autocomplete="off" placeholder="Your Email *">
                        <input type="text" name="subject" class="form-control input_box" autocomplete="off" placeholder="Subject">
                       
                        <textarea class="form-control input_box" name="message" placeholder="Message"></textarea>
                        <button type="submit" class="btn btn-default">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End All contact Info -->

      <?php
    require 'footer.php';
    ?>