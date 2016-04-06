<!DOCTYPE html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
        <!-- The jQuery library is a prerequisite for all jqSuite products -->
    <script type="text/ecmascript" src="http://www.annotometer.com/js/jquery-2.2.0.min.js"></script> 
    <!-- We support more than 40 localizations -->
    <script type="text/ecmascript" src="http://www.annotometer.com/js/trirand/i18n/grid.locale-en.js"></script>
    <!-- This is the Javascript file of jqGrid -->   
    <script type="text/ecmascript" src="http://www.annotometer.com/js/trirand/jquery.jqGrid.min.js"></script>
    <!-- This is the localization file of the grid controlling messages, labels, etc.
    <!-- A link to a jQuery UI ThemeRoller theme, more than 22 built-in and many more custom -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> 
    <!-- The link to the CSS that the grid needs -->
    <link rel="stylesheet" type="text/css" media="screen" href="http://www.annotometer.com/css/ui.jqgrid-bootstrap.css" />
	<script>
		$.jgrid.defaults.width = 780;
		$.jgrid.defaults.styleUI = 'Bootstrap';
                
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<head>
    <!--
    Originally created by Artisteer, adapted by GigaDB
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>Annotometer </title>

    <link rel="stylesheet" href="http://www.annotometer.com/css/style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="http://www.annotometer.com/js/script.js"></script>
</head>
<body>
  <img id="myModal" src="../images/annotometer_logo_frosty.png" class="modal fade" style="width: 1150px; height: 200px; position: fixed; top:50%; left: 10%; margin-top: -50px">
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
								<li><a href="./index.php/leaderboard">Leaderboard</a></li>
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
							<!-- Content -->
                                   
                                             


        
    <p>Total Annotations</p>                                                     
    <h1 id="annotations" style="margin-left:10px"></h1>

<?php
        if(Yii::app()->user->id === "only1chunts"||Yii::app()->user->id === "xiaosizhe")
        {?>
        <a class="btn" href="./leaderboard/search"><?php echo "Admin";?></a>
	<a href="#" id="pop">Stop Program</a>             
        <?php
        }
        ?>    
            
<div style="margin-left:10px; margin-top:10px;padding:20px">
    <table id="jqGrid"></table>
    <div id="jqGridPager" style="height: 40px"></div>
</div>




    
<br>
<br>
    
