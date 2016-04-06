
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Originally created by Artisteer, adapted by GigaDB
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
	<link rel="shortcut icon" href="/images/favicon.ico">
	<link rel="icon" sizes="16x16 32x32 64x64" href="/images/favicon.ico">
	<link rel="icon" type="image/png" sizes="196x196" href="/images/favicon-192.png">
	<link rel="icon" type="image/png" sizes="160x160" href="/images/favicon-160.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/images/favicon-96.png">
	<link rel="icon" type="image/png" sizes="64x64" href="/images/favicon-64.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16.png">
	<link rel="apple-touch-icon" href="/images/favicon-57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/images/favicon-114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/images/favicon-72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/images/favicon-144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/images/favicon-60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/images/favicon-120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/images/favicon-76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/images/favicon-152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/images/favicon-180.png">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>Annotometer </title>

    <link rel="stylesheet" href="./css/style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="./js/script.js"></script>
</head>
<body>
<div id="art-main">
        <div class="art-sheet">
            <div class="art-sheet-tl"></div>
            <div class="art-sheet-tr"></div>
            <div class="art-sheet-bl"></div>
            <div class="art-sheet-br"></div>
            <div class="art-sheet-tc"></div>
            <div class="art-sheet-bc"></div>
            <div class="art-sheet-cl"></div>
            <div class="art-sheet-cr"></div>
            <div class="art-sheet-cc"></div>
            <div class="art-sheet-body">
                <div class="art-header">
                    <div class="art-header-png"></div>
                    <div class="art-header-jpeg"></div>
                    <div class="art-logo">
                        <h1 id="name-text" class="art-logo-name"><a href="#"></a></h1>
                    </div>
                </div>
                  <div class="art-nav">
                	<div class="l"></div>
                	<div class="r"></div>
                	<ul class="art-menu">
                		<li>
                			<a href="http://www.annotometer.com" class="active"><span class="l"></span><span class="r"></span><span class="t">Home</span></a>
                		</li>
                		<li>
                			<a href="#"><span class="l"></span><span class="r"></span><span class="t">GigaCuration Challenge 2016</span></a>
                			<ul>
                                            <li><a href="http://www.annotometer.com/register">Register</a>
                					
                				</li>
                				<li><a href="http://www.annotometer.com/getting-started">Getting Started</a></li>
                				<li><a href="http://www.annotometer.com/site/terms">Terms and Conditions</a></li>
								<li><a href="http://www.annotometer.com/leaderboard">Leaderboard</a></li>
                                                                 <?php if(!Yii::app()->user->isGuest){?> 
								<li><a href="http://www.annotometer.com/user/view_profile">Personal Profile</a></li>
                                                                 <?php } ?>
                			</ul>
                		</li>		
                		<li>
                			<a href="http://www.annotometer.com/site/about"><span class="l"></span><span class="r"></span><span class="t">About</span></a>
                		</li>
	<li>
                                                    <?php if(Yii::app()->user->isGuest){?> 
                			<a href="http://www.annotometer.com/site/login"><span class="l"></span><span class="r"></span><span class="t">Login</span></a>
                                        <?php }else{ ?>
                                        <a href="http://www.annotometer.com/site/logout"><span class="l"></span><span class="r"></span><span class="t">Logout</span></a>
                                        <?php } ?>        
                                                </li>                	
</ul>
                </div>
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content">
                            <div class="art-post">
                                <div class="art-post-body">
                            <div class="art-post-inner art-article">
							<h1 <bold>Giga-Curation Challenge 2016</bold>
                                            </h1>
                                            <h2 class="art-postheader">
                                                Encouraging community curation through competition
                                            </h2>
                                            <div class="art-postcontent">
												<div class="art-article">
                                                <!-- article-content -->
												<div class="art-content-layout overview-table">
                                                	<div class="art-content-layout-row">
                                                		<div class="art-layout-cell">
                                                      <div class="overview-table-inner">
