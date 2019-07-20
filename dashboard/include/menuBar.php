<div class="navbar navbar-default navbar-fixed-top navbar-inverse">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="dashboard.php" class="navbar-brand">Shop</a>
</div>
<div class="collpase navbar-collapse" id="example">
<ul class="nav navbar-nav">
<li><a href="product.php">Product</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="profile.php"><img src="../upload/userPic/chat-avatar2.jpg" alt="../upload/userPic/chat-avatar2.jpg" class="proPic"></a></li>
<li><a href="profile.php"><?php echo $_SESSION['fullname']; ?></a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</div>
</div>
</div>