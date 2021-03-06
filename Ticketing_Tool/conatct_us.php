
<div id="contact" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header text-center wow fadeInDown" data-wow-delay="0.3s">
                    <h2 class="section-title">Want To Get Started</h2>
                    <p>connect with us</p>
                </div>
            </div>
        </div>
        <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">
            <div class="col-md-6 col-lg-4 col-sm-12">
                <div class="contact-right-area wow fadeIn">
                    <h2>Get In Touch</h2>
                    <div class="contact-right">
                        <div class="single-contact">
                            <div class="contact-icon">
                                <i class="lni-map-marker"></i>
                            </div>
                            <p>Office No. 408, 4th Floor, Goodwill Square, <br>Dhanori Pune - 411015 </p>
                        </div>
                        <div class="single-contact">
                            <div class="contact-icon">
                                <i class="lni-envelope"></i>
                            </div>
                            <p><a href="#">info@thetechcubes.com</a></p>
                            <p><a href="#">help@thetechcubes.com</a></p>
                        </div>
                        <div class="single-contact">
                            <div class="contact-icon">
                                <i class="lni-phone-handset"></i>
                            </div>
                            <p><a href="#">+91 99xxxxx800</a></p>
                            <p><a href="#">+91 99xxxxx800</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-8 col-sm-12">
                <div class="contact-block">
                    <h2>Contact Form</h2>
<!--                    <form id="contactForm"  method="post">-->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                        required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" placeholder="Email" id="email" class="form-control" name="email"
                                        required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" placeholder="Subject" id="msg_subject" class="form-control"
                                        required data-error="Please enter your subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Your Message" rows="4"
                                        data-error="Write your message" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="submit-button">
                                    <button class="btn btn-common blush" id="form-submit" type="submit" onclick="mYForm()">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function mYForm(){
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var msg_subject = document.getElementById('msg_subject').value;
        var message = document.getElementById('message').value;
        
        if(name != '' && email != '' && msg_subject != '' && message != ''){
        $.ajax({
            url:"insert.php",
            type:"post",
            data:{
                name : name,
                email :email,
                msg_subject :msg_subject,
                message : message,
            },
            success:function(data){
                $('#msgSubmit').text(data);
                $('#name').val('');
                $('#email').val('');
                $('#msg_subject').val('');
                $('#message').val('');
            }
        });
    }else{
        $('#msgSubmit').text("Please Fill all the field");
    }
    }
</script>