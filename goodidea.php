<?php

$root = $_SERVER['DOCUMENT_ROOT'];
include($root . '/includes/banner.html');
include($root . '/includes/mainNavigation.html');
include($root . '/includes/slideshow.html');
include($root . '/vp/includes/sidebar.html');
?>

     <!--**************************************************************************************
 
                               MAIN CONTENT
 
     ***************************************************************************************-->

     <!--AAA__MAINCONTENT START-->
     <div class="departmentMainContent">
      
        <!--BBB_SUBPAGEBANNER_ START-->     
	    <div class="subPageBanner">
	        
	        <!--CCC_LANDINDPAGEHEADER START-->
	        <h2 class="departmentPageHeader">Send us your Good Idea!</h2>
	        <!--CCC_LANDINDPAGEHEADER END-->
	      
	     
	     </div>
	     <!--BBB__SUBPAGEBANNER_ END--> 
        
        <span width="500px" height="1px" style="border-bottom: 2px solid #00437a; display: block; clear: both; margin-top: 40px;"></span>
        <span width="300px" height="1px" style="border-bottom: 2px solid #fdb900; display: block; clear: both; margin-top: 5px;"></span>
        
        <!--BBB__SUBPAGECONTENT START-->
        <div class="subPageContent">

        
        <p>Do you have a good idea to enhance student life at Northeastern? Please share your idea with the Vice President for Student Affairs by filling out and submitting this form.</p> 
<p>* indicates required field </p>

<br/>


        
        
         <form action="http://www.neiu.edu/~neiutemp/cgi-bin/FormMail.cgi" method="get">
   <input type=hidden name="recipient" value="f-ross@neiu.edu"> <input name="required" type="hidden" value="Idea, Role">
     <input name="print_blank_fields" type="hidden" value="1"> <input type="hidden"
          name="sort" value="order:Role,Idea"><input name="subject" type="hidden" value="Good Idea"> <input type="hidden" name="redirect" value="http://www.neiu.edu/~saffairs/GoodIdeaThankYou.php">
<b>Please tell us your idea*:</b><br>
<textarea name="Idea" rows="5" cols="60" value="">
    </textarea>
<br><br>
<br><b>Please identify your primary role*:</b><br><input name="Role" type="radio" value="Student"><b>Student</b>&nbsp;&nbsp;&nbsp;&nbsp; <input name="Role" type="radio" value="Faculty"><b>Faculty</b>&nbsp;&nbsp;&nbsp;&nbsp; <input name="Role" type="radio" value="Staff"><b>Staff</b>&nbsp;&nbsp;&nbsp;&nbsp; <input name="Role" type="radio" value="Community Member"><b>Community Member</b>&nbsp;&nbsp;&nbsp;&nbsp; <br><br><input name="Submit" type="submit" value="Submit"> </form>
         
        

  
	          
	     </div>
	     <!--__SUBPAGECONTENT END -->
       
     </div>
     <!--AAA__MAINCONTENT END-->
     
     </div>
     <!-- marginerD -->


<?php

include($root . '/includes/footer.html');

?>