<!DOCTYPE html>
<html>
<head>
  <title>navbar</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">

</head>
<body>
<header>
  <!-- Upper Nav -Bar -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class=" master-nav-bar container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img class="image-logo" src="<?php echo base_url(); ?>assets/images/logo.jpg" class="img-responsive" >
              
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
                <li><a href="#">Activities</a></li>
                <li><a href="#">Stories</a></li>
                <li><a href="#">About Us</a></li>                
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Sign In<span class="caret"></span></a>

                    <div class="dropdown-menu" id="formLogin">
                        <div class="row">
                            <div class="container-fluid">
                                <form class="">
                                    <div class="form-group">
                                        <label class="">Username</label>
                                        <input class="form-control" name="username" id="username" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label class="">Password</label>
                                        <input class="form-control" name="password" id="password" type="password">
                                        <br class="">
                                    </div>
                                    <button type="submit" id="btnLogin" class="btn btn-success btn-sm">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="<?php echo base_url(); ?>users/registration" >Register</a>
                </li>
            </ul>

            <!-- login drop down -->
            
                    
            <!-- /login drop down -->

           
        </div>
    </div>
</nav>
</header>

<div class="clear"></div>

<!-- /Upper Nav -Bar -->
<div class="container-fluid"></div>
    <div class="row">
        <div class=" left-activity col-md-3">
          <div class="nav-side-menu">
              <div class="brand">Meet Up For Fun</div>
              <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
              <div class="menu-list">
                  <ul id="menu-content" class="menu-content collapse out">
                      <li>
                          <a href="#">
                              <i class="fa fa-bars fa-lg"></i> Activities
                          </a>
                      </li>
                      <li data-toggle="collapse" data-target="#products" class="collapsed active">
                          <a href="#"><i class="fa fa-futbol-o fa-lg"></i> Football <span class="arrow"></span></a>
                      </li>
                      <ul class="sub-menu collapse" id="products">
                          <li class="active"><a href="#">Scheduled Activities</a></li>
                          <li><a href="#" class="click-table" onclick="myFunction()">Create  An Activity</a></li>
                          <li><a href="#">Stories</a></li>
                          <li><a href="#">Post a Story</a></li>
                          
                      </ul>
                      <li data-toggle="collapse" data-target="#service" class="collapsed">
                          <a href="#"><i class="fa fa-dribbble fa-lg"></i> Basketball <span class="arrow"></span></a>
                      </li>
                      <ul class="sub-menu collapse" id="service">
                           <li class="active"><a href="#">Scheduled Activities</a></li>
                          <li><a href="#" onclick="myFunction()">Create An Activity</a></li>
                          <li><a href="#">Stories</a></li>
                          <li><a href="#">Post a Story</a></li>
                      </ul>


                      <li data-toggle="collapse" data-target="#new" class="collapsed">
                          <a href="#"><i class="fa fa-bicycle fa-lg"></i> Cycling <span class="arrow"></span></a>
                      </li>
                      <ul class="sub-menu collapse" id="new">
                          <li class="active"><a href="#">Scheduled Activities</a></li>
                          <li><a href="#" onclick="myFunction()">Create  An Activity</a></li>
                          <li><a href="#">Stories</a></li>
                          <li><a href="#">Post a Story</a></li>
                      </ul>

                      <li data-toggle="collapse" data-target="#running" class="collapsed">
                          <a href="#"><i class="fa fa-child fa-lg"></i> Running <span class="arrow"></span></a>
                      </li>
                      <ul class="sub-menu collapse" id="running">
                           <li class="active"><a href="#">Scheduled Activities</a></li>
                          <li><a href="#" onclick="myFunction()">Create An Activity</a></li>
                          <li><a href="#">Stories</a></li>
                          <li><a href="#">Post a Story</a></li>
                      </ul>

                      <li data-toggle="collapse" data-target="#hockey" class="collapsed">
                          <a href="#"><i class="fa fa-legal fa-lg"></i> Hockey <span class="arrow"></span></a>
                      </li>
                      <ul class="sub-menu collapse" id="hockey">
                           <li class="active"><a href="#">Scheduled Activities</a></li>
                          <li><a href="#" onclick="myFunction()">Create  An Activity</a></li>
                          <li><a href="#">Stories</a></li>
                          <li><a href="#">Post a Story</a></li>
                      </ul>

                      <li data-toggle="collapse" data-target="#bowling" class="collapsed">
                          <a href="#"><i class="fa fa-renren fa-lg"></i> Bowling <span class="arrow"></span></a>
                      </li>
                      <ul class="sub-menu collapse" id="bowling">
                           <li class="active"><a href="#">Scheduled Activities</a></li>
                          <li><a href="#" onclick="myFunction()">Create An Activity</a></li>
                          <li><a href="#">Stories</a></li>
                          <li><a href="#">Post a Story</a></li>
                      </ul>

                      <li>
                          <a href="#">
                              <i class="fa fa-info fa-lg"></i> Guide
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <i class="fa fa-database fa-lg"></i> Sport fields data
                          </a>
                      </li>
                  </ul>
              </div>
          </div>

        </div>
        <div class="right-activity col-md-9">
          <div class="row">
                <div class="jumbotron">
                    <h2>Our Story</h2>
                    <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
                </div>
                <!--carousel-->
                
                    <h2>Meet Up For Fun</h2>


                    <!-- thumb navigation carousel -->
                    <!-- main slider carousel -->
                    
                        <div class="col-md-9" id="slider">

                            <div class="col-md-9" id="carousel-bounding-box">
                                <div id="myCarousel" class="carousel slide">
                                    <!-- main slider carousel items -->
                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="0">
                                            <img src="http://placehold.it/800x480&amp;text=one" class="img-responsive">
                                        </div>
                                        <div class="item" data-slide-number="1">
                                            <img src="http://placehold.it/800x480/888/FFF" class="img-responsive">
                                        </div>
                                        <div class="item" data-slide-number="2">
                                            <img src="http://placehold.it/800x480&amp;text=three" class="img-responsive">
                                        </div>
                                        <div class="item" data-slide-number="3">
                                            <img src="http://placehold.it/800x480&amp;text=four" class="img-responsive">
                                        </div>
                                        <div class="item" data-slide-number="4">
                                            <img src="http://placehold.it/800x480&amp;text=five" class="img-responsive">
                                        </div>
                                        <div class="item" data-slide-number="5">
                                            <img src="http://placehold.it/800x480&amp;text=six" class="img-responsive">
                                        </div>
                                        <div class="item" data-slide-number="6">
                                            <img src="http://placehold.it/800x480&amp;text=seven" class="img-responsive">
                                        </div>
                                        <div class="item" data-slide-number="7">
                                            <img src="http://placehold.it/800x480&amp;text=eight" class="img-responsive">
                                        </div>
                                    </div>
                                    <a class="carousel-control left" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-arrow-left"></i></a>
                                    <a class="carousel-control right" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-arrow-right"></i></a>
                                </div>
                            </div>

                        </div>
                    
                    <!--/main slider carousel-->

                
                <!--/carousel-->
                <div class="col-sm-6 col-lg-6">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                        </p>
                    <p><a class="btn btn-default" href="#">View details</a></p>
                </div>
                <!--/span-->
                <div class="col-sm-6 col-lg-6">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                        </p>
                    <p><a class="btn btn-default" href="#">View details</a></p>
                </div>
                <!--/span-->
                <div class="col-sm-6 col-lg-4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                        </p>
                    <p><a class="btn btn-default" href="#">View details</a></p>
                </div>
                <!--/span-->
                <div class="col-sm-6 col-lg-4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                        </p>
                    <p><a class="btn btn-default" href="#">View details</a></p>
                </div>
                <!--/span-->
                <div class="col-sm-6 col-lg-4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                        </p>
                    <p><a class="btn btn-default" href="#">View details</a></p>
                </div>
                <!--/span-->
            </div>
          </div>
          
        </div>
