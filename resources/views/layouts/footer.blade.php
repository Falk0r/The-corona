<footer>
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-item footer-service">
                        <h2>Important Links</h2>
                        <ul class="fmain">
                            <li><a href="https://www.worldometers.info/coronavirus/">Coronavirus Pandemic</a></li>
                            <li><a href="https://www.bbc.com/news/coronavirus">BBC News</a></li>
                            <li><a href="https://www.livescience.com/coronavirus-updates-united-states.html">Covid 19 in USA</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-item footer-service">
                        <h2>Pages</h2>
                        <ul class="fmain">
                            <li><a href="about">About</a></li>
                            <li><a href="privacy-policy">Privacy Policy</a></li>
                            <li><a href="terms-and-conditions">Terms and Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-item footer-contact">
                        <h2>Contact</h2>
                        <ul>
                            <li>ABC Steet, NewYork.</li>
                            <li>info@yourwebsite.com</li>
                            <li>123-456-7878</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-item footer-service">
                        <h2>Social Media</h2>
                        <div class="footer-social-link">
                            <ul>
                                <li><a href="http://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="http://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="http://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="http://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="http://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2020. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="scroll-top" style="">
    <i class="fa fa-angle-up"></i>
</div>
<script src="/js/custom.js"></script>
<script>
    $(document).on('submit', '#stripe_form', function () {
        // createToken returns immediately - the supplied callback submits the form if there are no errors
        $('#submit-button').prop("disabled", true);
        $("#msg-container").hide();
        Stripe.card.createToken({
            number: $('.card-number').val(),
            cvv: $('.card-cvv').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
            //name: $('.card-holder-name').val()
        }, stripeResponseHandler);
        return false;
    });
    Stripe.setPublishableKey('pk_test_0SwMWadgu8DwmEcPdUPRsZ7b');
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('#submit-button').prop("disabled", false);
            $("#msg-container").html('<div style="color: red;border: 1px solid;margin: 10px 0px;padding: 5px;"><strong>Error:</strong> ' + response.error.message + '</div>');
            $("#msg-container").show();
        } else {
            var form$ = $("#stripe_form");
            var token = response['id'];
            form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
            form$.get(0).submit();
        }
    }
</script>
<script>
    $('#pills-1-tab').addClass('active');
$('#pills-1').addClass('show active');
$('#pills-2-tab').addClass('disabled');
$('#pills-3-tab').addClass('disabled');


$('#s1_next').on('click',function() {

$('#pills-2-tab').addClass('active');
$('#pills-2').addClass('show active');

$('#pills-1-tab').removeClass('active');
$('#pills-1').removeClass('show active');

$('#pills-2-tab').click();
$('#pills-1-tab').addClass('disabled');
$('#pills-3-tab').addClass('disabled');
});

$('#s2_previous').on('click',function() {

$('#pills-1-tab').addClass('active');
$('#pills-1').addClass('show active');

$('#pills-2-tab').removeClass('active');
$('#pills-2').removeClass('show active');

$('#pills-1-tab').click();
$('#pills-2-tab').addClass('disabled');
$('#pills-3-tab').addClass('disabled');
});

$('#s2_next').on('click',function() {

$('#pills-3-tab').addClass('active');
$('#pills-3').addClass('show active');

$('#pills-2-tab').removeClass('active');
$('#pills-2').removeClass('show active');

$('#pills-3-tab').click();
$('#pills-1-tab').addClass('disabled');
$('#pills-2-tab').addClass('disabled');
});

$('#s3_previous').on('click',function() {

$('#pills-2-tab').addClass('active');
$('#pills-2').addClass('show active');

$('#pills-3-tab').removeClass('active');
$('#pills-3').removeClass('show active');

$('#pills-2-tab').click();
$('#pills-1-tab').addClass('disabled');
$('#pills-3-tab').addClass('disabled');
});
</script>
<script>
    function printDiv(divName = 'printablediv')
    {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
<iframe name="stripeXDM_default20388_provider" id="stripeXDM_default20388_provider" aria-hidden="true" src="https://js.stripe.com/v2/channel.html?stripe_xdm_e=https%3A%2F%2F8080-b3d43794-13ee-40b0-b80d-4c7ec1b0e646.ws-eu01.gitpod.io&amp;stripe_xdm_c=default20388&amp;stripe_xdm_p=1#__stripe_transport__" frameborder="0" style="position: absolute; top: -2000px; left: 0px;"></iframe>
<iframe src="https://js.stripe.com/v2/m/outer.html#referrer=https%3A%2F%2F8080-b3d43794-13ee-40b0-b80d-4c7ec1b0e646.ws-eu01.gitpod.io%2Fpage%2Fdoctors&amp;title=About%20Us&amp;url=https%3A%2F%2F8080-b3d43794-13ee-40b0-b80d-4c7ec1b0e646.ws-eu01.gitpod.io%2Fpage%2Fabout&amp;muid=57b390d7-0cdd-4c82-a86a-8a4fe8b31bf4&amp;sid=890cc54b-e7c9-4a37-9c33-3d846632c97e&amp;preview=false&amp;" frameborder="0" allowtransparency="true" scrolling="no" tabindex="-1" aria-hidden="true" style="width: 1px !important; height: 1px !important; position: fixed !important; visibility: hidden !important; pointer-events: none !important;"></iframe> 
