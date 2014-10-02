<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Student Affairs</title>

<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'/>

<link rel="shortcut icon" href="/images/favicon.ico"/>

<link rel="stylesheet" type="text/css" href="/css/main.css"/>
<link rel="stylesheet" type="text/css" href="/css/horinavLayout.css"/>
<link rel="stylesheet" type="text/css" href="/css/horinavDesign.css"/>

<link rel="stylesheet" type="text/css" href="/css/slideshow.css"/>
<link rel="stylesheet" type="text/css" href="/css/radi.css"/>

<link rel="stylesheet" type="text/css" href="/css/landingPage.css"/>
<link rel="stylesheet" type="text/css" href="/css/departmentPage.css"/>
<link rel="stylesheet" href="/css/imageCover.css" type="text/css"/>

<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script src="/js/stuLifeJS.js" type="text/javascript"></script>
<script src="/js/slideshowController.js" type="text/javascript"></script>

</head>
<body>

<script type="text/javascript">
var secondSlide = false;
var secondSlideb = false;

	window.onload = function()
	{
		if(typeof sliCon == 'function')
		{
			$("input[name='myRadio']").change(sliCon);
			$("input[name='myRadio']").attr('disabled', 'disabled');
			
			var start;
			var end;

			getAllDivs();
		}
	  
	    linkHandler();
	}
</script>
 
 <!--**************************************************************************************
 
                               TOP MOST DIV
 
 ***************************************************************************************-->
 <!--AAA TOPMOSTDIV START-->
