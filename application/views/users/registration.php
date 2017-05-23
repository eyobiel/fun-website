<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/register.css">

  
</head>

<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="registration" method="post">
          
          <div class="top-row">
            <div class="field-wrap form-group">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="first_name" required autocomplete="off" value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>" />

              <?php echo form_error('first_name','<span class="help-block">','</span>'); ?>

            </div>
        
            <div class="field-wrap form-group">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" name ="last_name" required autocomplete="off" value="<?php echo !empty($user['last_name'])?$user['last_name']:''; ?>" />

              <?php echo form_error('last_name','<span class="help-block">','</span>'); ?>

            </div>
          </div>
          <div class="field-wrap form-group">
            <label>
              Post Code<span class="req">*</span>
            </label>
            <input type="text" name ="post_code" required autocomplete="off" value="<?php echo !empty($user['post_code'])?$user['post_code']:''; ?>"/>

            <?php echo form_error('post_code','<span class="help-block">','</span>'); ?>

          </div>

          <div class="field-wrap form-group">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name ="email" required autocomplete="off" value="<?php echo !empty($user['email'])?$user['email']:''; ?>" />

            <?php echo form_error('email','<span class="help-block">','</span>'); ?>

          </div>
          
          <div class="field-wrap form-group">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>

             <?php echo form_error('password','<span class="help-block">','</span>'); ?>

          </div>

           <div class="field-wrap form-group">
            <label>
              Confirm Password<span class="req">*</span>
            </label>
            <input type="password" name="conf_password"  required autocomplete="off"/>
            
             <?php echo form_error('conf_password','<span class="help-block">','</span>'); ?>

          </div>
          
          <button type="submit" name="regisSubmit"class="button button-block" value="Submit" />Register</button>
          
          </form>
          <p class="footInfo">Already have an account? <a href="<?php echo base_url(); ?>users/login">Login here</a></p>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="login" method="post">
          
           <div class="field-wrap form-group">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name ="email" required autocomplete="off"/>

            <?php echo form_error('email','<span class="help-block">','</span>'); ?>

          </div>
          
           <div class="field-wrap form-group">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password"  required autocomplete="off"/>

             <?php echo form_error('password','<span class="help-block">','</span>'); ?>

          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          <button type="submit" name="loginSubmit"class="button button-block" value="Submit" />Log In</button>
          
          <p class="footInfo">Don't have an account? <a href="<?php echo base_url(); ?>users/registration">Register here</a></p>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="<?php echo base_url(); ?>assets/js/register.js"></script>

</body>
</html>
