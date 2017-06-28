<script>
         function loadMap() {
            
            var mapOptions = {
               center:new google.maps.LatLng(12.842505, 80.154260),
               zoom:16, 
               mapTypeId:google.maps.MapTypeId.ROADMAP
            };
                
            var map = new google.maps.Map(document.getElementById("sample"),mapOptions);
            var marker = new google.maps.Marker({
            position: new google.maps.LatLng(12.842505, 80.154260),
            map: map,
            });
         }
</script>
<style type="text/css">
section#contact {
    background-color: #222;
    background-image: url('images/BMW.jpg');
    background-position: center;
    background-repeat: repeat;
}
section {
    padding: 100px 0;
}
</style>
 <section id="contact" background="images">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <form name="sentMessage" id="contactForm" novalidate="" method="post" action="feedback.php">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group contact-back">
                                    <input type="text" class="form-control" placeholder="Your Name *" name="name" required="" data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" name="email" required="" data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" name="phone" required="" data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" name="message" required="" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div id="success form-group ">
                                <button type="submit" class="btn btn-xl">Send Message</button>
                                </div>
                                </div>
                         </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div id="sample" style="width:400px;height:250px;"></div>

                </div>
            </div>
        </div>
    </section>
   