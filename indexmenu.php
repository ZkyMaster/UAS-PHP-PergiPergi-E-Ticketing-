<?php

        if(isset($_SESSION['loggedin']))
        { ?>


          <ul>
            <li <?php if($_SERVER['PHP_SELF'] == "/tour/index.php"){?> class="active" <?php }?> ><a href="index.php">Home</a></li>
            <li <?php if($_SERVER['PHP_SELF'] == "/tour/list-penerbangan.php"){?> class="active" <?php }?> ><a href="list-penerbangan.php">Booking</a></li>
            <li <?php if($_SERVER['PHP_SELF'] == "/tour/about.php"){?> class="active" <?php }?> ><a href="about.php">About</a></li>
            <li <?php if($_SERVER['PHP_SELF'] == "/tour/contact.php"){?> class="active" <?php }?> ><a href="contact.php">Contact</a></li>
            <li class="has-dropdown"><a>Account</a>
              <ul class="dropdown">
                <li <?php if($_SERVER['PHP_SELF'] == "/tour/profile.php"){?> class="active" <?php }?> ><a href="/tour/profile.php">Profile</a></li>
                <li><a href="/tour/user/logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>

<?php   }
        else
        { ?>

          <ul>
            <li <?php if($_SERVER['PHP_SELF'] == "/tour/index.php"){?> class="active" <?php }?> ><a href="index.php">Home</a></li>
            <li <?php if($_SERVER['PHP_SELF'] == "/tour/list-penerbangan.php"){?> class="active" <?php }?> ><a href="list-penerbangan.php">Booking</a></li>
            <li<?php if($_SERVER['PHP_SELF'] == "/tour/about.php"){?> class="active" <?php }?> ><a href="about.php">About</a></li>
            <li <?php if($_SERVER['PHP_SELF'] == "/tour/contact.php"){?> class="active" <?php }?> ><a href="contact.php">Contact</a></li>
            <li ><a href="./user/login.php">Login</a></li>
          </ul>

<?php    } ?>
