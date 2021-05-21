 <?php 
echo '  <div class="wrap">
<div class="container">
    <div class="row">
        <div class="col-md-6 d-flex align-items-center">
            <p class="mb-0 phone pl-md-2">
            </p>
        </div>
        <div class="col-md-6 d-flex justify-content-md-end">
            <div class="social-media">
                <p class="mb-0 d-flex">
                    <div class="d-flex align-items-center justify-content-center" style="color:white"><span class="fa fa-paper-plane mr-1">headtobetterlife@gmail.com</span></div>
                </p>
            </div>
        </div>
    </div>
</div>
</div>
<nav class="navbar navbar-expand-lg navbar-light ftco_navbar bg-light ftco-navbar-light" id="ftco-navbar">
<div class="container">
    <a class="navbar-brand" href="index.html">Head To Better Life</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="oi oi-menu"></span> Menu
  </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="./index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="./about.php" class="nav-link">About Us</a></li>
        <li class="nav-item"><a href="./books.php" class="nav-link">Books</a></li>
        <li class="nav-item"><a href="./song.php" class="nav-link">Music</a></li>
        <li class="nav-item"><a href="./forum.php" class="nav-link">Discussion Forum</a></li>
        <li class="nav-item"><a href="./writeblog.php" class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="./php/logout.php" class="nav-link">Logout</a></li>
        <li class="nav-item">Welcome,', $_SESSION['username'],'</li>
           
      
    
        </ul>
    </div>
</div>
</nav>

';
?>
