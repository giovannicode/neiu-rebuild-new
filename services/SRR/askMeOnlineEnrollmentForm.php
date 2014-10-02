<?php

$root = $_SERVER['DOCUMENT_ROOT'];
include($root . '/includes/banner.html');
include($root . '/includes/mainNavigation.html');
include($root . '/services/SRR/includes/departmentBanner.html');
include($root . '/services/SRR/includes/sidebar.html');
?>



     <!--**************************************************************************************
 
                               MAIN CONTENT
 
     ***************************************************************************************-->

     <!--AAA__MAINCONTENT START-->
     <div class="departmentMainContent">
      
        <!--BBB_SUBPAGEBANNER_ START-->     
	    <div class="subPageBanner">
	        
	        <!--CCC_LANDINDPAGEHEADER START-->
	        <h2 class="departmentPageHeader">Ask Me! Campaign</h2>
	        <!--CCC_LANDINDPAGEHEADER END-->
	        
	     </div>
	     <!--BBB__SUBPAGEBANNER_ END--> 
        
        <span width="500px" height="1px" style="border-bottom: 2px solid #00437a; display: block; clear: both; margin-top: 40px;"></span>
        <span width="300px" height="1px" style="border-bottom: 2px solid #fdb900; display: block; clear: both; margin-top: 5px;"></span>
     
        <!--BBB__SUBPAGECONTENT START-->
        <div class="subPageContent">
        
        <h3>Ask Me! Online Enrollment</h3>

<p class="lead">I want to be part of the ASK ME! Campaign</p> 
<p><span style="color:red;">*</span> indicates required field </p>
<form action="http://www.neiu.edu/~neiutemp/cgi-bin/FormMail4.cgi" method="get">

<!--<input type="hidden" name="recipient" value="a-carlsen@neiu.edu"> -->
<input name="recipient" type="hidden" value="a-mcconnell@neiu.edu"> 
<input name="subject" type="hidden" value="ASK ME Registration Form"> 
<input name="required" type="hidden" value="First Name,Last Name,Department,Office Location,Phone Ext,Email Address,Role At University"> 
<input name="print_blank_fields" type="hidden" value="1"> 
<input name="sort" type="hidden" value="order:First Name,Last Name,Department,Office Location,Phone Ext,Email Address,Number of Buttons,Number of Signs,Volunteer Services,Request Materials, Materials for Individual,Role At University"> 
<input name="redirect" type="hidden" value="http://www.neiu.edu/~deanstu/askMeThankYou.html"> 

<b>First Name:<font color="#FF0000">*</font></b><br>
<input name="First Name" size="50"><br><br><b>Last Name:<font color="#FF0000">*
</font></b><br>
<input name="Last Name" size="50"><br><br><b>Email Address:<font color="#FF0000">*</font></b><br>
<input name="Email Address" size="50"><br><br><b>Department:<font color="#FF0000">*</font></b> <br>
<input name="Department" size="50"><br><br><b>Office Location:<font color="#FF0000">*</font></b><br>
<input name="Office Location" size="50"><br><br><b>Phone Ext:<font color="#FF0000">*</font></b><br>
<input name="Phone Ext" size="6"><br><br><b>Number of ASK ME! Buttons:</b><br>
<input name="Number of Buttons" size="6"><br><br><b>Number of Office Signs:</b><br>
<input name="Number of Signs" size="6"><br><br><input name="Volunteer Services" type="checkbox" value="I wish to volunteer my services at the ASK ME! Table to serve as an NEIU ASK ME! Ambassador.  Please contact me with more details">&nbsp;<b>I wish to volunteer my services at the ASK ME! Table to serve as an NEIU ASK ME! Ambassador. Please contact me with more detail.</b><br><br><input name="Request Materials" type="checkbox" value="I am requesting materials for the entire department.  I will serve as contact person, distribute materials, and encourage participation in the campaign to my unit's faculty, staff, students."> <b>I am requesting materials for the entire department. I will serve as contact person, distribute materials, and encourage participation in the campaign to my unit's faculty, staff, and students.</b><br><br><input name="Materials for Individual" type="checkbox" value="I am requesting materials as an individual."> <b>I am requesting materials as an individual.</b><br><br><b>Role At University:<font color="#FF0000">*</font></b><br>

<input name="Role At University" type="checkbox" value="Faculty"><b>Faculty</b>&nbsp;&nbsp;&nbsp;&nbsp; 
<input name="Role At University" type="checkbox" value="Staff"><b>Staff</b>&nbsp;&nbsp;&nbsp;&nbsp; 
<input name="Role At University" type="checkbox" value="Student"><b>Student</b>&nbsp;&nbsp;&nbsp;&nbsp; <br><br><br>

<input name="Submit" type="submit" value="Submit"> 
</form>
        

            
         
         </div>
        <!--AAA_SUBPAGECONTENT END -->
    
     </div>
     <!--AAA__MAINCONTENT END-->
     
      </div>
     <!-- marginerD -->

<?php

include($root . '/includes/footer.html');

?>