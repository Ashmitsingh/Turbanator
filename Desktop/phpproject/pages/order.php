<?php
include('session.php');
?>
<!DOCTYPE html>

<html lang="">

<head>
<title>Order now</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  
  <link rel="stylesheet" type="text/css" href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><script src="https://kit.fontawesome.com/bdac358181.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
  <link href="../layout/styles/tips.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0 ">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="nospace ">
      <li><a href="../index.html" title="Home"><i class="fas fa-home"></i></a></li>
      <li><a href="mailto:ashmitsingh2@gmail.com" title="Send a Mail"><i class="far fa-envelope"></i></a></li>
      <li><a href="contact.html" title="Help Centre"><i class="far fa-life-ring"></i></a></li>
      <li><a href="login.html" title="Login"><i class="fas fa-sign-in-alt"></i></a></li>
      <li><a href="signup.html" title="Sign Up"><i class="fas fa-edit"></i></a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <section>
      <div class="phone"><a href="#" ><i class="fas fa-phone"></i> 7009197247 </a></div>
      <div>
        <h1 id="logo"><i class="fas fa-palette"></i> <a href="../index.html">ArtGallery</a></h1>
      </div>
      <div>
        <h3 style="float: right;"><a href="../index.html" title="Logout"><i class="fa fa-sign-out-alt fa-border fa-1x" style="color:#FD8866; border-color:#FD8866;"></i></a></h3>
    </section>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li ><a href="../index.html"><i class="fas fa-home "></i> Home</a></li>
      <li><a href="../index.html"><i class="fas fa-info "></i> About Us</a></li>
      <li><a class="drop" href="gallery.html"><i class="far fa-image "></i> Gallery</a>
        <ul>
          <li><a href="gallery.html#sketch">Sketch</a></li>
          <li><a href="gallery.html#inkpen">Ink Pen</a></li>
          <li><a href="gallery.html#charcoal">Charcoal</a></li>
          <li><a href="gallery.html#oilpainting">Oil Painting</a></li>
          <li><a href="gallery.html#watercolor">Watercolors</a></li>
          <!-- <li><a href="pages/font-icons.html">Font Icons</a></li> -->
        </ul>
      </li>
      <li ><a href="../pages/Articles.html"><i class="far fa-image "></i> Articles</a></li>

      <li><a class="drop" href="../pages/basic-grid.html"><i class="fas fa-user "></i> Services</a>
        <ul>
          <li><a href="../pages/basic-grid.html">Artists</a></li>
          <li><a class="" href="../pages/basic-grid.html">Exhibitions</a>
          <!--   <ul>
              <li><a href="#">Level 3</a></li>
              <li><a href="#">Level 3</a></li>
              <li><a href="#">Level 3</a></li>
            </ul> -->
          </li>
          <li><a href="../pages/basic-grid.html">Testimonials</a></li>
        </ul>
      </li>
        

      <li><a href="contact.html"><i class="fas fa-address-book "></i> Contact Us</a></li>
     

      
    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('../images/demo/order.png');">
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <h6 class="heading">Order Now</h6>
    <ul>
      <li><a href="../index.html">Home</a></li>
      <li><a href="../pages/Articles.html">Order Here</a></li>
      
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
        <h1 style="font-size: 50px; text-align: center;">Order Here</h1>

      <!-- ################################################################################################ -->
      
<!-- Form start ------------------------------------------------ -->
      <div class="order-form">
        <div class="row">

          <div class="col" >
        <form action="orderbackend.php" enctype="multipart/form-data" method="post" name="order-form" id="chronoform-order-form" class="chronoform form-horizontal">
        


