<!-- jquery plugins here-->
<script src="public/assets/home/js/jquery-1.12.1.min.js"></script>
<!-- popper js -->
<script src="public/assets/home/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="public/assets/home/js/bootstrap.min.js"></script>
<!-- easing js -->
<script src="public/assets/home/js/jquery.magnific-popup.js"></script>
<!-- swiper js -->
<script src="public/assets/home/js/swiper.min.js"></script>
<!-- swiper js -->
<script src="public/assets/home/js/masonry.pkgd.js"></script>
<!-- particles js -->
<script src="public/assets/home/js/owl.carousel.min.js"></script>
<script src="public/assets/home/js/jquery.nice-select.min.js"></script>
<!-- slick js -->
<script src="public/assets/home/js/slick.min.js"></script>
<script src="public/assets/home/js/jquery.counterup.min.js"></script>
<script src="public/assets/home/js/waypoints.min.js"></script>
<script src="public/assets/home/js/contact.js"></script>
<script src="public/assets/home/js/jquery.ajaxchimp.min.js"></script>
<script src="public/assets/home/js/jquery.form.js"></script>
<script src="public/assets/home/js/jquery.validate.min.js"></script>
<script src="public/assets/home/js/mail-script.js"></script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>