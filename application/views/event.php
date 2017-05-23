<!DOCTYPE html>
<html lang="en">  
<head>
<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
</head>
<body>
<div class="container">
    <div id="create-table" style="display: block;">
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
    <?php 
   
       
    
    //var_dump($data);
    //die();
    ?>
</div>
</body>
</html>