<!--												<table border="0" style="width:100%" >
												<tr border="0"> 
												<td border="0"> -->
                                                <p>In recent years it has become clear that the amount of data being generated worldwide cannot be curated and annotated by any individual or small group. Currently, there is recognition that one of the best ways to provide ongoing curation is to employ the power of the community. To do this, the first difficulty to overcome was the development of user-friendly tools and apps that non-expert curators would be comfortable and capable of using. Such tools are now in place, including iCLiKVAL and Hypothes.is.
												The second problem, which we are now facing, is bringing in and engaging the large number of people needed to perform the curation required to empower these tools. Eventually it is hoped that users will realize their utility and begin to both habitually use and add information to these apps. This will make these tools ever more useful and become a standard part of the process of carrying out research.
												The Giga-Curation Competition 2016 is designed to encourage the uptake of two of the more mature community-curation tools on offer. The competition will last 3 days during the Biocuration2016 conference April 8th to 11th. As an incentive, a prize of a brand new Apple iPad mini 4 will be awarded to the person who adds the most annotations in that time.
                                                </p>
												</div>
                                                </div><!-- end cell -->
                                                <div class="art-layout-cell">
                                                <div class="overview-table-inner">												
												<iframe align="right" width="400" height="300" src="http://www.youtube.com/embed/HQFpQ_KY6ok" name="iframe_a"></iframe>
												</div>
                                                </div><!-- end cell -->
												
											</div>
							</div>
                                                <p>
                                                	<span class="art-button-wrapper">
                                                		<span class="l"> </span>
                                                		<span class="r"> </span>
                                                                <a class="art-button" href="./register">Register for Giga-Curation Challenge 2016 now</a>
                                                	</span>
                                                </p>
												
                                                <div class="cleared"></div>
											 <h2> <div class="art-postheader">
                                                Tools tracked by Annotometer
                                            </div> </h2>
                                                <div class="art-content-layout overview-table">
                                                	<div class="art-content-layout-row">
                                                		<div class="art-layout-cell">
                                                      <div class="overview-table-inner">
                                                	      <h4>iCLiKVAL</h4>
                                                						  <img src="images/iclikval.png" width="55px" height="55px" alt="an image" class="image" />
                                                						  <p>iCLiKVAL is an easy-to-use web-based tool that uses the power of crowdsourcing to accumulate annotation information for all scientific literature and media (currently PubMed, DOI, YouTube, Flickr, and SoundCloud) found online. Annotations, such as keywords, make information easier to find and allow for much richer data searches. In iCLiKVAL, annotations are added to items as simple key-value (and optional relationship) tuples. Use it to annotate any article (try starting with your own), or join an interest group and work together to annotate literature related to the group topic.</p>
                                                       </div>
                                                		</div><!-- end cell -->
                                                		<div class="art-layout-cell">
                                                    <div class="overview-table-inner">
                                                		  <h4>Hypothes.is</h4>
                                                						  <img src="images/hypothesis.png" width="55px" height="55px" alt="an image" class="image" />
                                                						  <p>We think simple tools can help us all improve the quality of information on the Internet and in the greater world around us.

Our team is building an open platform for discussion on the web. It leverages annotation to enable sentence-level critique or note-taking on top of news, blogs, scientific articles, books, terms of service, ballot initiatives, legislation and more. Everything we build is guided by our principles. In particular that it be free, open, non-profit, neutral and lasting to name a few. </p>
                                                				</div>
                                                		</div><!-- end cell -->
                        
                                                	</div><!-- end row -->
                                                </div><!-- end table -->
                                                    
                                                <!-- /article-content -->
                                            </div>
   
                                                    
                                                <!-- /article-content -->
                                            
                                            <div class="cleared"></div>
                            </div>
                            
                            		<div class="cleared"></div>
                                </div>
                            </div>
                        </div>
                        <div class="art-layout-cell art-sidebar1">    
						
                        </div>
                    </div>
                </div>
				
                <div class="cleared"></div><div class="art-footer">
                    <div class="art-footer-inner">
                        
                        <div class="art-footer-text">
                            <p>&nbsp;</p>
                        </div>
                    </div>
					
                    <div class="art-footer-background"></div>
                </div>
        		<div class="cleared"></div>
            </div>
        </div>
        <div class="cleared"></div>
    </div>
    
</body>
</html>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75179862-1', 'auto');
  ga('send', 'pageview');

</script>