<!--form-->
         <div id="create-table" style="display: none;">
            <form action="events/createTable" method="post" name="create-activity">

                <table cellpadding="2" width="20%" bgcolor="99FFFF" align="center"
                cellspacing="2">

                  <tr>
                  <td colspan=2>
                  <center><font size=4><b>Create Activity Form</b></font></center>
                  </td>
                  </tr>
                  <tr>
                  <td>Type Of Activity</td>
                  <td><select name="taskOption">
                  <option value="-1" selected>Select activity</option>
                  <option value="football">Football</option>
                  <option value="basketball">Basketball</option>
                  <option value="running">Running</option>
                  <option value="cycling">Cycling</option>
                  <option value="hockey">Hockey</option>
                  <option value="bowling">Bowling</option>
                  </select></td>
                  </tr>
                 

                  <tr>
                  <td>Title</td>
                  <td><input type=text name=title_name id="titlename" size="30"></td>
                  </tr>
                  <tr>
                  <td>Start Date</td>
                  <td><input type="date" data-date-inline-picker="true" name="date" /></td>
                  </tr>
                  <tr>
                  <td>Start Time</td>
                  <td><input type="time" time-time-inline-picker="true" name="start_time" /></td>
                  </tr>
                  <tr>
                  <td>End Time</td>
                  <td><input type="time" time-time-inline-picker="true" name="end_time" /></td>
                  </tr>
                  <tr>
                  <td>Meeting address</td>
                  <td><input type="text" name="meeting_address" id="place" size="30"></td>
                  </tr>
                  <tr>
                  <td>Postcode</td>
                  <td><input type="text" name="post_code" id="post-code" size="30"></td>
                  </tr>
                  <tr>
                  <td>Description</td>
                  <td><textarea name="description" id="personaladdress" rows="2" cols="40">Description here...</textarea>
                  </td>
                  </tr>
                  <br>
                  <tr>         
                  <td colspan="2"><input type="submit" name="createActivitySubmit" value="Submit Form" /></td>
                  </tr>
                </table>
                 
            </form>
      
        </div>
        <!--/form-->

</div>
<!-- side -Bar -->

<!-- /side -Bar -->

<!-- footer -->
 <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2017 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Meet Up For Fun</a>.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
<!-- /footer -->


<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>assets/js/carousel.js"></script>
<script src="<?php echo base_url(); ?>assets/js/create.js"></script>

</body>
</html>