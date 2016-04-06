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

    <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="../js/script.js"></script>
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
                			<a href="http://www.annotometer/site/login"><span class="l"></span><span class="r"></span><span class="t">Login</span></a>
                                        <?php }else{ ?>
                                        <a href="http://www.annotometer/site/logout"><span class="l"></span><span class="r"></span><span class="t">Logout</span></a>
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
table {
    border-collapse: collapse;
    width: 80%;
}

th, td {
    padding: 5px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr {

   height: 1px;

}

tr:hover{background-color:#291C00}


</style>

<h1>Getting Started</h1>

<p>
Curation of any compatible site or document will be accepted in the challenge, but to get you started here is a list of some relevant websites already hosting <a href="https://hypothes.is/">hypothes.is</a> and some example documents that can be annotated using <a href="http://iclikval.riken.jp">iCLiKVAL</a>.
</p>
<br>
<br>

<h2>Human microbiome gene catalogue</h2>
<table>
    <tr>
        <td>Manuscript PMID</td>
        <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=24997786" target="_blank">24997786</a></td>
        <td><a href="http://iclikval.riken.jp/review-media/54550b0de36265c73e7b3df3" target="_blank"><img src="../images/iclikval.png" id="logo-image"></a></td>
        <td><a href="https://via.hypothes.is/https://europepmc.org/search?query=24997786" target="_blank"><img src="../images/hypothesis.png" id="logo-image"></a></td>

    </tr>
    <tr>
        <td>Manuscript DOI</td>
        <td><a href="http://doi.org/10.1038/nbt.2942" target="_blank">10.1038/nbt.2942</a></td>
        <td><a href="http://iclikval.riken.jp/review-media/54550b0de36265c73e7b3df3" target="_blank"><img src="../images/iclikval.png" id="logo-image"></a></td>
        <td><a href="https://via.hypothes.is/http://doi.org/10.1038/nbt.2942" target="_blank"><img src="../images/hypothesis.png" id="logo-image"></a></td>
    </tr>
    <tr>
        <td>Dataset DOI</td>
        <td><a href="http://doi.org/10.5524/100064" target="_blank">10.5524/100064</a></td>
        <td><a href="http://iclikval.riken.jp/review-media/56bd3243e3626556285565fb" target="_blank"><img src="../images/iclikval.png" id="logo-image"></a></td>
        <td><a href="https://via.hypothes.is/http://doi.org/10.5524/100064" target="_blank"><img src="../images/hypothesis.png" id="logo-image"></a></td>
    </tr>
    <tr>
        <td>Public archive data: </td>
        <td><a href="http://www.ebi.ac.uk/ena/data/view/ERP000108" target="_blank">ERP000108</a></td>
        <td></td>
        <td><a href="https://via.hypothes.is/http://www.ebi.ac.uk/ena/data/view/ERP000108" target="_blank"><img src="../images/hypothesis.png" id="logo-image"></a></td>
    </tr>
    <tr>
        <td></td>
        <td><a href="http://www.ebi.ac.uk/ena/data/view/ERP002061" target="_blank">ERP002061</a></td>
        <td></td>
        <td><a href="https://via.hypothes.is/http://www.ebi.ac.uk/ena/data/view/ERP002061" target="_blank"><img src="../images/hypothesis.png" id="logo-image"></a></td>
    </tr>
    <tr>
        <td></td>
        <td><a href="http://www.ebi.ac.uk/ena/data/view/ERP003612" target="_blank">ERP003612</a></td>
        <td></td>
        <td><a href="https://via.hypothes.is/http://www.ebi.ac.uk/ena/data/view/ERP003612" target="_blank"><img src="../images/hypothesis.png" id="logo-image"></a></td>
    </tr>
    <tr>
        <td></td>
        <td><a href="http://www.ebi.ac.uk/ena/data/view/ERP004605" target="_blank">ERP004605</a></td>
        <td></td>
        <td><a href="https://via.hypothes.is/http://www.ebi.ac.uk/ena/data/view/ERP004605" target="_blank"><img src="../images/hypothesis.png" id="logo-image"></a></td>
    </tr>
    <tr>
        <td></td>
        <td><a href="http://www.ebi.ac.uk/ena/data/view/SRP002163" target="_blank">SRP002163</a></td>
        <td></td>
        <td><a href="https://via.hypothes.is/http://www.ebi.ac.uk/ena/data/view/SRP002163" target="_blank"><img src="../images/hypothesis.png" id="logo-image"></a></td>
    </tr>
    <tr>
        <td></td>
        <td><a href="http://www.ebi.ac.uk/ena/data/view/SRP011011" target="_blank">SRP011011</a></td>
        <td></td>
        <td><a href="https://via.hypothes.is/http://www.ebi.ac.uk/ena/data/view/SRP011011" target="_blank"><img src="../images/hypothesis.png" id="logo-image"></a></td>
    </tr>
    <tr>
        <td></td>
        <td><a href="http://www.ebi.ac.uk/ena/data/view/SRP008047" target="_blank">SRP008047</a></td>
        <td></td>
        <td><a href="https://via.hypothes.is/http://www.ebi.ac.uk/ena/data/view/SRP008047" target="_blank"><img src="../images/hypothesis.png" id="logo-image"></a></td>
    </tr>
</table>

<br>
<br>


<h2>De novo assembly using multiple technologies</h2>
<table>
    <tr>
        <td>Manuscript PMID</td>
        <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=26617983" target="_blank">26617983</a></td>
        <td><a href="http://iclikval.riken.jp/review-media/56a87b0fe3626525897b23ea" target="_blank"><img src="../images/iclikval.png" id="logo-image"></a></td>
        <td><a href="https://via.hypothes.is/https://europepmc.org/search?query=26617983" target="_blank"><img src="../images/hypothesis.png" id="logo-image"></a></td>

    </tr>
         <tr>
        <td>Manuscript DOI</td>
        <td><a href="http://doi.org/10.1186/s13742-015-0094-1" target="_blank">10.1186/s13742-015-0094-1</a></td>
        <td><a href="http://iclikval.riken.jp/review-media/56a87b0fe3626525897b23ea" target="_blank"><img src="../images/iclikval.png" id="logo-image"></a></td>
        <td><a href="https://via.hypothes.is/http://doi.org/10.1186/s13742-015-0094-1" target="_blank"><img src="../images/hypothesis.png" id="logo-image"></a></td>

    </tr>
            <tr>
        <td>Dataset DOI</td>
        <td><a href="http://doi.org/10.5524/100179" target="_blank">10.5524/100179</a></td>
        <td><a href="http://iclikval.riken.jp/review-media/56de7f33e3626593bff978ac" target="_blank"><img src="../images/iclikval.png" id="logo-image"></a></td>
        <td><a href="https://via.hypothes.is/http://doi.org/10.5524/100179" target="_blank"><img src="../images/hypothesis.png" id="logo-image"></a></td>
    </tr>
                <tr>
        <td>GitHub page</td>
        <td><a href="https://github.com/SciLifeLab/NouGAT/" target="_blank">https://github.com/SciLifeLab/NouGAT/</a></td>
        <td></td>
        <td><a href="https://via.hypothes.is/https://github.com/SciLifeLab/NouGAT/" target="_blank"><img src="../images/hypothesis.png" id="logo-image"></a></td>
    </tr>
</table>


<br>
<br>


<h2>Progression of esophageal squamous cell carcinoma</h2>
<table>
    <tr>
        <td>Manuscript PMID</td>
        <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=26759717" target="_blank">26759717</a></td>
        <td><a href="http://iclikval.riken.jp/review-media/56a875b3e3626541957b23dd" target="_blank"><img src="../images/iclikval.png" id="logo-image"></a></td>
        <td><a href="https://via.hypothes.is/https://europepmc.org/search?query=26759717" target="_blank"><img src="../images/hypothesis.png" id="logo-image"></a></td>

    <tr>
         <tr>
        <td>Manuscript DOI</td>
        <td><a href="http://doi.org/10.1186/s13742-015-0107-0" target="_blank">10.1186/s13742-015-0107-0</a></td>
        <td><a href="http://iclikval.riken.jp/review-media/56a875b3e3626541957b23dd" target="_blank"><img src="../images/iclikval.png" id="logo-image"></a></td>
        <td><a href="https://via.hypothes.is/http://doi.org/10.1186/s13742-015-0107-0" target="_blank"><img src="../images/hypothesis.png" id="logo-image"></a></td>

    <tr>
            <tr>
        <td>Dataset DOI</td>
        <td><a href="http://doi.org/10.5524/100181" target="_blank">10.5524/100181</a></td>
        <td><a href="http://iclikval.riken.jp/review-media/56de7f58e362658e05f978a2" target="_blank"><img src="../images/iclikval.png" id="logo-image"></a></td>
        <td><a href="https://via.hypothes.is/http://doi.org/10.5524/100181" target="_blank"><img src="../images/hypothesis.png" id="logo-image"></a></td>
    <tr>
                <tr>
        <td>Public archive data</td>
        <td><a href="https://www.ebi.ac.uk/ega/studies/EGAS00001001487" target="_blank">EGAS00001001487</a></td>
        <td></td>
        <td><a href="https://via.hypothes.is/https://www.ebi.ac.uk/ega/studies/EGAS00001001487" target="_blank"><img src="../images/hypothesis.png" id="logo-image"></a></td>
    <tr>
</table>
</div><!-- content -->
        </div>



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
