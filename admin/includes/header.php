<?php
$query = "SELECT COUNT(*) FROM pesan  WHERE status = 'unread' ";
$result = mysqli_query($con,$query) or die(mysqli_error());
$row = mysqli_fetch_row($result);
$size = $row[0];

?>

<?php
$query_t = "SELECT COUNT(*) FROM transaksi  WHERE status = 'pending' ";
$result_t = mysqli_query($con,$query_t) or die(mysqli_error());
$rows = mysqli_fetch_row($result_t);
$size_r = $rows[0];

?>


<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">

              <div class="col-sm-7">

                  <div class="header-left">
                        <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger"><?php echo $size_r ?></span>
                          </button>
                        </div>

                        <div class="dropdown for-message">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                            <span class="count bg-primary"><?php echo $size ?></span>
                          </button>
                        </div>
                  </div>
                </div>

        <div class="col-sm-5">
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu">


                        <a class="nav-link" href="/tour/user/logout.php"><i class="fa fa-power -off"></i>Logout</a>
                </div>
            </div>

            <div class="language-select dropdown" id="language-select">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                    <i class="flag-icon flag-icon-us"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="language" >
                    <div class="dropdown-item">
                        <span class="flag-icon flag-icon-fr"></span>
                    </div>
                    <div class="dropdown-item">
                        <i class="flag-icon flag-icon-es"></i>
                    </div>
                    <div class="dropdown-item">
                        <i class="flag-icon flag-icon-us"></i>
                    </div>
                    <div class="dropdown-item">
                        <i class="flag-icon flag-icon-it"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>

</header>
