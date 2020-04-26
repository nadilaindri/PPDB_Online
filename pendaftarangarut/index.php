<!DOCTYPE html>
<html>
<head>
	<title>PPBD Online</title>
</head>
 <script type='text/javascript'>
var intval = null;
var pos = 0;
$(document).ready(function() {
intval = window.setInterval(moveBg, 70);
});
function moveBg() {
pos++; 
$('.buttonz').css({backgroundPosition: (pos * 1) + '% 1px'});
}
  </script> 
<body>
	
	<body style = "background-color: #">
	<center><img src="image/images.jpg" style="display: block; width:100px; height:100px;"></center>
	<tr>
        <td colspan=3><center><font size=5>Pendaftaran PPBD Online</font></center></td>
        </tr>
       <a class='buttonz' href='master/formulir.php' target='_blank'>Daftar</a>
        <style type="text/css">
.buttonz{
display:inline-flex;
border-radius:4px;
cursor:pointer;
font-size:13px;
font-weight:bold;
text-transform:uppercase;
color:#FFF!important;
background:url(http://1.bp.blogspot.com/-8ajTcOaRwVU/VJ_Z9jExy2I/AAAAAAAAAwg/b-ae25VRCHM/s1600/rainbow.png);
background-size:cover;
padding:8px 25px;
text-shadow:none;
transition:all 1s;
margin-left:625px;
}
.buttonz:hover, .buttonz:hover, .buttonz.link:hover {
box-shadow: 0px 0px 18px 18px rgba(80, 80, 80, 0);
}

</body>
</html>