<div class="row">

   <div class="col-md-12">
   
      <div class="row" style="margin-top:10px">
        <div class="col-md-3">  

          
           <div class="gcore-checkbox-item" id="fitem">
          <input name="orientation" id="orientation" class=" validate['group:10']" title="" style="" data-load-state="" data-tooltip="" type="radio" value="Landscape">
          <label class="gcore-label" for="checkbox_group10">
          Landscape
          <img src="../images/demo/123.jpg" style="width:110px;height:80px;padding: 2px;
              border: 1px solid #ef851c;  box-shadow: 1px 3px 3px #666;"></label>
          </div>
      </div>
        
        <div class="col-md-3"><div class="gcore-checkbox-item" id="fitem1"><input name="orientation" id="orientation" class=" validate['group:10']" title="" style="" data-load-state="" data-tooltip="" type="radio" value="Portrait">
              <label class="gcore-label" for="checkbox_group101">Portrait
              <img src="../images/demo/123.jpg" style="width:70px;height:80px;padding: 2px;
                  border: 1px solid #ef851c; box-shadow: 1px 3px 3px #666;">
              </label></div>
        </div>
                      
        <div class="col-md-3"><div class="gcore-checkbox-item" id="fitem2"><input name="orientation" id="orientation" class=" validate['group:10']" title="" style="" data-load-state="" data-tooltip="" type="radio" value="Square">
              <label class="gcore-label" for="checkbox_group102">Square
              <img src="../images/demo/123.jpg" style="width:80px;height:80px;padding: 2px;
                  border: 1px solid #ef851c; box-shadow: 1px 3px 3px #666;">
              </label></div>
            </div>
                      
            <div class="col-md-3"><div class="gcore-checkbox-item" id="fitem3"><input name="orientation" id="orientation" class=" validate['group:10']" title="" style="" data-load-state="" data-tooltip="" type="radio" value="Circle" required>
              <label class="gcore-label" for="checkbox_group103">Circle
              <img src="../images/demo/123.jpg" style="width:85px;height:85px; border-radius:50%;padding: 2px;
                  border: 1px solid #ef851c;box-shadow: 1px 3px 3px #666;">
              </label></div>
            </div>
                 
         </div>
        </div>
    </div>
 <br><br><br>

 <div class="row" style="margin-top:10px">
   <div class="col-md-12">

      <div class="row">

        <div class="col-md-6" >
    
      <label>Size</label>
            <select name="dropdown11" id="dropdown11" size="" class="form-control cal validate['required']" title="" style="" data-load-state="" data-tooltip="" required>
            <option value="">Select</option>
            <option value="12 X 12">12 X 12</option>
            <option value="12 X 18">12 X 18</option>
            <option value="18 X 24">18 X 24</option>
            <option value="24 X 24">24 X 24</option>
            </select>

            </div>


            <div class="col-md-6">

            <label>Number of Pieces</label>
            <select name="dropdown12" id="dropdown12" size="" class="form-control cal validate['required']" title="" style="" data-load-state="" data-tooltip="" required>
            <option value="">Select</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            </select>

            </div>
             </div>

            <div class="col-md-4" >
            <label name="total">Price</label>
            <input type="text" name="total" id="total"  class="form-control"  readonly>

          <!-- <input name="totalamount" id="totalamount" readonly="" value="" placeholder="" class="form-control" title="" style="" data-inputmask="" data-load-state="" data-tooltip="" type="text"> -->

            </div> 
           
                          
               </div>
             </div>
             <br><br><br>

            <div class="row" style="margin-top:10px">
               <div class="col-md-12">
            <label>Upload your Image</label>
            <input name="photo" id="file" class=" validate['required','image'] form-control" title="" style="" multiple="0" data-load-state="" data-tooltip="" type="file" required>
            </div>
            </div>
            <br><br><br>

            <div class="row" style="margin-top:10px">
               <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-4">
                
                  <label>Full Name</label>
                      <input type="text" name="fname" class="form-control validate['required','alpha']" required>
    

            </div>

             <div class="col-md-4">
                
                  <label>Email</label>
                      <input type="email" name="email" id="email" class="form-control validate['required','email']" required>
            </div>


             <div class="col-md-4">
               
                  <label>Phone</label>
                      <input type="text" name="contactno" id="contactno" class="form-control validate['required','number','phone']" required>

            </div>
    
                  </div>
               </div>
             </div>
             <div class="row" style="margin-top:10px">
               <div class="col">
                <label>Address</label>
                      <textarea name="address" id="fa-address-book" placeholder="Enter Your Address here" class="form-control validate['required','address']" rows=5 cols=40 required></textarea>

               </div>
             </div>

            
            <br><br><br>
            <div class="row">
               <div class="col-md-12">
                      
                       <button type="submit" class="btn btn-outline-dark" name="submit">Place your order</button>
                       <br><br>
             
               </div>
             </div>

            </form>

            </div>
            <div class=" col">
              <img src="../images/demo/850.jpg" style="height: 685px; max-width: 500px;">
            </div>

            </div>
            </div>
<!-- form  End  ----------------------------------------------------------------------------------------------------------- -->
      
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_half first">
      <h6 class="heading">Find Us :</h6>
      <p class="btmspace-30">Visit us to view our Amazing Collection </p>
      <ul class="nospace linklist contact">
        <li><i class="fas fa-map-marker-alt"></i>
          <address>
          276, Star Colony, Manakwal
          </address>
        </li>
        <li><i class="fas fa-phone"></i> (+91) 7009197247 </li>
        <li><i class="fas fa-fax"></i> 0161-2584962</li>
        <li><i class="far fa-envelope"></i><a href="mailto:ashmitsingh2@gmail.com"> singhashmit2@gmail.com</li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Our upcoming Exhibitions :</h6>
      <ul class="nospace linklist">
        <li><a href="#">01 June,2020 : Ludhiana</a></li>
        <li><a href="#">18 June,2020 : Jalandhar</a></li>
        <li><a href="#">29 June,2020 : Chandigarh</a></li>
        <li><a href="#">08 July,2020 : Patiala</a></li>
        <li><a href="#">19 July,2020 : Amritsar</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Subscribe to our newsletter</h6>
      <p class="nospace btmspace-30">Get the latest updates on new Paintings and Artwork </p>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit" name="but_upload">Subscribe</button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left"></p>
    <p class="fl_right"></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->


<script>
            jQuery(document).ready(function(){
            jQuery('.cal').change(function(){

            var a = jQuery('#dropdown11').val();
            var b = jQuery('#dropdown12').val();
            if(a == '12 X 12')
            {
               a = 1;
            }
            if(a == '12 X 18')
            {
              a = 1.6;
            }
            if(a == '18 X 24')
            {
              a = 3.6;
            }
            if(a == '24 X 24')
            {
              a = 4;
            }
            var p = a * 3000;
            var c = p * b
            //var c = a + b;
            document.getElementById("total").value = c;
            //alert(c);
            });

            });
        </script>
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>