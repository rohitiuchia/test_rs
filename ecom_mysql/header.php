<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">Rohit</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color: white;">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="product.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact us</a>
        </li>
      </ul>
      
      <ul class="navbar-nav">
        <?php 
        if(isset($_SESSION['username'])){
         ?>
        
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Log out</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php">Cart</a>
        </li>
        <?php 
      }else{

         ?>
         <li class="nav-item">
          <a class="nav-link" href="signup.php">Sign up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Sign in</a>
        </li>
      <?php } ?>
      </ul>

      <!-- <?php 
                if (isset($_SESSION['username'])) {
                    echo "<a href='logout.php'>logout</a>";
                    echo "<a href='cart.php'>cart</a>";
                } else {
                  echo "<a href='login.php'>login</a>";
                  echo "<a href='signup.php'>Sign up</a>";
                }
                
               ?> -->
    </div>
  </div>
</nav>