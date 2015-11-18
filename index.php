<!DOCTYPE html>
<html ng-app>
<head>
<meta charset=utf-8 />
<meta name="description" content="description"> 
<title>Banner</title>
<link href="css/style.css" rel="stylesheet">
<!-- <link href="css/font-awesome.css" rel="stylesheet"> -->
<link rel="stylesheet" href="colorpicker.css" type="text/css" />
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head> 

<body>
<div class="header clearfix">
    <div class="logo">Custom Page Builder</div>
    <a href="#" id="copyCode">Copy Code</a>
</div>
<div class="wrapper clearfix">
    <div class="lColumn">
        <div id="accordian">
            <ul class="colorpic">
                <li>
                    <h2>Select Pages</h2>
                </li>
                <li class="brdrNone">
                    <h3>Landing</h3>
                    <div class="innContent dNone">
                        <div>Desktop landing</div>
                        <div>Mobile landing</div>
                        <div>Tablet landing</div>
                    </div>
                </li>
                <li class="brdrNone">
                    <h3>Results</h3>
                    <div class="innContent dNone">
                        <div>Desktop Results</div>
                        <div>Mobile Results</div>
                        <div>Tablet Results</div>
                    </div>
                </li>
                <li class="brdrNone">
                    <h3>No Results</h3>
                    <div class="innContent dNone">
                        <div>Desktop No Results</div>
                        <div>Mobile No Results</div>
                        <div>Tablet No Results</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="mainColumn">
        <h2>Page Layout</h2>
        <div ng-controller class="">
            <div class="headPart">asdasda</div>
            <div class="contentPart">asdasd</div>
            <div class="footerPart">asdasd</div>

        </div>
    </div>
    <div class="rColumn">
        <h2>Pannel</h2>
    </div>
</div> 

<script src="jquery-1.11.0.min.js"></script>
<script type="text/javascript">
$( document ).ready(function() {
    $("#accordian li h3").click(function(){
        //slide up all the link lists
        $("#accordian ul .innContent").slideUp();
        //slide down the link list below the h3 clicked - only if its closed
        if(!$(this).next().is(":visible"))
        {
            $(this).next().slideDown();
        }
    });
});
</script>
</body>
</html>