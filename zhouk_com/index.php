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
    <p>
    In my free time, I like to read about current events, jog around central park, and 
    occasionally solve some math problems on projecteuler. 
    </p><p>
    <!--I currently work at Citi Global Markets.-->
    I recently started to use <a href="http://www.linkedin.com/in/kefeizhou" target="_linked">Linkedin</a>.
    </p><p>
	<i>~ Last updated. nov 24, 2010. Kefei Dan Zhou.</i>
	</p>
</div>

<div class="accordion-head" style="background:#2b547e">Work/Projects</div>
<div class="accordion-section">
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
        algorithms, and I developed (from scratch) a trading console to monitor and manage 
        the firm's opening and closing cross business on the NASDAQ.
        </div><br/>
        
        <span class="code-title">Group One Trading - 2007/08 -</span>
        <span class="code-sub"></span>quantitative risk analyst intern
        <div class="code-main">
        During the one and half years with the G1 Philly team, I was involved with a wide
        range of trading related projects. I helped create G1's firm-wide distributed reporting/analysis 
        system, worked on mock trading software, and learned about really cool (automated, high-freq, 
        arbitrage) quantitative trading.
        <span class="code-sub"> -> <a href="http://www.group1.com" target="_blank">website</a></span>
        </div><br/>
    
        <span class="code-header">&lt;PROJECTS&gt;</span><br/><br/>
        <span class="code-title">Project Euler</span>
        <div class="code-main">
        Occasionally I solve math problems on project euler and check in my code on 
        <a href="https://github.com/dzhou/Project_Euler" target="_github">github</a>.<br/><br/>
        <img src="http://projecteuler.net/profile/dzhou.png"/>
        </div><br/>
        
        <span class="code-title">Senior design</span>
            (<span class="code-sub"><a href="http://www.zhouk.com/a3_frame/" target="_blank">anonymity framework</a></span>)
        <div class="code-main">
        For senior project, Andrew and I designed and prototyped a portable, high-performance framework for accessing A3 anonymity network. 
        Technologies involved: distributed hash table, network coordinate system, randomized algorithm, and virtual network devices.
        </div><br/>

        <span class="code-title">Artificial Neural Network</span>
        <div class="code-main">
        My background project for few years. I developed feedforward artificial neural net (and later cascading) 
        for my currency trading.
        </div><br/>
    </div>
</div>


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
