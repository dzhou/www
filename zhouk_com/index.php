<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php
switch($_GET['s']){
	case 1: 
	?>
<title>Kefei Dan Zhou - Work and Projects</title>
<meta name="keywords" content="Kefei,Dan,Zhou,upenn,penn,programmer,developer,entrepreneur,work,open source" />
<meta name="description" content="Portfolio of Kefei Dan Zhou. Work experiences and recent open source projects." />
	<? break;
	case 3:
	?>
<title>Kefei Dan Zhou - Contact Info</title>
<meta name="keywords" content="Kefei,Dan,Zhou,UPenn,Penn,SEAS,contact,info,university,student,project,freelance,startup,recruiter,resume" />
<meta name="description" content="Kefei Dan Zhou. Contact info. Available for freelance and startup projects." />
	<?
	default:
	?>
<title>Kefei Dan Zhou - UPenn</title>
<meta name="keywords" content="Kefei,Dan,Zhou,UPenn,Penn,SEAS,Software,web 2.0,developer,entrepreneur,open source,trading,quant" />
<meta name="description" content="Kefei Dan Zhou, University of Pennsylvania alumnus, software developer and entrepreneur" />
	<?
}
?>
<script type="text/javascript" src="js/prototype.lite2.js"></script>
<script type="text/javascript" src="js/moo.fx2.js"></script>
<script type="text/javascript" src="js/accordion2.js"></script>
<script type="text/javascript" src="js/niftycube2.js"></script>
<link rel="stylesheet" href="css/2.css" type="text/css"/>
<!--[if IE]><style type="text/css">
@import "css/ie_fixes.css";
</style><![endif]-->
<script type="text/javascript">
var accordionClicks;
var accordionContents;
var accordion;
window.onload = function() {
	Nifty("div.accordion-head","all");
	toggler = document.getElementsByClassName('accordion-head');
	element = document.getElementsByClassName('accordion-section');
	accordion = new fx.Accordion(toggler, element, {opacity:false});
<?php
if (isset($_GET['s'])) {
	$s = $_GET['s'];
	if ($s >= 0 && $s <= 3)
		echo "accordion.showThisHideOpen($s)";
}
?>
}
</script>
</head>
<body id="top">
<span class='invisible'>designed/coded by kefei dan zhou</span>
<div id="header">
<h1><a href="?s=0">kefei dan zhou</a></h1>
<h2>DEVELOPER, ENTREPRENEUR</h2>
</div> 
<!--
<div class="sidebar">
<div class="header">Links</div>
<a href="http://digg.com">Digg</a> news<br/>
<a href="http://sourceforge.net">SourceForge</a><br/>
<a href="http://www.forexfactory.com/">Forex Factory</a><br/>
<a href="http://www.bloomberg.com/index.html?Intro=intro3">Bloomberg</a><br/>
<a href="http://www.locobuzz.com">Locobuzz</a> event 2.0<br/>
<a href="http://www.gentoo.org">Gentoo</a> linux distro<br/>
<a href="links.php">more links -></a><br/>
</div>
-->
<div id="container">
<div class="accordion-head" style="background:#153e7e">Introduction</div>
<div class="accordion-section">
	<p>
    My name is Dan. I graduated <del>recently</del> from the University of Pennsylvania 
    with a BSE degree in Computer Science and Mathematics.
    </p><p> 
    I'm a software architect with experiences in distributed, high-performance systems and finance industry. 
    I'm particularly interested in algorithms/data structure, open source initiatives, 
    quantitative finance, and trading technology. I currently work at Citi Global Markets.</p>
    <!--
    I'm a generalist programmer with strong experiences (and interests)
    in linux systems, trading technologies and algorithms. 
    Currently I am learning about capital markets and the quantitative side of finance.
    I've had some pretty <a href="#", onclick="javascript:accordion.showThisHideOpen(1)";>interesting jobs</a>
    over the last few years. During the spring of 2009, I worked with team Invite Media, 
    creating media trading technologies and learning tons from some of the best developers I've ever met.
    </p><p>
    I'm passionate about solving problems through technology. I want to tackle some of 
    the world's more important problems someday and make a difference.
    </p><p>
    -->
    <p>
    In my free time, I like to read about current events, jog around central park, and 
    occasionally solve some math problems. 
    </p><p>
    <!--I currently work at Citi Global Markets.-->
    I recently started to use <a href="http://www.linkedin.com/in/kefeizhou" target="_linked">Linkedin</a>.
    </p><p>
	<i>~ Last updated. nov 24, 2010. Kefei Dan Zhou.</i>
	</p>