<!-- <div id="topMostDiv">
 
 <div>
   <ul>
    <li><a href="#">N E I U &nbsp;&nbsp;H O M E</a></li>
    <li><a href="#">C U R R E N T &nbsp;&nbsp;S T U D E N T S</a></li>
   </ul>
   <div id="searchBox">
     <form>
       <input type="text" size="22" value="SEARCH"/>
       <input type="submit" value="GO" id="searchSubmit"/>
     </form>
   </div>
 </div>
 
 </div>
 
 -->
 <!--AAA_TOPMOSTDIV END-->
 
 
 <!--******************************************************************************************
 
                            PAGE'S MAIN ORGANIZERS
                                
                                   **************NOTES*****************
                                   1."mainContainer" div tag encapsulates everything except "topMostDiv" div tag;
                                   2."marginer" div tag ends after "mainContent" div tag.
 
 ********************************************************************************************-->
 <div id="superDiv">
 
 <!-- MAINCONTAINER START-->
  <div id="mainContainer">
  
  <!-- MARGINER_1 -->
  <div id="marginer1">
  
     <!--**************************************************************************************
 
                                        BANNER
 
     ***************************************************************************************-->
     <!-- AAA__BANNER START-->
     <div id="banner">
     
        <a href="/index.php"><img alt="neiu logo" src="/images/division-of-student-affairs-header.jpg" width="975"/></a>
     
     </div>
     <!--AAA__BANNER END-->
       <!--**************************************************************************************
 
                               HORIZONTAL NAVIGATION
 
     ***************************************************************************************-->
  
     <!-- AAA__HORIZONTAL NAVIGATION-->
     <div id="horinav">
      
      <ul>
       
       <li id="accessNav"><a href="/access/index.php">ACCESS, TRANSITION<br>AND SUCCESS</a><ul> 
                                                                             <li><a href="/access/LSC/index.php">Learning Support<br>Center</a></li>
                                                                             <li><a href="/access/NSFP/index.php">New Student and<br>Family Programs</a></li>
                                                                             <li><a href="/access/pSuccess/index.php">Project<br>Success</a></li>
                                                                             <li><a href="/access/pPalante/index.php">Proyecto<br>Pa'Lante</a></li>
                                                                           </ul></li>
       <li id="diversityNav"><a href="/diversity/index.php">DIVERSITY AND<br> INTERCULTURAL AFFAIRS</a><ul>
                                                                   <li><a href="http://www.neiu.edu/~cdia/African_American_Resource_Center.html" target="_blank">African/African American<br>Resource Center</a></li>
                                                                   <li><a href="http://www.neiu.edu/~cdia/Asian_American_2012.html" target="_blank">Asian/Global<br>Resource Center</a></li>
                                                                   <li><a href="http://www.neiu.edu/~cdia/Latino_Resource_Center.html" target="_blank">Latino<br>Resource Center</a></li>
                                                                   <li><a href="http://www.neiu.edu/~cdia/LGBTQ_Resource_Center.html" target="_blank">LGBTQA<br>Resource Center</a></li>
                                                                   <li><a href="http://www.neiu.edu/~cdia/Womens_Resource_Center.html" target="_blank">Women's<br>Resource Center</a></li>
                                                                 </ul></li>
       <li id="involvementNav"><a href="/involvement/index.php">STUDENT<br>INVOLVEMENT</a><ul>
                                                   <li><a href="http://www.neiu.edu/~campsrec/" target="_blank">Campus<br>Recreation</a></li>
                                                   <li><a href="http://www.neiu.edu/~sld/" target="_blank">Student Leadership<br>Development</a></li>
                                                   <li><a href="http://www.neiu.edu/NEIU%20Departments/Administrative%20Departments/suecs/SUECS.html" target="_blank">Student Union, Event<br>and Conference Services</a></li>
                                                 </ul></li>
       <li id="servicesNav"><a href="/services/index.php">STUDENT<br>SERVICES</a><ul>
                                                 <li><a href="/services/index.php">Academic and<br>Career Advising</a></li>
                                                 <li><a href="/services/SDS/index.php">Student Disability<br>Services</a></li>
                                                 <li><a href="/services/SHCS/index.php">Student Health and<br>Counseling Services</a></li>
                                                 <li><a href="/services/SRR/index.php">Student Rights and Responsibilities</a></li>                                        
                                                 <li><a href="http://www.neiu.edu/~triosss/" target="_blank">TRIO Student<br>Support Services</a></li>
                                               </ul></li>
       <li id="vpNav"><a href="/vp/index.php">OFFICE OF<br>THE VP</a><ul>
                                                        <li><a href="/vp/about_us.php">About<br>Us</a></li>
                                                        <li><a href="/vp/news.php">News<br></a></li>
                                                        <li><a href="/vp/communications.php">Communications and Student Media</a></li>
                                                         <li><a href="/vp/special_projects/index.php">Special<br>Projects</a></li>
                                                </ul></li>
      </ul>
     
     </div>
     <!--AAA__HORIZONTAL NAVIGATION-->
     <!--**************************************************************************************
 
                                   SLIDESHOW
 
     ***************************************************************************************-->
     <!--AAA_STATIC BOX START-->
     <div class="departmentShow">
     
        <!--BBB_CLUSTERBOX START-->
        <div class="departmentBox">
           
           <h1 class="departmentHeading"><span>Communications</span><br>
              </h1>
           
           <img class="clusterSquig" src="/images/clusterSquig.png" alt="squig"/>
           
        </div>
        <!--BBB_CLUSTERBOX END -->
        
        <!--BBB_CLUSTERIMAGE START-->
        <div class="departmentImage">
          <img src="/vp/images/dept banner feature_communications.jpg"/>
        </div>
        <!--BBB_CLUSTERIMAGE END-->
     
     
     </div>
     <!--AAA_STATIC BOX END-->
     
     </div>
     <!-- MARGINER 1 END -->
     
          
     <!--marginer_2-->
     <div id="marginer2">
     
     <!--AAA__SIDEBAR START-->
     <div id="sidebar" >
        
        <!--BBB__OPTIONALHEADER START-->
        <div id="optionalHeader">
           <!--<p>enhance student affairs with <span>your</span> brilliance</p>
           <img src="http://placehold.it/250x35" alt="idea button"/>
           <p>send your thoughts directly to the vp</p>
           <div id="imageMore">
             <img src="http://placehold.it/250x35" alt="design image"/><p>more...</p>
           </div>-->
           <div class="smallImage">
              <img src="/images/blue_squig_227.png" alt="blue squig line"/>
           </div>
           <div id="ideaBtn">
              <a href="#"><img src="/images/good_idea_button.png" alt=""/></a>
           </div>
        </div>
        <!--BBB__OPTIONALHEADER END-->
        
        <!--BBB__SECONDARYNAV START-->
        <div id="secondaryNav">
          <ul>
            <li class="top"><img src="/images/saThumb_services.jpg" alt=""/><a href="/vp/index.php">DEPARTMENT HOME</a></li>
            <li><img src="/images/saThumb_6.jpg" alt=""/><a href="/vp/about_us.php">ABOUT US</a></li>
            <li><img src="/images/saThumb_8.jpg" alt=""/><a href="/vp/programs.php">PROGRAMS AND SERVICES</a></li>
            <li><img src="/images/saThumb_7.jpg" alt=""/><a href="/vp/news.php">NEWS</a></li>
            <li><img src="/images/saThumb_access.jpg" alt=""/><a href="/vp/communications.php">COMMUNICATIONS</a></li>
            <li><img src="/images/saThumb_diversity.jpg" alt=""/><a href="/vp/SRR/">STUDENT RIGHTS &amp; RESPONSIBILITIES</a></li>
            <li><img src="/images/saThumb_involvement.jpg" alt=""/><a href="/vp/special_projects/index.php">SPECIAL PROJECTS</a></li>
          </ul>
        </div>
        <!--BBB__SECONDARYNAV END-->
        
        <a href="#"><img id="sideImg1" src="/images/faq.png"/></a>
        <a href="#"><img id="sideImg2" src="/images/stuAffPDF.png"/></a>
        
     </div>
     <!--**************************************************************************************
 
                               MAIN CONTENT
 
     ***************************************************************************************-->

     <!--AAA__MAINCONTENT START-->
     <div class="departmentMainContent">
 
   
      
        <!--BBB_SUBPAGEBANNER_ START-->     
	    <div class="subPageBanner">
	        
	        <!--CCC_LANDINDPAGEHEADER START-->
	        <h2 class="departmentPageHeader">Communications</h2>
	        <!--CCC_LANDINDPAGEHEADER END-->
	        
	     
	     </div>
	     <!--BBB__SUBPAGEBANNER_ END--> 
        
        <span width="500px" height="1px" style="border-bottom: 2px solid #00437a; display: block; clear: both; margin-top: 40px;"></span>
        <span width="300px" height="1px" style="border-bottom: 2px solid #fdb900; display: block; clear: both; margin-top: 5px;"></span>
     
        <!--BBB__SUBPAGECONTENT START-->
        <div class="subPageContent">
        
        <p>
        The Student Affairs Communications Team is here to help Student Affairs departments promote events, programs, and services to students, 
        faculty, and staff. Student Affairs Communications facilitates communications within the Division of Student Affairs through the web site, 
        NEIUport, and other venues, and assists with promoting programs and developing publications for the division.
        </p>
        
        <hr class="mainContentDivider">
        
        <h3>Project Requests (including Targeted Announcements)</h3>
        
        <p>
        Please fill out the <a href="/vp/communications_request_form.php">Communications Request Form</a> to begin the process. Our team will be in touch with you soon to discuss your promotional needs. 
        For requests of materials that will be used for marketing externally, off-campus or outside the university community, please contact Marketing 
        at 773-509-5627 or fill out their Marketing Project Request Form.
        </p>
        
        <p>
        Please send requests AT LEAST 10 business days before the due date. We will do our best to fulfill urgent requests, but due to volume of requests, we 
        cannot guarantee they will all be accommodated.
        </p>
        
        <p>
        This online form includes a targeted announcement and web section, and replaces the Targeted Announcement (TA) form and Web Page Revision 
        Request form. Refer to the Targeted Announcement guidelines and Web Revision guidelines for more information.
        </p>
        
        <p>
        Requests must be submitted by the sponsoring office's Director or their designee, or by your student organization's officer. 
        If additional content approvals are required within your area, you must include their contact info. For questions about this 
        form please contact SAComm@neiu.edu. Thank you!
        </p>
        
        <hr class="mainContentDivider">
        
        <h3>Division-Wide Announcements</h3>
        
        <p>
        If you are promoting a division-wide event (for Student Affairs staff only), please use the Student Affairs Staff group in NEIUport. Any staff member can 
        send an email to select or all Student Affairs staff via the group in NEIUport. To do so, log into NEIUPort and click on Groups in the upper right corner. 
        Access the SA Staff group and click on Email. There is also a document describing how to send email via the group in the group files. This group should only be 
        used for announcement of important events/information for Student Affairs staff.
        </p>
        
        <p>
        To check if you are a member of the group, log into NEIUPort and click on Groups in the upper right corner. A "My Groups" window will pop up. 
        "Student Affairs Staff" should appear within the list of groups. If you are a staff member in Student Affairs, but are not a member of the NEIUport 
        group, please contact us at sacomm@neiu.edu.
        </p>
        
        <hr class="mainContentDivider">
        
        <h3>Web Page Requests</h3>
        
        <p>
        For those of you who would like help, the Communications team is available to assist you with updating and enhancing your web pages. Please note that 
        we are in the midst of a transitional redesign of the Student Affairs web pages. The initial phase of this project is expected to be completed in the next 
        month or two. The university is also working on revamping the main university web site, and our division will embark on the initial phases of that in March 
        2013, with expected completion in March 2014.
        </p>
        
        <p class="listing">Guidelines</p>
        <ul class="listingBullet">
           <li>Please fill out and submit the web page section of the <a href="/vp/communications_request_form.php">Communications Request Form</a>. Upload any copy as an attachment in Word or HTML format.</li>
           <li>How to submit revisions in Word: Indicate the URL for the web page you want updated. Cut and paste the content from the web page into Word. Turn on Track Changes and make the revisions. Save the document and upload or email it to us.</li>
           <li>If you want a document uploaded to the web site, provide the document in the appropriate format (upload or send to sacomm@neiu.edu via email attachment). If sending PDFs, please also send the originating document (i.e., in Word).</li>
           <li>Project time frames:</li> <ul class="listingBullet2"><li>Web Page Update (minor content updates): 10 days</li><li>Add New Page/Content (provided by department): 4 weeks</li></ul>
           <li>For more complex projects, please fill out the form, upload any content/text revisions as noted above, and give a description of your project. Also let us know when you will be available to meet and discuss the project in more detail.</li>
           <li>Requests will be prioritized by the Communications Team based on key factors (i.e., time sensitivity, importance to students).</li>
        </ul>
        
        <p>
        We look forward to working with you to promote your events and programs/services.
        </p>
        
        <h4>Staff</h4>
        
        <p class="staffSignature">
			 <span class="staffName">Tasha Neumeister</span><br>
			 <span class="staffTitle">Director</span><br>
			 <span class="staffPhone">ext. 4528</span><br>
			 <span class="staffEmail">t-neumeister@neiu.edu</span><br>
			 </p>
			 
		<p class="staffSignature">
			 <span class="staffName">Jason Demma</span><br>
			 <span class="staffTitle">Visual and Creative Specialist</span><br>
			 <span class="staffPhone">ext. 4747</span><br>
			 <span class="staffEmail">j-demma@neiu.edu</span><br>
			 </p>
			 
		<p class="staffSignature">
			 <span class="staffName">Kerri A. Kadow</span><br>
			 <span class="staffTitle">Communications Manager</span><br>
			 <span class="staffPhone">ext. 4518</span><br>
			 <span class="staffEmail">k-kadow@neiu.edu</span><br>
			 </p>
        
        
        
     
        </div>
        <!--AAA_SUBPAGECONTENT END -->
    
     </div>
     <!--AAA__MAINCONTENT END-->
     
      </div>
     <!-- marginerD -->


     

    <!--**************************************************************************************
 
                                     FOOTER
 
     ***************************************************************************************--> 
     <!--AAA__FOOTER START-->
     <div id="footer">
        
        <!--BBB__SUBFOOTER1 START-->
        <div id="subfooter1">
        
          <!--CCC__COLUMN1 START-->
          <div id="column1">
          
          
             <h2>NEIU QUICK LINKS</h2>
            <ul>
            <li><a href="http://www.neiu.edu/Home/">BACK TO NEIU MAIN PAGE</a></li>
              <li><a href="https://neiuport.neiu.edu/cp/home/displaylogin">NEIUPORT</a></li>
              <li><a href="http://neiu.blackboard.com/webapps/login/">BLACKBOARD</a></li>
              <li><a target="_blank" href="http://library.neiu.edu">RONALD WILLIAMS LIBRARY</a></li>  
              <!-- <li><a href="#">FACULTY</a></li>-->
              <!--<li><a href="#">ALUMNI AND FRIENDS</a></li>-->
              
              
             <!--DDD__SOCIALBAR START-->
             <!-- <div id="socialBar">
               
               
               <div id="socialLinks">
               <img src="./images/twitter.png" width="20" alt="design image"/>
               <img src="./images/facebook.png" width="20" alt="design image"/>
               <img src="./images/youtube.png" width="20" alt="design image"/>
               <img src="./images/foursquare-1.png" width="20" alt="design image"/>
               <img src="./images/linkedin.png" width="20" alt="design image"/>
               </div>
             
             </div>
             DDD__SOCIALBAR END
               
               <p>
               Visit us all over the interwebs and like, share,<br>
               tweet, check-in and post all over the place.<br>
               We're out there, we know you're there too,<br>
               so we might as well use it.<br>
               </p>-->
               
              
            

            </ul>   
          
          </div>
          <!--CCC__COLUMN1 END-->
          
          <!--CCC__COLUMN2 START-->
          <div id="column2">  
          
          <h2>STUDENT LINKS</h2>  
             <ul>
             <li><a target="_blank" href="http://www.neiu.edu/About%20NEIU/Campus%20Locations/El%20Centro/Calendar%20of%20Events/Calendar_of_Events.html">EVENTS CALENDAR</a></li>
             <li><a target="_blank" href="http://www.neiu.edu/~deptip/">STUDY ABROAD</a></li>
             <li><a target="_blank" href="http://www.neiu.edu/Employment/Employment_Opportunities.html">EMPLOYMENT OPPORTUNITIES</a></li>   
            </ul>        
          </div>
          <!--CCC__COLUMN2 END-->
          
          <!--CCC__COLUMN3 START-->
          <div id="column3">
            <h2>CONTACT INFORMATION</h2>
            <p>
            <span>Northeastern Illinois University</span><br>
            Division of Student Affairs<br>
            Sachs Admin Bldg C 324 <br/>
            (773) 442-4600 [phone]<br/>
            (773) 442-4605 [fax]<br>
            Student-Affairs@neiu.edu
            </p>    
          </div>
          <!--CCC__COLUMN3 END-->
          
        </div>
        <!--BBB__SUBFOOTER1 END-->
        
        <!--BBB__SUBFOOTER2 START-->
        <div id="subfooter2">
           
           <!--CCC__SAINFO1 START -->
           <div id="saInfo1">
           <ul>
             <li><a target="_blank" href="http://www.neiu.edu/Legal/Legal.html">Legal</a></li>
             <li><a target="_blank" href="http://www.neiu.edu/Contact%20Us/Contact_Us.html">Contact Us</a></li>
             <li><a target="_blank" href="http://www.neiu.edu/Home/index_txt.html">NEIU Home Text Version</a></li>
             <li class="last"><a target="_blank" href="http://www.elections.il.gov/">Voter Registration Forms</a></li>
           </ul>
           </div>
           <!--CCC__SAINFO1 END-->
           
           <!--CCC_SAINFO2 START-->
           <div id="saInfo2">
           <ul>
             <li>&copy;2011 Northeastern Illinois University</li>
             <li>5500 North St.Louis Avenue</li>
             <li>Chicago, Illinois 60625</li>
             <li class="last">773/583-4050</li>
           </ul>
           </div>
           <!--CCC__SAINFO END-->
           
           <!--CCC__TINYLOGO START-->
           <div id="tinyLogo">
             <img alt="neiu logo" src="/images/neiu_logo_white2.png"/>
           </div>
           <!--CCC__TINYLOGO END-->
        
        </div>
        <!--BBB__SUBFOOTER2 END-->
        
     </div>
     <!--AAA__FOOTER END-->
     
  </div>
  <!--MAINCONTAINER END-->
  
</div>
<script type="text/javascript">

$('#newsocialBar').css('height', $('#marginer2').css('height'));
</script>
</body>
</html>