<div id="container" style="margin-left:15px; width: 800px; height: 300px; float:left;"></div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


   
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script type="text/javascript"> 
   
	        $("#pop").on("click", function(e) {
   e.preventDefault();
   $('#myModal').modal('toggle');
}); 
        $(document).ready(function () {
            $("#jqGrid").jqGrid({
                colModel: [
                    {
						label: 'UserName',
                        name: 'Username',
                        width: 70,
                    
                    },
                    {
						label: 'Hypothes.is',
                        name: 'NumbHy',
                        width: 30,
                   
                    },
                    {
						label: 'iCLiKVAL',
                        name: 'NumbIc',
                        width: 30,
                   
                    },
                    {
						label: 'Total',
                        name: 'Total',
                        width: 70,
                   
                    }
                ],

                viewrecords: true, // show the current page, data rang and total records on the toolbar
                width: 780,
                height: 400,
                rowNum: 10,
				datatype: 'local',
                pager: "#jqGridPager",
				caption: "Annotation Ranking"
            });
            
            var users;
            var preloads;
            var totalnumb=0;
            
            var showtotal=0;
            var showtotalnew=0;
            
            var showtotal1=0;
            var showtotalnew1=0;
            
            var showtotal2=0;
            var showtotalnew2=0;
            
            var preload = [];
            readTextFile1('http://www.annotometer.com/file/test1.txt');
            preload = preloads.split(/\n/);
            preload = preload.slice(-20);
            
            console.log(preload);
            
            var gridArrayData = [];  
            var hy=0;
            var ic=0;
            var  totaluserlist=[];
            fetchGridData();
            setInterval(function(){fetchGridData();}, 60000);
           
            
            function fetchGridData() {
            readTextFile('http://www.annotometer.com/file/test.txt');
            
            
            var total = users.split(/\n/);
            console.log(total);
           
       
            $("#jqGrid")[0].grid.beginReq();
            for (var tt in total)
            {
              
             
                var tt1= total[tt].split("&*&");
                if(tt1.length > 1){
                totaluserlist.push({
                   Username: tt1[0],
                   HypothesID: tt1[1],
                   IclickvalID: tt1[2],
                   NumbHy: tt1[3],
                   NumbIc: tt1[4],
                   Total: parseInt(tt1[5])
               });
                }
                else{
                    
                 var tt2= total[tt].split(":");
                 if(tt2[0] == 'SUMTOTAL')
                 {
                     console.log(tt2[1]);
		     if(tt2[1]<preload[19])
			{
			tt2[1]=preload[19];
			}
                     if(showtotal == 0){
                     showtotal = tt2[1];
                     showtotalnew = showtotal;
		document.getElementById("annotations").innerHTML = showtotal;
                    }
                    else
                    {
                     showtotal= showtotalnew;
                     showtotalnew = tt2[1];
		document.getElementById("annotations").innerHTML = showtotalnew;
                    }
                 
                 }else if(tt2[0] == 'TOTALHY')
                 {
                     console.log(tt2[1]);
                     if(showtotal1 == 0){
                     showtotal1 = tt2[1];
                     showtotalnew1 = showtotal1;
                    }
                    else
                     {
                     showtotal1= showtotalnew1;
                     showtotalnew1 = tt2[1];
                    }
                 
                 }else if(tt2[0] == 'TOTALIC')
                 {
                     console.log(tt2[1]);
                     if(showtotal2 == 0){
                     showtotal2 = tt2[1];
                     showtotalnew2 = showtotal2;
                    }
                    else
                    {
                     showtotal2= showtotalnew2;
                     showtotalnew2 = tt2[1];
                    }
                 
                 }
                 
                 
                    
                }
              
              
 
            }
           
	    //console.log(gridArrayData);	
            sortByKey(totaluserlist,'Total');
            
            $("#jqGrid").jqGrid('setGridParam', { data: totaluserlist});
						// hide the show message
            $("#jqGrid")[0].grid.endReq();
						// refresh the grid
            $("#jqGrid").trigger('reloadGrid');
            gridArrayData = [];  
            users="";
            
          
            
            totaluserlist=[];
           
           
                    
            }
            
        
          
            function sortByKey(array, key) {
                return array.sort(function(a, b) {
                    var x = a[key]; var y = b[key];
                    return ((x < y) ? -1 : ((x > y) ? 1 : 0))*-1;
                });
            }
            
            function hypothes(username){  
                var xhttp = new XMLHttpRequest();
                var numb=0;
                xhttp.onreadystatechange = function() {
                 if (xhttp.readyState == 4 && xhttp.status == 200) {
                   var Jsonfile= JSON.parse(xhttp.responseText);
                   numb= Jsonfile.total;
                    gridArrayData.push({
                                UserName: username,
                                Annotations: numb
                             
                            });  
                   

                 }
               };
               var url="https://hypothes.is/api/search?user=" + username + "&sort=created&order=asc";
               xhttp.open("GET", url, true);
               xhttp.send();
               return numb;
            }

            function readTextFile(file)
        {
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", file+'?_='+new Date().getTime(), false);
    rawFile.onreadystatechange = function ()
    {
        if(rawFile.readyState === 4)
        {
            if(rawFile.status === 200 || rawFile.status == 0)
            {
                var allText = rawFile.responseText;
                users = allText;
                
            }
        }
    }
    rawFile.send(null);
    }
    
             function readTextFile1(file)
        {
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", file+'?_='+new Date().getTime(), false);
    rawFile.onreadystatechange = function ()
    {
        if(rawFile.readyState === 4)
        {
            if(rawFile.status === 200 || rawFile.status == 0)
            {
                var allText = rawFile.responseText;
                preloads = allText;
                
            }
        }
    }
    rawFile.send(null);
    }



           Highcharts.setOptions({
            global: {
                useUTC: false
            }
        });

        $('#container').highcharts({
            chart: {
                type: 'spline',
                animation: Highcharts.svg, // don't animate in old IE
                marginRight: 10,
                events: {
                    load: function () {

                        // set up the updating of the chart each second
                        var series = this.series[0];
                          var x = (new Date()).getTime(), // current time
                              y = parseInt(showtotalnew);
                            series.addPoint([x, y], true, true);
                        setInterval(function () {
                           // readTextFile1('./file/test');
                           // console.log(totalnumb);
                            var x = (new Date()).getTime(), // current time
                                y = parseInt(showtotalnew);
                            series.addPoint([x, y], true, true);
                        }, 1800000);
                    }
                }
            },
            title: {
                text: 'Total Annotation increase'
            },
            xAxis: {
                type: 'datetime',
                tickPixelInterval: 15
            },
            yAxis: {
                title: {
                    text: 'Value'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + '</b><br/>' +
                        Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) + '<br/>' +
                        Highcharts.numberFormat(this.y);
                }
            },
            legend: {
                enabled: false
            },
            exporting: {
                enabled: false
            },
            series: [{
                name: 'Annotation number',
                data: (function () {
                    // generate an array of random data
                    var data = [],
                        time = (new Date()).getTime()
                        
                         for (i = -19; i <= 0; i += 1) {
                             var j=i+19;
                        data.push({
                            x: time + i * 1800000,
                            y: Number(preload[j])
                        });
                    }
                    
                    return data;
                }())
            }]
        });
        
                $('#container1').highcharts({
            chart: {
                type: 'spline',
                animation: Highcharts.svg, // don't animate in old IE
                marginRight: 10,
                events: {
                    load: function () {

                        // set up the updating of the chart each second
                        var series = this.series[0];
                        setInterval(function () {
                           // readTextFile1('./file/test');
                           // console.log(totalnumb);
                            var x = (new Date()).getTime(), // current time
                                y = parseInt(showtotalnew1-showtotal1);
                            series.addPoint([x, y], true, true);
                        }, 60000);
                    }
                }
            },
            title: {
                text: 'Hypothesis Annotation'
            },
            xAxis: {
                type: 'datetime',
                tickPixelInterval: 15
            },
            yAxis: {
                title: {
                    text: 'Value'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + '</b><br/>' +
                        Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) + '<br/>' +
                        Highcharts.numberFormat(this.y);
                }
            },
            legend: {
                enabled: false
            },
            exporting: {
                enabled: false
            },
            series: [{
                name: 'Random data',
                data: (function () {
                    // generate an array of random data
                    var data = [],
                        time = (new Date()).getTime(),
                        i;

                    for (i = -19; i <= 0; i += 1) {
                        data.push({
                            x: time + i * 60000,
                            y: 0
                        });
                    }
                    return data;
                }())
            }]
        });
        
        
             $('#container2').highcharts({
            chart: {
                type: 'spline',
                animation: Highcharts.svg, // don't animate in old IE
                marginRight: 10,
                events: {
                    load: function () {

                        // set up the updating of the chart each second
                        var series = this.series[0];
                        setInterval(function () {
                           // readTextFile1('./file/test');
                           // console.log(totalnumb);
                            var x = (new Date()).getTime(), // current time
                                y = parseInt(showtotalnew2-showtotal2);
                            series.addPoint([x, y], true, true);
                        }, 1800000);
                    }
                }
            },
            title: {
                text: 'iClickVal Annotation'
            },
            xAxis: {
                type: 'datetime',
                tickPixelInterval: 15
            },
            yAxis: {
                title: {
                    text: 'Value'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + '</b><br/>' +
                        Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) + '<br/>' +
                        Highcharts.numberFormat(this.y);
                }
            },
            legend: {
                enabled: false
            },
            exporting: {
                enabled: false
            },
            series: [{
                name: 'Random data',
                data: (function () {
                    // generate an array of random data
                    var data = [],
                        time = (new Date()).getTime(),
                        i;

                    for (i = -19; i <= 0; i += 1) {
                        data.push({
                           // x: time + i * 60000,
                            x: time + i * 1800000,
                            y: 0
                        });
                    }
                    return data;
                }())
            }]
        });




        });

    </script>

    

							
							
							
							
							<!-- End Content -->
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