</div>

<div class="accordion-head" style="background:#2b547e">Work/Projects</div>
<div class="accordion-section">
    <!--
    <p>I've had some interesting jobs over the last few years.
    All of the jobs centered around software development, many of them involved 
    trading technologies.
    </p>
    -->
    <div class="code-section">        
        <span class="code-header">&lt;WORK&gt;</span><br/><br/>
        <span class="code-title">Citi Global Markets - 2009/Present - </span>
        developer
        <div class="code-main">
        Since joining the rates vol desk tech team, I helped transform a trading desk running on mostly
        spreadsheets into a desk with cutting edge systems and near real-time risk.         
        I led the design and development for the risk engine, trade cache, marketdata cache, 
        and the distributed task management dashboard. 
        <span class="code-sub"> -> <a href="http://www.citigroup.com/" target="_blank">website</a></span>
        </div><br/>
        
        <span class="code-title">Invite Media - 2009 - </span>
        developer
        <div class="code-main">
        I worked with a team of brilliant engineers to create large-scale, real-time display media platform 
        for automatically buying across multiple ad exchanges. We used agile development methodologies and coded in python. <br/>
        Invite Media was acquired by Google in mid 2010. 
        <span class="code-sub"> -> <a href="http://www.invitemedia.com/" target="_blank">website</a></span>
        </div><br/>

        <span class="code-title">Goldman Sachs - 2008 -</span>
        <span class="code-sub"></span>technology analyst intern
        <div class="code-main">I worked with the US Shares team of Equity Trading Technology during the summer. 
        I enjoyed working at GS despite 2 hours of commute everyday (from 120th to jersey city). 
        During the short ten weeks, I had the opportunity to learn about one of their very profitable trading
        algorithms, and I developed (from scratch) software to monitor and manage 
        the firm's opening and closing cross business on the NASDAQ.
        </div><br/>
        
        <span class="code-title">Group One Trading - 2007/08 -</span>
        <span class="code-sub"></span>quantitative risk analyst intern
        <div class="code-main">
        During the one and half years with the G1 Philly team, I had the chance to get involved in a 
        range of trading related projects. I helped create their firm-wide distributed reporting/analysis 
        system, worked on mock trading software, and learned about really cool (automated, high-freq, 
        arbitrage) quantitative trading.
        <span class="code-sub"> -> <a href="http://www.group1.com" target="_blank">website</a></span>
        </div><br/>
    
    
        <!--
        <span class="code-title">Locobuzz - 2006/07 -</span>
        (<span class="code-sub"><a href="http://www.locobuzz.com" target="_blank"><del>alpha site</del></a></span>)
        cofounder
        <div class="code-main">A web 2.0 startup to create a campus event listing and ticket sales webservice.
        While the company collapsed after a year without gaining much momentum, it was a great 
        experience for all of us involved. Two of the founders later went on to start another 
        (infinitely more successful) company called Invite Media. 
        <span class="code-sub"> -> <a href="http://www.locobuzz.com" target="_blank"><del>alpha site</del></a></span>
        </div><br/>
        -->
   <!-- 
        <span class="code-title">Honorable mentions:</span>
        <div class="code-main">
        UPenn System Design Research Lab (generic infusion pump project)<br/> 
        Basis Technology in Cambridge, MA<br/>
        ITA gig at Kings' Court English college house<br/>
        </div><br/>
    -->
        <span class="code-header">&lt;PROJECTS&gt;</span><br/><br/>
        <!--        
        <span class="code-title">Currently working on:</span>
        <div class="code-main">
        nothing 
        </div><br/>
        -->        
        <span class="code-title">Project Euler</span>
        <div class="code-main">
        Occasionally I solve math problems on project euler and check in my code on 
        <a href="https://github.com/dzhou/Project_Euler" target="_github">github</a>.<br/><br/>
        <img src="http://projecteuler.net/profile/dzhou.png"/>
        </div><br/>
        
        <span class="code-title">Senior design</span>
            (<span class="code-sub"><a href="http://www.zhouk.com/a3_frame/" target="_blank">anonymity framework</a></span>)
        <div class="code-main">
        A portable, high-performance framework for accessing A3 anonymity network. 
        Technologies involved: distributed hash table, network coordinate system, randomized algorithm, and virtual network devices.
        <!--
        If you ever wonder how much information websites can find out about you just for visiting, 
        <a href="http://www.zhouk.com/a3_frame/privacy_discovery" target="_blank">take a look</a>.-->
        </div><br/>
