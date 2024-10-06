
<!-- header-->
<?php 

 include 'header.php';
 ?>

<!-- header end -->
<?php 
 include "connection.php";

  $sql= "SELECT * FROM product";
  $result=$conn->query($sql);

 ?>


<!DOCTYPE html >
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>products</title>
<?php include "head.php"; ?>
  <style type="text/css">
        body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: grey;
      margin: 0;
      padding: 0;
/*      display: flex;*/
      align-items: center;
/*      justify-content: center;*/
      height: 100vh;
    }
  .box{
    float: left;
    margin: 5px;
  }
  .dropdown-toggle
{
 padding: 5px;
 color: black ;
}
.dropdown-toggle:hover
{
  color: #F2BB2F;
}
.dropdown-menu{

   display: none;
   color:blue;
   border: blue;
   text-align: center;
   z-index: 10;
   position: fixed;
   padding: 5px;
 }
 .dropdown-menu a:hover 
  {
   background-color:BLUE;
   color: yellow;
  }

  .dropdown:hover .dropdown-menu
  {
   display: block;
   background-color: white;
  }
  .d-flex span:hover
   {
    color: #B0B0B0;
   }
  .bg-my
  {
    background-color: #F3F3F3;
  }
  .text-my
  {
    color: #F2C553;
  }
  .box
  {
    border: 1px solid #F2BB2F;
    border-radius: 20px;
    background-color: #F2BB2F;
    margin: 5px;
    padding: 20px;
    height: 150px;
  }
  .circle
  {
    padding-top: 20px;
    padding-bottom: 20px;
    padding-right: 20px;
    padding-left: 20px;
    border-radius: 50%;

    background-color: #F2BB2F;
  }
  .bg-my2
  {
    background-color: #232323;
  }


  .m4a1{
    position: relative;
    visibility: hidden;
    top: -60px;
    width: 160px;
    height: 50px;
    background-color: white;
    margin: auto;
  }

   .scar:hover .m4a1{
    position: relative;
    background-color: white;
    visibility: visible;
    margin: auto;
    width: 160px;
    height: 50px;
    animation: mytest .5s 1;
   }
   .scar{
    position: relative;
   }
   .upp{
    position: absolute;
    bottom: 0px;
    text-align: center;
   }

   @keyframes mytest{
    from{top: -30px;}
    to{ top: -60px;}
   }
   .box2
   {
    border: 1px solid #FFFFFF;
    background-color: white;

   }

  </style>
</head>
<body>
<div style="background-color: white;">
  
<div class="container " >
 <div class="row">
  <h1>
    <?php 
    if (isset($_SESSION['username'])) {
      echo "hello".$_SESSION['username'];
    }
    else
    {
    
    }

   ?></h1>
        <?php foreach ($result as $key ) { ?>
      <div class="col-lg-3 mt-5 ">
     <div class="scar">
     <a href="productinfo.php?id=<?php echo $key['product_id'];?>">
             <img  src="images/<?=$key['product_img'];?>" width="250" height="250">
      <div class="m4a1">
        <div class="box2" >
          <div class="row " >
            <div class="col-4 ">
              <i class="fa-solid fa-cart-shopping"></i>
            </div>
            <div class="col-4">
              <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="col-4">
              <i class="fa-regular fa-heart"></i>
            </div>
          </div>
        </div>
      </div>
       <div class="row" style="margin-top:25px;">
          <div class="text-center upp">
            <h4 class="mt-5 card-title"><?=$key['product_name'] ?></h4>
          <span class=" text-dark"><i class="fa-solid fa-indian-rupee-sign"><?=$key['product_price'] ?></i></span>
        </div> 
       </div>
     </a> 
       </div>
    </div>                                              
    <?php } ?>
 </div>
</div>
</div>
                                                                     
</body>
</html>	

<!-- footer begin -->
<?php 
  // include'footer.php';
 ?>
<!-- footer end -->


