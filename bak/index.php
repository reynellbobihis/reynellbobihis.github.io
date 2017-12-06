<!DOCTYPE html>
<html>
<head>
	<title>HireReynell</title>
	<meta name="theme-color" content='#001725'/>
	<script type='text/javascript' src='js/custom.js'></script>
	<link rel="stylesheet" type="text/css" href="css/custom.css"/>
</head>
<body>
	<header>
		<div id='headerdiv'>
			<div id='headerlogodiv'><h3>REYNELL BOBIHIS</h3></div>
			<nav>
				<ul>
					<li id='headernavhome' onclick='autoscrollto("headerdiv");'>Home</li>
					<li id='headernavabout' onclick='autoscrollto("aboutsection");'>About</li>
					<li id='headernavcontact' onclick='autoscrollto("personalinfosection");'>Contact</li>
					<li id='headernavskills' onclick='autoscrollto("skillssection");'>Skills</li>
					<li id='headernavexperience' onclick='autoscrollto("experiencesection");'>Experience</li>
				</ul>
			</nav>
		</div>
	</header>
	<div id='jumbotron'>
		<h1 id='jumbotronh1'>I design<span class='jumbotrondotstyle'>.</span> I create<span class='jumbotrondotstyle'>.</span></h1>
		<button id='jumbotronbutton' onclick='autoscrollto("portfoliosectiondiv");'>View Portfolio</button>
	</div>
	<section id='aboutsection'>
		<div id='aboutsectiondiv'>
			<h2>Welcome to my website.</h2>
			<p>Hi! I am Reynell Cortiguierra Bobihis<br/>and I am a computer engineering student.<br/>I am a web developer.<br/>I also create graphic arts. <br/>Scroll down to know me more.</p>
		</div>
	</section>
	<section id='personalinfosection'>
		<div id='personalinfosectiondiv'>
			<h2 class='sectionheader'>Personal Information</h2>
			<div class='sectionasidediv'>
				<div class='sectionasideheader'>
					<h3>Contact<br/>Information</h3>
				</div>
				<aside class='sectionaside'>
					<div class='contactinfolabel'><span class='icon'>&#xf041;</span></div><p class='contactinfo'>Jose Abad Santos St., Sta. Mesa, Manila</p>
					<div class='contactinfolabel'><span class='icon'>&#xf0e0;</span></div><p class='contactinfo'>reynellbobihis&#64;gmail.com</p>
					<div class='contactinfolabel'><span class='icon'>&#xf095;</span></div><p class='contactinfo'>&#40;&#43;63&#41; 995 660 5955</p>
				</aside>
			</div>
			<div class='sectionasidediv'>
				<div class='sectionasideheader'>
					<h3>Scholastic<br/>Background</h3>
				</div>
				<aside id='scholasticbackgroundaside' class='sectionaside'>
					<p><span class='bold'>Polytechnic University of the Philippines &#40;Manila&#41;</span></p>
					<p>Computer Engineering</p>
					<p><em>2013 &ndash; Present</em></p>
				</aside>
			</div>
			<div class='sectionasidediv'>
				<div class='sectionasideheader'>
					<h3>More<br/>Information</h3>
				</div>
				<aside id='moreinfoaside' class='sectionaside'>
					<p><span class='bold'>Birthdate&#58; </span>December 20, 1996</p>
					<p><span class='bold'>Place of Birth&#58; </span>Taal, Batangas</p>
					<p><span class='bold'>Gender&#58; </span>Male</p>
					<p><span class='bold'>Civil Status&#58; </span>Single</p>
					<p><span class='bold'>Nationality&#58; </span>Filipino</p>
					<div class='asidewithicondiv'>	
						<p class='asidewithiconlabel'><span class='bold'>Social Media&#58; </span></p>
						<a href='http://www.facebook.com/reynellbobihis' target='_blank'><div class='socialmediaicondiv facebook'><span class='icon'>&#xf09a;</span></div></a>
						<a href='http://www.twitter.com/reynellbobihis' target='_blank'><div class='socialmediaicondiv twitter'><span class='icon'>&#xf099;</span></div></a>
						<a href='http://www.linkedin.com/in/reynellbobihis' target='_blank'><div class='socialmediaicondiv linkedin'><span class='icon'>&#xf0e1;</span></div></a>
						<a href='http://www.last.fm/user/reynellbobihis' target='_blank'><div class='socialmediaicondiv lastfm'><span class='icon'>&#xf202;</span></div></a>
						<a href='http://open.spotify.com/user/reynellbobihis' target='_blank'><div class='socialmediaicondiv spotify'><span class='icon'>&#xf1bc;</span></div></a>
					</div>
					<div class='asidewithicondiv'>	
						<p class='asidewithiconlabel'><span class='bold'>Interests&#58; </span></p>
						<div class='interestsdiv'>
							<div class='interestsicon'><span class='icon'>&#xf001;</span></div>
							<div class='interests'>Indie, Pop, Electronic</div>
						</div>
						<div class='interestsdiv'>
							<div class='interestsicon'><span class='icon'>&#xf008;</span></div>
							<div class='interests'>Sci&ndash;Fi, Animated</div>
						</div>
					</div>
				</aside>
			</div>
		</div>
	</section>
	<section id='skillssection'>
		<div id='skillssectiondiv'>
			<h2 class='sectionheader'>Skills</h2>
			<div id='skillscard'>
				<?php
				$skills = array(
					array("CSS&#47;SASS",8),
					array("Javascript",7),
					array("Adobe Photoshop",7),
					array("WordPress",7),
					array("Grav",7),
					array("Bootstrap",7),
					array("Java",6),
					array("PHP",6),
					array("Gantry",6),
					array("GIT",5),
					array("Arduino &#40;C&#47;C&#43;&#43;&#41;",2),
					array("BEM",2),
					array("Grunt",2),
					array("Twig",2)
				);
				for ($a = 0; $a < sizeof($skills); $a++) {
					echo "<div class='progressdiv'><div class='progresslabeldiv'>" . $skills[$a][0] . "</div><div class='progressbardiv'>";
					for ($b = 1; $b <= 10; $b++) { if ($b <= $skills[$a][1]) { echo "<div></div>"; } else { echo "<div class='empty'></div>"; } }
					echo "</div></div>";
				}
				?>
			</div>
			<div id='skillscaption'><em>I am excellent in time management, I can work under pressure or with limited supervision and I am computer literate.</em></div>
		</div>
		<div id='portfoliosectiondiv'>
			<h2 class='sectionheader'>Portfolio</h2>
			<div class='sectionasidediv'>
				<div class='sectionasideheader'>
					<h3>Web<br/>Development</h3>
				</div>
				<aside id='webdevtaside' class='sectionaside'>
					<div id='webdevtthumbnaildiv'>
						<div class='webdevtimgdivdiv'><div id='webdevtimgdiv' onclick='viewwebsite();'></div></div>
						<div id='webdevtcaptiondiv'><h4>Social Streat</h4><p>This is a responsive, mobile first, custom-themed WordPress site that I created at Offshorly, Ltd. It uses SASS, Bootstrap, Grunt Compiler, and ACF, Ajax and Instagram Plugins.</p></div>
					</div>
					<div id='webdevtfilmstripdiv'>
						<div class='webdevtimgdivdiv'><div onclick='showthumb(this);' id='webdevtimgdivsocialstreat'></div></div>
						<div class='webdevtimgdivdiv'><div onclick='showthumb(this);' id='webdevtimgdivoffshorly'></div></div>
						<div class='webdevtimgdivdiv'><div onclick='showthumb(this);' id='webdevtimgdivbioquick'></div></div>
						<div class='webdevtimgdivdiv'><div onclick='showthumb(this);' id='webdevtimgdivknowledge360'></div></div>
						<div class='webdevtimgdivdiv'><div onclick='showthumb(this);' id='webdevtimgdivtrekweblog'></div></div>
						<div class='webdevtimgdivdiv'><div onclick='showthumb(this);' id='webdevtimgdivform'></div></div>
					</div>
				</aside>
			</div>
			<div class='sectionasidediv'>
				<div class='sectionasideheader'>
					<h3>Graphic<br/>Arts</h3>
				</div>
				<aside id='graphicsaside' class='sectionaside'>
					<div id='graphicsnav'>
						<div id='graphicsnavad' onclick='showgraphics("ad");'>Ad</div>
						<div id='graphicsnavinfographics' onclick='showgraphics("infographics");'>Infographics</div>
						<div id='graphicsnavlogo' onclick='showgraphics("logo");'>Logo</div>
						<div id='graphicsnavicon' onclick='showgraphics("icon");'>Icon</div>
						<div id='graphicsnavcertificate' onclick='showgraphics("certificate");'>Certificate</div>
						<div id='graphicsnavbanner' onclick='showgraphics("banner");'>Banner</div>
					</div>
					<div id='graphicsad' class='graphicsdiv'>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_ad_ibm_agile24.png'></div>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_ad_ibm_april.2016.promotions.png'></div>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_ad_ibm_may.2016.promotions.png'></div>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_ad_ibm_ibmer.proud.png'></div>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_ad_ibm_sts.mid.year.gala_email.blast.1.png'></div>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_ad_ibm_sts.mid.year.gala_email.blast.2.png'></div>
					</div>
					<div id='graphicsinfographics' class='graphicsdiv'>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_infographics_cetr_project.noah.png'></div>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_infographics_cetr_research.png'></div>
					</div>
					<div id='graphicslogo' class='graphicsdiv'>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_logo_cetr.png'></div>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_logo_kajin.food.services_v1.1.png'></div>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_logo_kajin.food.services_v1.2.png'></div>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_logo_kajin.food.services_v2.png'></div>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_logo_kajin.food.services_v3.1.png'></div>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_logo_kajin.food.services_v3.2.png'></div>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_logo_kajin.food.services_v4.png'></div>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_logo_kajin.food.services_v5.png'></div>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_logo_kajin.food.services_v6.png'></div>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_logo_kajin.food.services_v7.png'></div>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_logo_little.kites.creatives_v1.1.png'></div>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_logo_little.kites.creatives_v1.2.png'></div>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_logo_little.kites.creatives_v2.png'></div>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_logo_little.kites.creatives_v3.png'></div>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_logo_little.kites.creatives_v4.png'></div>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_logo_little.kites.creatives_v5.png'></div>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_logo_little.kites.creatives_v6.1.png'></div>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_logo_little.kites.creatives_v6.2.png'></div>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_logo_little.kites.creatives_v6.3.png'></div>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_logo_tree.house.collective_v1.1.png'></div>
					</div>
					<div id='graphicsicon' class='graphicsdiv'>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_icon_ibm_wiki.page.footer_career.portal.png'></div>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_icon_ibm_wiki.page.footer_explore.learning.png'></div>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_icon_ibm_wiki.page.footer_learning.bookmarks.png'></div>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_icon_ibm_wiki.page.footer_think40.tracking.png'></div>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_icon_ibm_wiki.page.footer_trainers.guild.png'></div>
					</div>
					<div id='graphicscertificate' class='graphicsdiv'>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_certificate_cores_research_pilueta.png'></div>
					</div>
					<div id='graphicsbanner' class='graphicsdiv'>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_banner_ibm_wiki.page.header.png'></div>
						<div class='webdevtimgdivdiv'><img onclick='enlarge(this);' src='portfolio/graphics/thumb_graphics_banner_ibm_wiki.page.overview.banner.png'></div>
					</div>
				</aside>
			</div>
		</div>
	</section>
	<section id='experiencesection'>
		<div id='experiencesectiondiv'>
			<h2 class='sectionheader'>Experience</h2>
			<div class='sectionasidediv'>
				<div class='sectionasideheader'>
					<h3>Work<br/>Experience</h3>
				</div>
				<aside id='workexperienceaside' class='sectionaside'>
					<div>
						<p><span class='bold'>Offshorly, Ltd.</span></p>
						<p>21F CyberOne Bldg., Eastwood City Cyberpark, Bagumbayan, Quezon City</p>
						<p><em>Intern</em> &#40;April 25, 2017 &ndash; June 23, 2017&#41;</p>
					</div>
					<div>
						<p><span class='bold'>DOTC Government Internship Program</span></p>
						<p>The Columbia Tower, Ortigas Avenue<br/>Barangay Wack-Wack, Mandaluyong City</p>
						<p><em>Intern</em> &#40;Apr 3, 2014 &ndash; May 30, 2014&#41;</p>
					</div>
					<div>
						<p><span class='bold'>ACTS Achi &amp; Ahia, Inc.</span></p>
						<p>Unit M&ndash;C &amp; M&ndash;A Membo Condo<br/>&#35;8 Gen. Segundo St., Little Baguio, San Juan City</p>
						<p><em>Encoder&#47Clerk</em> &#40;Mar 27, 2015 &ndash; Jun 6, 2015&#41;</p>
					</div>
					<div>
						<p><span class='bold'>Center for Engineering and Technology Research</span></p>
						<p>PUP Manila</p>
						<p><em>Student Assistant</em> &#40;June 8, 2015 &ndash; October 15, 2016&#41;</p>
					</div>
					<div>
						<p><span class='bold'>IBM Business Services, Inc.</span></p>
						<p>16F CyberOne Building, Eastwood City Cyberpark<br/>Libis, Quezon City</p>
						<p><em>Intern</em> &#40;May 2, 2016 &ndash; August 7, 2016&#41;</p>
					</div>
				</aside>
			</div>
			<div class='sectionasidediv'>
				<div class='sectionasideheader'>
					<h3>Seminars<br/>Attended</h3>
				</div>
				<aside id='seminarsaside' class='sectionaside'>
					<div>
						<p><span class='bold'>Computer Research and Engineering Symposium &#40;CoRES&#41; 2017</span></p>
						<p>PUP Manila</p>
						<p><em>Organizer</em>&ndash; Certificates Committee</p>
						<p>January 19&ndash;21, 2017</p>
					</div>
				</aside>
			</div>
			<div class='sectionasidediv'>
				<div class='sectionasideheader'>
					<h3>Achievements<br/>Earned</h3>
				</div>
				<aside id='achievementsaside' class='sectionaside'>
					<div>
						<p><span class='bold'>Batch Topnotcher</span></p>
						<p>DOTC Government Internship Program</p>
						<p>May 30, 2014</p>
					</div>
					<div>
						<p><span class='bold'>Excellent Work Performance Award</span></p>
						<p>DOTC Government Internship Program</p>
						<p>May 30, 2014</p>
					</div>
				</aside>
			</div>
		</div>
	</section>
	<section id='otherssection'>
		<div id='otherssectiondiv'>
			<p id='copyright'>&copy; 2017 Reynell Bobihis &#124; All rights reserved.</p>
		</div>
	</section>
</body>
</html>