        <div class="mb-5">
          <?php
            include_once("conf.php");
            $a = $_POST['satu'];
            $aa = $_POST['dua'];
            $aaa = $_POST['tiga'];
            $b = "SELECT * FROM os.main Limit 0, 5";
            $query = mysqli_query($mysqli, $b);
            echo '<div class="row mb-5 justify-content-center">';
              echo '<div class="col-md-7 text-center">';
                echo "<h2 class='section-title mb-2'>30 Distro for you</h2>";
              echo '</div>';
            echo '</div>';
            $zeeb = 0;
             while($data = mysqli_fetch_array($query)) {
               if ($data['status'] == "Active") {
                 $badge = "'badge badge-success px-2 py-1 mb-3'";
               }
               else {
                 $badge = "'badge badge-danger px-2 py-1 mb-3'";
               }
               echo '<div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">';
               echo '<div class="col-md-2">';
               echo "<a href=distro-info.html><img src=images/icon/".$data['distro'].".png alt='Image' class=img-fluid></a>";
               echo '</div>';
               echo '<div class="col-md-4">';
               echo '<span class='.$badge.'>'.$data['status'].'</span>';
                echo "<h2><a href=distro-list/distro-".$data['distro'].".html>".$data['distro']."</a> </h2>";
            echo '</div>';
            echo '<div class="col-md-3 text-left">';
              echo '<h3>'.$data['versi'].'</h3>';
              echo '<span class="meta">'.$data['base'].'</span><br>';
              echo '<span class="meta">'.$data['package'].'</span>';
            echo '</div>';
            echo '<div class="col-md-3 text-right">';
              echo "<h4><a href=".$data['link']." target=_blank</a><img src='images/down.png' alt='Image' height=100 width=100></a></h4>";
            echo '</div>';
          echo '</div>';
          if ($zeeb == 4) {
            break;
          }
          $zeeb++;
        }
         ?>
        </div>
