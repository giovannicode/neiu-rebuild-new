<?php

$root = $_SERVER['DOCUMENT_ROOT'];
include($root . '/includes/banner.html');
include($root . '/includes/mainNavigation.html');
include($root . '/access/pPalante/includes/departmentBanner.html');
include($root . '/access/pPalante/includes/sidebar.html');
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
        In September 1972, Proyecto Pa'Lante was established as an educational outreach program for the Latino 
        community, providing academic support services on campus. The program was created by Student Affairs for 
        Latino students with input from Puerto Rican and Chicano/Mexicano students who comprised the Union for
         Puerto Rican Students.
        </p>
        
        <p>
        Proyecto Pa'Lante dedicates its efforts to the development of leadership in the Latino community through 
        education. Proyecto Pa'Lante students are provided with personal and academic support services 
        designed to increase scholastic achievement and persistence towards graduation.
        </p>
        
        <p class="listing">The program is committed to:</p>
        
        <ul class="listingBullet">
           <li>recruiting primarily Latino students who demonstrate academic potential but do not meet standard 
           NEIU admission requirements. Additionally, Proyecto Pa'Lante also accepts students who do meet 
           standard admission requirements and who wish to receive our additional support services.</li>
           
           <li>providing support in the areas of academic advisement, tutoring, vocational, career, personal, and financial counseling.</li>
           
           <li>providing an environmental support system relevant to the development of a positive self-image and a feeling of belonging.</li>
       </ul>
               
         
         </div>
        <!--AAA_SUBPAGECONTENT END -->
    
     </div>
     <!--AAA__MAINCONTENT END-->
     
      </div>
      
      <?php
include($root . '/includes/footer.html');
?>