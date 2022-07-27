<?php require 'header.php'; ?>


</main>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.js"></script>
<center>
    <blockquote class="center">
        <h3>Welcome <?php echo $_SESSION['name'] ?> to E-shemach</h3>
        <hr width="50%"><br>
        <h5>Here you will be abel to sell Goods very easily. Enjoy your time here!!!</h5>
    </blockquote>
</center>

<script>
    $(document).ready(function() {
        $(".dropdown-trigger").dropdown();
        $('select').formSelect();
        $('.sidenav').sidenav();
        $('.parallax').parallax();
        $('.carousel.carousel-slider').carousel({
            fullWidth: true
        });
        autoplay();

        function autoplay() {

            $('.carousel').carousel('next');
            setTimeout(autoplay, 5000);
        }
        $('.tabs').tabs();
        $('.materialboxed').materialbox();
        $('.datepicker').datepicker({
            disableWeekends: true,
            yearRange: 1
        });
        $('.tooltipped').tooltip();
        $('.scrollspy').scrollSpy({
            throttle: 10
        });
        $('.collapsible').collapsible();

    });

    function revealE() {
        var x = document.getElementById("addnew");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
</body>

</html>