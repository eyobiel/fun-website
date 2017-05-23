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
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/stories.css" type="text/css">

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
        
        <div class="container-fluid right-activity col-md-9">
            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <h2>Stories</h2>
                        <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
                    </div>
                    <div class="col-md-9">
                        <form role="form">
                            <div class="form-group">
                              <label for="exampleInputEmail1"></label>
                              <textarea class="textarea text-area-story" name="post_content" placeholder="Title of your story" rows="1" cols="100%"></textarea>
                            </div>
                            <div class="form-group">
                               <label for="exampleInputFile"></label>
                               <textarea class="textarea text-area-story" name="post_content" placeholder="Write your story..." rows="5" cols="100%"></textarea>
                            </div>
                            
                            <div class="element">
                                <i class="fa fa-camera"></i><span class="name"></span>
                                <input type="file" name="" id="" style="display: none;">
                            </div>                            
                            <button type="submit" class="btn btn-default button-story-post">Post</button>
                        </form>
                        <br>
                        
                    </div>
                </div>
                
            <!--post and comment-->
                <div class="col-md-12 stories-story-box">
                    <hr>
                    <h2>Hello Rotterdam</h2>
                    <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in </p>
                    <p>Posted by John</p>
                    <p>10/05/2017</p>
                    <button class="btn btn-link" onclick="myFunction()">Hide/Unhide comments</button>
                    
                    <br>
                    <div class="container-fluid" id="stories-comment-box" style="display: none;">
                        <div class="row">
                            <div class="col-lg-10 comment-box">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a</p>
                                <p>Commented by Ryan</p>
                                <p>20/06/2017</p>
                                
                            </div>
                             <div class="col-lg-10 comment-box">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a</p>
                                <p>Commented by Ryan</p>
                                <p>20/06/2017</p>
                                
                            </div>
                            
                        </div>
                    </div>
                    <form role="form" class="form-inline">                                    
                        <div class="form-group">
                            <label for="exampleInputFile"></label>
                            <textarea class="textarea text-area-story" name="post_content" placeholder="Write a comment..." rows="1" cols="110%"></textarea>
                            
                        </div>
                        <button type="submit" class="btn btn-default form-comment-button" >Comment</button>
                    </form>
                </div>
                <div class="col-md-12 stories-story-box">
                    <hr>
                    <h2>Cycling Erasmus</h2>
                    <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in </p>
                    <p>Posted by Jan</p>
                    <p>10/05/2017</p>
                    <button class="btn btn-link" onclick="myFunction()">Hide/Unhide comments</button>

                    <br>
                    <div class="container-fluid" id="stories-comment-box" style="display: none;">
                        <div class="row">
                            <div class="col-lg-10 comment-box">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a</p>
                                <p>Commented by Ryan</p>
                                <p>20/06/2017</p>

                            </div>
                             <div class="col-lg-10 comment-box">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a</p>
                                <p>Commented by Ryan</p>
                                <p>20/06/2017</p>

                            </div>

                        </div>
                    </div>
                    <form role="form" class="form-inline">                                    
                        <div class="form-group">
                            <label for="exampleInputFile"></label>
                            <textarea class="textarea text-area-story" name="post_content" placeholder="Write a comment..." rows="1" cols="110%"></textarea>

                        </div>
                        <button type="submit" class="btn btn-default form-comment-button" >Comment</button>
                    </form>
                </div>
            <!--/post and comment-->
            </div>          
        </div>
<!--form-->
         
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/carousel.js"></script>
<script src="<?php echo base_url(); ?>assets/js/create.js"></script>
<script src="<?php echo base_url(); ?>assets/js/stories.js"></script>

</body>
</html>

