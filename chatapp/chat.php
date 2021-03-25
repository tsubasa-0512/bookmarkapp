<?php
  session_start();
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>

<?php  include_once "php/header.php" ?>
<body>
  <div class="wrapper">
    <section class="chatroom">
      <header>
        <?php
          include_once "php/config.php";
          $user_id = mysqli_real_escape_string($con, $_GET['user_id']);
          $sql = mysqli_query($con, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
          }
        ?>
        <a href="users.php" class="back-profile"><i class="fas fa-arrow-left"></i></i></a>
        <img src="php/img/<?php echo $row['img'] ?>" alt="">
        <div class="details">
          <span><?php echo $row['lname']." ".$row['fname'] ?></span>
          <p><?php echo $row['status'] ?></p>
        </div>
      </header>
      <div class="chat-box">
        <div class="chat outgoing">
          <div class="details">
            <p>こんにちは</p>
          </div>
        </div>
        <div class="chat incoming">
          <img src="php/img/<?php echo $row['img'] ?>" alt="">
          <div class="details">
            <p>こんにちは、今日はお元気ですか？心地よい天気ですね。XXXXXX</p>
          </div>
        </div>
      </div>
      <form action="#" class="typing-area">
        <input type="hidden" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>">
        <input type="hidden" name="ingoing_id" value="<?php echo $user_id; ?>">
        <input type="text" name="msg" class="input-area" placeholder="メッセージを入力してください">
        <button><i class="fas fa-paper-plane"></i></button>
      </form>
      </div>
    </section>
  </div>
</body>
<script src="javascript/chat.js"></script>
</html>