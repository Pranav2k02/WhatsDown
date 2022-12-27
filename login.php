<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
<div style="position:absolute; left:0; top:0; background-color:#000; width:100%; height:80px;">
    <a href="/web/ChatApp/index.php"style="position:relative; color:#fff; text-align:center; margin-left:44%; top:10px; font-size:40px">Whats<span style="color:#5C5CFF;">Down</span></a>
  </div>
  <div class="wrapper">
    <section class="form login">
      <header>WhatsDown</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
    </section>
  </div>
  
  <script src="javascript/login.js"></script>

</body>
</html>
