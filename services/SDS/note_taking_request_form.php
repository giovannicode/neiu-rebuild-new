<?php

$root = $_SERVER['DOCUMENT_ROOT'];
include($root . '/includes/banner.html');
include($root . '/includes/mainNavigation.html');
include($root . '/services/SDS/includes/departmentBanner.html');
include($root . '/services/SDS/includes/sidebar.html');
?>



     <!--**************************************************************************************
 
                               MAIN CONTENT
 
     ***************************************************************************************-->

     <!--AAA__MAINCONTENT START-->
     <div class="departmentMainContent">
      
        <!--BBB_SUBPAGEBANNER_ START-->     
	    <div class="subPageBanner">
	        
	        <!--CCC_LANDINDPAGEHEADER START-->
	        <h2 class="departmentPageHeader">Note-Taking Request Form</h2>
	        <!--CCC_LANDINDPAGEHEADER END-->
	        

	     
	     </div>
	     <!--BBB__SUBPAGEBANNER_ END--> 
        
        <span width="500px" height="1px" style="border-bottom: 2px solid #00437a; display: block; clear: both; margin-top: 40px;"></span>
        <span width="300px" height="1px" style="border-bottom: 2px solid #fdb900; display: block; clear: both; margin-top: 5px;"></span>
     
        <!--BBB__SUBPAGECONTENT START-->
        <div class="subPageContent">
        
            <iframe src="https://docs.google.com/forms/d/1qx_HFbYOE3eFxLaTLFFmIoQmsad3hpaB4nOn1t-xjlQ/viewform?embedded=true" width="660" height="3500" frameborder="0" marginheight="0" marginwidth="0" target="_blank">Loading...</iframe>
            
                  
         </div>
        <!--AAA_SUBPAGECONTENT END -->
    
     </div>
     <!--AAA__MAINCONTENT END-->
     
      </div>
     <!-- marginerD -->

<?php

include($root . '/includes/footer.html');

?>