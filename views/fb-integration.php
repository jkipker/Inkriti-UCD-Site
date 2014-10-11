<!-- Start Facebook code integration -->
      <?php foreach ($arrayfeeds as $row): ?>
      <?php if ($row->link) { $link = $row->link; } else { $link ='https://www.facebook.com/UnitedConcordiaDental'; } ?>
              <div class="socialmedia-box"> 
                <?php if ($row->picture):?>  
                  <a href="<?php echo $link; ?>" target="_blank"><img src="<?php echo $row->picture; ?>" alt="ad" width="269" height="130"></a> 
                <?php endif; ?>
                <a href="<?php echo $link; ?>" target="_blank" class="link-icon" style="margin-top:10px"><img src="img/facebook-icon.png" alt="facebook" width="24" height="24"></a>
                <p> <?php echo $row->message; ?> </p>
              </div>
      <?php endforeach; ?>
<!-- End Facebook code integration -->