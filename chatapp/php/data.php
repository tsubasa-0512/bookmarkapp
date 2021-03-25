<?php 
  while($row = mysqli_fetch_array($sql)) {
      $output .= '<a href="chat.php?user_id='.$row['unique_id'].'">
                  <div class="content">
                  <img src="php/img/'.$row['img'].'" alt="">
                  <div class="details">
                      <span>'.$row['lname']." ".$row['fname'].'</span>
                      <p>オンライン中</p>
                  </div>
                  </div>
                  <div class="status"><i class="fas fa-circle"></i></div>
              </a>';
  }
?>