<!--
        <span class="code-title">Project Euler</span>
        (<span class="code-sub"><a href="http://projecteuler.net" target="_blank">website</a></span>)
        <div class="code-main">
        solved: 72/240
        </div><br/>
-->
        <span class="code-title">Artificial Neural Network</span>
        <div class="code-main">
        My background project for few years. I developed feedforward artificial neural net (and later cascading) 
        for my currency trading.
        </div><br/>
    </div>
</div>
<!--
<div class="accordion-head" style="background:#4863a0">Toolkit</div>
<div class="accordion-section">
    <p>
    <i>Caution: th1s 1s th3 1337 p4rt 0f th3 w3bs1t3</i><br/><br/>
    
    <table border="0px" width="100%">
    <tr>
    <td valign="top" width="60%">
    <b>OS and Equiptment:</b><br/>
    Dell Laptop<br/>
    Gentoo Linux<br/>
    Virtual Box with XP and Ubuntu<br/><br/>
    <b>Coding and Productivity:</b><br/>
    fluxbox<br/>    
    xterm with bash/screen<br/>
    nano and vim<br/>
    svn/git<br/>
    openoffice<br/><br/>
    </td>
    <td valign="top">
    <a href="images/dzhou_desktop.jpg"><img src="images/dzhou_desktop_small.jpg" height="160"></a>
    </td>
    </tr>
    </table>

    <b>Gentoo</b><br/>
    I've been using <a href="http://www.gentoo.org" target="_blank">Gentoo</a> for the last few years and have developed an unique
    method of installtion.

    This install method is based on the old Conrad Stage 1/3 installation. This was 
    a necessity back then in 2004 due to a circular dependency in the base system, 
    now it's a shortcut to one of the fastest linux operating system.
    In the age of shiny Ubuntu-esq GUI install tools, gentoo is a 
    homage to the command line era. <br/><br/>

    The <a href="" target="_blank">setup process</a> involves unpacking the gentoo tarball (a prepared base system),
    recompiling the entire system with custom settings, and manually patching/compiling the kernel.
    The result is a highly optimized and stable system with the lastest features like 
    ext4, reiser4 and hibernate.
    </p>
    <br/><br/>
</div>
-->

<div class="accordion-head" style="background:#4863a0">Contact</div>
<div class="accordion-section">
	<p> <span class="type-bold">Kefei D. Zhou</span><br/>
    Linkedin: <a href="http://www.linkedin.com/in/kefeizhou" target="_linked">Kefei Zhou</a><br/><br/>
	Email: kefei (dot) zhou (at) gmail <br/>    
    <del>Email: zhouk (at) 
    &#115;&#101;&#97;&#115;&#46;&#117;&#112;&#101;&#110;&#110;&#46;&#101;&#100;&#117;</del><br/>
    <!--Resume: available on request<br/><br/>-->
    <br/>
    currently residing in <del>philadelphia</del> nyc<br/>
	<!--comments and feedbacks welcomed!<br/>-->
	<!--and of course accepting interesting freelance and startup projects.-->
	<br/><br/>
	<br/><br/>
	<br/><br/>
	</p>
</div>
</div>

<div id="footer">
<p>
<div class="right"><a href="#top">Top</a></div>
Design: Kefei Dan Zhou <br/>
&copy Kefei D. Zhou. 2006-10. All rights reserved. <br/>
<span class='invisible'>Graphics Design by Kefei Daniel Zhou<br/></span>
<span class='invisible'>Kefei Daniel Zhou, UPenn 2009<br/></span>
<span class='invisible'>contact: Kefei dot zhou at gmail</span>
</p>
</div>
</body>
</html>
