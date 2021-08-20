<?php
            if (empty($_SESSION['success']))
            {
                $_SESSION['success'] = "You have to log in first";
           ?>
                <div id="login" style = "color: #9F6000;  background-color: #FEEFB3" class="mx-auto p-3 h-25 text-center align-center border border-warning">
            <?php 
                    header("location: http://localhost/cd/index.php/home/index");

                } else { ?>
                <div id="login" style = "color: #4F8A10;  background-color: #DFF2BF" class="mx-auto p-3 h-25 text-center align-center border border-success">
                    <?php } ?>
                <span><h4><b><?php echo $_SESSION["success"] ?></b></h4></span>
        </div>