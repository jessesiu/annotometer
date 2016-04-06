<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Originally created by Artisteer, adapted by GigaDB
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>Annotometer </title>

    <link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="../../js/script.js"></script>
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
                                    <div class="art-postcontent">
                                                <!-- article-content -->


	
         <div class="container" id="wrap">
    <div id="content">
	

<style>
.about1 {
    
    width: auto;
    height: auto;
    padding: 7pt;
}
.image1{
    float: left;
}
</style>

<div class="clear"></div>
<div class="row">
 
<div class="about1">  

<a name="annotometer"></a>
<h2>The Annotometer</h2>
<p>The annotometer (ano-tom-eter), is a simple app that polls the tool (currently iCLiKVAL and Hypothes.is) API servers to retrieve the number of annotations made by registered accounts. It displays live results for the number of annotations made by the top curators, with updates every few minutes. It can also display the total number of annotations added by all registered users during the course of the competition. The annotometer can be set to run over any given time frame by the administrator of an event. Results from previous events will be displayed for future reference.<br>If you wish to host an event, either at a conference or in a class/workshop we can provide you with a temporary administrator account for the duration, and you may use the <a href="http://www.annotometer.com">annotometer.com</a> website and all its functions. Alternatively, the code of the annotometer will soon be made openly available via github to enable anyone wishing to run a similar competition to do so more easily.<br>Please feel free to <a href="mailto:database@gigasciencejournal.com" target="_blank">contact us</a> to discuss the addition of other curation tools to the annotometer.</p>
<a name="journal"></a>
<h2>Journal: <em>GigaScience</em></h2>
		<p ><a href="http://www.gigasciencejournal.com/" target="_blank"><em>GigaScience</em></a> is an online, open-access journal that includes, as part of its publishing activities, the database <a href="http://www.gigadb.org/" target="_blank"><em>GigaDB</em></a>. <em>GigaScience</em> is co-published in collaboration between <a href="http://www.genomics.cn" target="_blank">BGI</a> and <a href="http://www.biomedcentral.com" target="_blank">BioMed Central</a>, to meet the needs of a new generation of biological and biomedical research as it enters the era of &#8220;big-data.&#8221; The journal&#8217;s scope covers studies from the entire spectrum of the life sciences that produce and use large-scale data as the center of their work. Data from these articles are hosted in <a href="http://www.gigadb.org/" target="_blank"><em>GigaDB</em></a>, from where they can be cited to provide a direct link between the study and the data supporting it, as well as access to relevant tools for reproducing or reusing these data. The journal also publishes commentaries and reviews to provide a forum for discussions surrounding best practices and issues in handling large-scale data. See <a href="http://www.gigasciencejournal.com/" target="_blank">http://www.gigasciencejournal.com/</a> for additional information about the journal and prospective article submission.</p>
		

<a name="database"></a>                               
<h2>Database: <em>GigaDB</em></h2>
		<p><a href="http://www.gigadb.org/" target="_blank"><em>GigaDB</em></a> primarily serves as a repository to host data and tools associated with articles in <a href="http://www.gigasciencejournal.com/" target="_blank"><em>GigaScience</em></a>; however, it also includes a subset of datasets that are not associated with GigaScience articles (see below). <a href="http://www.gigadb.org/" target="_blank"><em>GigaDB</em></a> defines a dataset as a group of files (e.g., sequencing data, analyses, imaging files, software programs) that are related to and support an article or study. Through our association with <a href="http://www.datacite.org/" target="_blank">DataCite</a>, each dataset in <a href="http://www.gigadb.org/" target="_blank"><em>GigaDB</em></a> will be assigned a <a href="http://www.doi.org/" target="_blank">DOI</a> that can be used as a standard citation for future use of these data in other articles by the authors and other researchers.  Datasets in <a href="http://www.gigadb.org/" target="_blank"><em>GigaDB</em></a> all require a title that is specific to the dataset, an author list, and an abstract that provides information specific to the data included within the set. We encourage detailed information about the data we host to be submitted by their creators in ISA-Tab, a format used by the BioSharing and ISA Commons communities that we work with to maintain the highest data and metadata standards in our journal. To maximize its utility to the research community, all datasets in <a href="http://www.gigadb.org/" target="_blank"><em>GigaDB</em></a> are placed under a <a href="http://creativecommons.org/publicdomain/zero/1.0/" target="_blank">CC0 waiver</a> (for more information on the issues surrounding CC0 and data see <a href="http://www.biomedcentral.com/1756-0500/5/494" target="_blank">Hrynaszkiewicz and Cockerill, 2012</a>).</p>
		<p>Datasets that are not affiliated with a <a href="http://www.gigasciencejournal.com/" target="_blank"><em>GigaScience</em></a> article are approved for inclusion by the Editors of <a href="http://www.gigasciencejournal.com/" target="_blank"><em>GigaScience</em></a>. The majority of such datasets are from internal projects at the <a href="http://www.genomics.cn/" target="_blank">BGI</a>, given their sponsorship of <a href="http://www.gigadb.org/" target="_blank"><em>GigaDB</em></a>. Many of these datasets may not have another discipline-specific repository suitably able to host them or have been rapidly released prior to any publications for use by the research community, whilst enabling their producers to obtain credit through data citation. The <a href="http://www.gigasciencejournal.com/" target="_blank"><em>GigaScience</em></a> Editors may also consider the inclusion of particularly interesting, previously unpublished datasets in <a href="http://www.gigadb.org/" target="_blank"><em>GigaDB</em></a>, especially if they meet our criteria and inclusion as Data Note articles in the journal (see our author instructions <a href="http://www.gigasciencejournal.com/authors/instructions/datanote" target="_blank">here</a>).</p>
		<p>To submit data to <em>Giga</em>DB, visit <a href="http://www.gigadb.org/" target="_blank">GigaDB.org</a> or <a href="mailto:database@gigasciencejournal.com" target="_blank">contact us</a>.</p>
<a name="citation"></a>
<h2>Hypothes.is</h2>
<p><a href="https://hypothes.is/" target="_blank"><em>Hypothes.is</em></a> : We think simple tools can help us all improve the quality of information on the Internet and in the greater world around us.</p>
<p>Our team is building an open platform for discussion on the web. It leverages annotation to enable sentence-level critique or note-taking on top of news, blogs, scientific articles, books, terms of service, ballot initiatives, legislation and more. Everything we build is guided by our principles. In particular that it be free, open, non-profit, neutral and lasting to name a few.</p>

<a name="citation1"></a>
<h2>iCLiKVAL</h2>
<p><a href="http://iclikval.riken.jp/" target="_blank"><em>iCLiKVAL</em></a> is an easy-to-use web-based tool that uses the power of crowdsourcing to accumulate annotation information for all scientific literature and media (currently PubMed, DOI, YouTube, Flickr, and SoundCloud) found online. Annotations, such as keywords, make information easier to find and allow for much richer data searches. In iCLiKVAL, annotations are added to items as simple key-value (and optional relationship) tuples. Use it to annotate any article (try starting with your own), or join an interest group and work together to annotate literature related to the group topic.</p>
  


</div>
</div>


</div><!-- content -->
        </div>       


                                                <!-- /article-content -->
                                            </div>
                                            <div class="cleared"></div>
                            </div>
                            
                            		
                                </div>
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
