<div class="masthead">
        <h3 style="color:Firebrick;">STL Lasers</h3>
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container">
          <ul class="nav">
            <li <?php if(basename($_SERVER[PHP_SELF])=="index.php"){?>class="active"<?php } ?>><a href="index.php">Home</a></li>
            <li <?php if(basename($_SERVER[PHP_SELF])=="about.php"){?>class="active"<?php } ?>><a href="about.php">F and Q</a></li>
            <?php if(isset($_SESSION["login"])) { ?><li <?php if(basename($_SERVER[PHP_SELF])=="coupon.php"){?>class="active"<?php } ?>><a href="coupon.php">Coupons</a></li><?php } ?>
            <li <?php if(basename($_SERVER[PHP_SELF])=="contact.php"){?>class="active"<?php } ?>><a href="contact.php">Contact</a></li>
            <li <?php if(basename($_SERVER[PHP_SELF])=="videos.php"){?>class="active"<?php } ?>><a href="videos.php">Videos</a></li>
          </ul>
        </div>
      </div>
    </div><!-- /.navbar -->
</div>