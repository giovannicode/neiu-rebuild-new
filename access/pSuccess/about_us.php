<?php

$root = $_SERVER['DOCUMENT_ROOT'];
include($root . '/includes/banner.html');
include($root . '/includes/mainNavigation.html');
include($root . '/access/pSuccess/includes/departmentBanner.html');
include($root . '/access/pSuccess/includes/sidebar.html');
?>



     <!--**************************************************************************************
 
                               MAIN CONTENT
 
     ***************************************************************************************-->

     <!--AAA__MAINCONTENT START-->
     <div class="departmentMainContent">
      
        <!--BBB_SUBPAGEBANNER_ START-->     
	    <div class="subPageBanner">
	        
	        <!--CCC_LANDINDPAGEHEADER START-->
	        <h2 class="departmentPageHeader">About Us</h2>
	        <!--CCC_LANDINDPAGEHEADER END-->
	        
	     
	     </div>
	     <!--BBB__SUBPAGEBANNER_ END--> 
        
        <span width="500px" height="1px" style="border-bottom: 2px solid #00437a; display: block; clear: both; margin-top: 40px;"></span>
        <span width="300px" height="1px" style="border-bottom: 2px solid #fdb900; display: block; clear: both; margin-top: 5px;"></span>
     
        <!--BBB__SUBPAGECONTENT START-->
        <div class="subPageContent">
        
        <h4>Our Mission</h4>
        
        <p>
        Established at Northeastern Illinois University in 1968, Project Success is a recruitment and educational services program that 
        has historically and continues to serve African-American and first generation college students who demonstrate academic potential, 
        but do not meet general university admissions requirements.
        </p>
        
        <p class="listing">The program is committed to:</p>
        
        <ul class="listingBullet">
           <li>Support and monitor a student's first two years at NEIU by assisting them in defining and then accomplishing their personal academic goals.</li>
           
           <li>Maximize student participants' potential to benefit from the academic experience and university environment.</li>
           
       </ul>
       
       <p>
       Our staff provides participants with one on one help in an effort to improve their preparedness toward declaration of a major and overall degree completion.
       </p>
               
         
         </div>
        <!--AAA_SUBPAGECONTENT END -->
    
     </div>
     <!--AAA__MAINCONTENT END-->
     
      </div>
      
      <?php
include($root . '/includes/footer.html');
?>