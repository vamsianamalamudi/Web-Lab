<!--
7. Write a PHP program to display a digital clock which displays the current time of the
server.
-->
<html>
<head>
<meta http-equiv="refresh" content="1"/>
<style>
p{
    color:white;
    font-size:90px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
body{
    background-color:black;
}
</style>
<p><?php echo date(" h: i : s A");?></p>
</head>
</html>
