var readywebpage = 'socialstreat';
var autoscrollfunction;
var enlargedelement;
var enlargedelementimg;
var enlargedelementimgsrc;
var enlargedelementheight;

function $(a) { return document.getElementById(a); }

window.onscroll = testScroll

function testScroll(ev) {
	if (window.pageYOffset > 0) { $('headerdiv').style.marginTop = '10px'; }
	else { $('headerdiv').style.marginTop = '40px'; }
	
	$('jumbotronh1').style.opacity = 1-((window.pageYOffset/screen.height)*4);
	$('jumbotronh1').style.fontSize = 120-((window.pageYOffset/screen.height)*100) + 'px';
	$('jumbotronbutton').style.opacity = 1-((window.pageYOffset/screen.height)*4);
	
	if (window.pageYOffset >= $('experiencesectiondiv').offsetTop-600) { $('experiencesectiondiv').style.opacity = '1'; }
	if (window.pageYOffset >= $('portfoliosectiondiv').offsetTop-600) { $('portfoliosectiondiv').style.opacity = '1'; }
	if (window.pageYOffset >= $('skillssectiondiv').offsetTop-600) { $('skillssectiondiv').style.opacity = '1'; }
	if (window.pageYOffset >= $('personalinfosectiondiv').offsetTop-600) { $('personalinfosectiondiv').style.opacity = '1'; }
	if (window.pageYOffset >= $('aboutsectiondiv').offsetTop-600) { $('aboutsectiondiv').style.opacity = '1'; }
	$('otherssectiondiv').style.opacity = '1';

	if (window.pageYOffset > 0 && window.pageYOffset < $('aboutsection').offsetTop-100) { resetnavcolorexcept('headernavhome'); }
	else if (window.pageYOffset >= $('aboutsection').offsetTop-100 && window.pageYOffset < $('personalinfosection').offsetTop-100) { resetnavcolorexcept('headernavabout'); }
	else if (window.pageYOffset >= $('personalinfosection').offsetTop-100 && window.pageYOffset < $('skillssection').offsetTop-100) { resetnavcolorexcept('headernavcontact'); }
	else if (window.pageYOffset >= $('skillssection').offsetTop-100 && window.pageYOffset < $('experiencesection').offsetTop-100) { resetnavcolorexcept('headernavskills'); }
	else if (window.pageYOffset >= $('experiencesection').offsetTop-100 && window.pageYOffset < $('otherssection').offsetTop-100) { resetnavcolorexcept('headernavexperience'); }
	else resetnavcolorexcept('');
}

function resetnavcolorexcept(a) {
	$('headernavhome').style.borderColor = 'rgba(0,0,0,0)';
	$('headernavabout').style.borderColor = 'rgba(0,0,0,0)';
	$('headernavcontact').style.borderColor = 'rgba(0,0,0,0)';
	$('headernavskills').style.borderColor = 'rgba(0,0,0,0)';
	$('headernavexperience').style.borderColor = 'rgba(0,0,0,0)';
	$(a).style.borderColor = 'orange';
}

function autoscrollto(a) {
	clearTimeout('autoscrollfunction');
	scrolldestination = $(a).offsetTop-40;
	if (scrolldestination < 0) scrolldestination = 0;
	autoscrolltopageyoffset();
}

function autoscrolltopageyoffset() {
	autoscrollfunction = setTimeout(function(){ 
		b = (Math.abs(window.pageYOffset - scrolldestination))/10;
		b = b-(b%1)+1;
		if (window.pageYOffset < scrolldestination) { window.scrollTo(0,window.pageYOffset+b); }
		else if (window.pageYOffset > scrolldestination) { window.scrollTo(0,window.pageYOffset-b); }
		else return;
		autoscrolltopageyoffset();
	}, 1);
}

function showthumb(a) {
	readywebpage = a.id.substring(13,a.id.length);
	$('webdevtimgdiv').style.background = 'url\(portfolio\/webdevt\/thumb\_' + (a.id.substring(13,a.id.length)) + '.png\) no\-repeat center center';
	$('webdevtimgdiv').style.backgroundSize = 'cover';
	var h1;
	var p = 'This is a web page I created in my Elective class. Click to view the website.';
	switch (a.id.substring(13,a.id.length)) {
		case 'knowledge360':
			h1 = 'Knowledge360';
			p = 'This is a responsive web page for a project in my Elective class. Click to view the website.';
			break;
		case 'trekweblog': h1 = 'Trek Weblog'; break;
		case 'offshorly':
			h1 = 'Offshorly';
			p = 'This is a responsive web site built with Grav. It uses Gantry 5, SASS, Markdown and Twig Template Engine. I created this as an intern at Offshorly, Ltd.';
			break;
		case 'form': h1 = 'Javascript Form Validation'; break;
		case 'socialstreat':
			h1 = 'Social Streat';
			p = 'This is a responsive, mobile first, custom-themed WordPress site that I created as an intern at Offshorly, Ltd. It uses SASS, Bootstrap, Grunt Compiler, and ACF, Ajax and Instagram Plugins.';
			break;
		case 'quizgame':
			h1 = 'Quiz Game';
			p = 'This web page is made for an activity of my sister\'s student organization in her college. It is a quiz game for five players. View the page for more details.';
			break;
	}
	$('webdevtcaptiondiv').innerHTML = '\<h4\>' + h1 + '\<\/h4\>\<p\>' + p + '\<\/p\>';
}

function viewwebsite() {
	if (readywebpage == 'socialstreat') {
		window.open('http://socialstreat.org','_blank');
	}
	else if (readywebpage == 'offshorly') {
		window.open('http://www.offshorly.com','_blank');
	}
	else window.open('portfolio\/webdevt\/' + readywebpage + '\/','_blank');
}

function showgraphics(a) {
	b = ['ad','infographics','logo','icon','certificate','banner'];
	for (c=0; c<=5; c++) {
		$('graphics' + b[c]).style.display = 'none';
		$('graphicsnav' + b[c]).style.background = 'none';
		$('graphicsnav' + b[c]).style.fontWeight = 'normal';
	}
	$('graphics' + a).style.display = 'inline';
	$('graphicsnav' + a).style.backgroundColor = '#f5f5f5';
	$('graphicsnav' + a).style.fontWeight = 'bold';
}

function enlarge(a) {
	if (enlargedelement != null) { // make previous selection small again
		// enlargedelement.style.width = '30\%';
		// enlargedelement.style.height = enlargedelementheight;
		enlargedelement.classList.remove("lightbox");
		d = enlargedelementimgsrc.split('graphics\/graphics\_');
		enlargedelementimg.src = d[0] + 'graphics\/thumb\_' + 'graphics\_' + d[1];
		e = a.src.substring(a.src.length-22, a.src.length);
		f = enlargedelementimgsrc.substring(enlargedelementimgsrc.length-22, enlargedelementimgsrc.length);
		if (e == f) { enlargedelement = null; return; }
	}
	enlargedelement = a.parentElement;
	enlargedelementimg = a;
	enlargedelementheight = a.parentElement.style.height;
	b = a.src.split('portfolio');
	c = b[1].split('thumb\_');
	enlargedelementimgsrc = 'portfolio' + c[0] + c[1];
	a.src = '';
	a.src = enlargedelementimgsrc;
	// a.parentElement.style.width = '99\%';
	// a.parentElement.style.height = 'auto';
	a.parentElement.classList.add("lightbox");
}