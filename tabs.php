<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ultra simple jQuery tabs</title>
<style type="text/css">
body {
    font-family:Arial, Helvetica, sans-serif;
    height:800px;
    padding-top:200px;
}
#wrapper {
    width:250px;
}
ul.tabs {
    width:250px;
    margin:0;
    padding:0;
}
ul.tabs li {
    display:block;
    float:left;
    padding:0 5px;
}
ul.tabs li a {
    display:block;
    float:left;
    padding:5px;
    font-size:0.8em;
    background-color:#e0e0e0;
    color:#666;
    text-decoration:none;
}
.selected {
    font-weight:bold;
}
.tab-content {
	clear:both;
    border:1px solid #ddd;
    padding:10px;
}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript">
<!--
$(document).ready(function() {

	$('.tabs a').click(function(){
		switch_tabs($(this));
	});

	switch_tabs($('.defaulttab'));

});

function switch_tabs(obj)
{
	$('.tab-content').hide();
	$('.tabs a').removeClass("selected");
	var id = obj.attr("rel");

	$('#'+id).show();
	obj.addClass("selected");
}
//-->
</script>
</head>

<body>

<div id="wrapper">

    <ul class="tabs">
        <li><a href="#" class="defaulttab" rel="tabs1">Book Taxi</a></li>
        <li><a href="#" rel="tabs2">Taxi Status</a></li>
    </ul>

    <div class="tab-content" id="tabs1">Taxi booking form</div>
    <div class="tab-content" id="tabs2">User Info form</div>
</div>
</body>
</html>
