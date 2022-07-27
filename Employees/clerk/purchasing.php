<?php require 'header.php'; ?>
<?php include '../../assets/PHP/purchasing.php'; ?>

<div class="row">
    <div class="container col s12 m8 offset-m2">
        <div class="card grey lighten-3" style="padding: 5px 0px 0px 5px; border: 1px solid #EEE;">
            <!-- <div class="z-depth-1 grey lighten-4 row" style="display: block; padding: 2px 5px 0px 5px; border: 1px solid #EEE;"> -->
            <div class="card-content">
                <h5 class="card-title center-align">Purchase and Transactions</h5>
                <form action="purchasing.php" method="post" class="purchase-form" id="form" autocomplete="off">
                    <div class="red-text center-align"><?php echo $errors['invalid']; ?></div>
                    <div class="row">
                        <?php
                        $conn = new mysqli("localhost", "root", "", "my_db");
                        $result = mysqli_query($conn, "SELECT * FROM products");
                        if ($result->num_rows > 0) {
                            $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
                        }
                        ?>
                        <div class="input-field col s12 m6">
                            <i class="material-symbols-outlined prefix">inventory</i>
                            <select class="" name="good" id="good" value="<?php (htmlspecialchars($prod)) ?>">
                                <option value="" disabled selected>Choose your option</option>
                                <?php
                                foreach ($options as $option) {
                                ?>
                                    <option><?php echo $option['Product_name']; ?> </option>
                                <?php
                                }
                                ?>
                            </select>
                            <label for="good">Product Name</label>
                            <div class="red-text right-align"><?php echo $errors['prod']; ?></div>
                        </div>

                        <div class="input-field col s12 m6">
                            <!-- <i class="material-icons prefix">email</i> -->
                            <i class="material-symbols-outlined prefix">tag</i>
                            <select class="" name="quan" id="quan" value="<?php (htmlspecialchars($quant)) ?>">
                                <option value="" disabled selected>Choose your option</option>
                                <option value="1">One Unit</option>
                                <option value="2">Two Units</option>
                                <option value="3">Three Units</option>

                            </select>
                            <label for="good">Quantity(Unit)</label>
                            <div class="red-text right-align"><?php echo $errors['quant']; ?></div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        $conn = new mysqli("localhost", "root", "", "my_db");
                        $result = mysqli_query($conn, "SELECT * FROM customer");
                        if ($result->num_rows > 0) {
                            $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
                        }
                        ?>
                        <div class="input-field col s12 m6">
                            <i class="material-symbols-outlined prefix">person</i>
                            <select class="" name="cust" id="cust">
                                <option value="" disabled selected>Choose your option</option>
                                <?php
                                foreach ($options as $option) {
                                ?>
                                    <option><?php echo $option['Uname']; ?> </option>
                                <?php
                                }
                                ?>
                            </select>
                            <label for="cust">Customer Name</label>
                            <div class="red-text right-align"><?php echo $errors['cust']; ?></div>
                        </div>

                    </div>
                    <div class="row center-align">
                        <button class="btn blue darken-2 waves-effect waves" type="submit" name="sell">Sell
                            <i class="material-symbols-outlined"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<!-- <div class="main-bar">
        <div class="good">
            <h1 class="h">Purchase</h1>
            <form action="purchasing.php" method="post">
                <label for="">Goods</label>
                <select name="goods" id="opt">
                    <option value="Sugar">Sugar</option>
                    <option value="Oil">Oil</option>
                    <option value="flour">flour</option>
                    <option value="Soap">Soap</option>
                    <option value="Ajax">Ajax</option>
                    <option value="Biscuit">Biscuit</option>

                </select>
                <label for="price">Price in Birr</label>
                <input type="number" name="price" autofocus>

                <label for="quantity">Quantity</label>
                <input type="number" name="quantity">

                <label for="cust_name"> Customer name</label>
                <input type="text" name="cust_name" autofocus>
                <button class="btn0" type="reset">Clear</button>
                <button class="btn" type="submit" name="sell" value="Sell">Sell</button>
                <button type="submit" name="sell" value="Sell">
            </form>
        </div>
    </div> -->

</main>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.js"></script>

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