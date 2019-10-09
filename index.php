<html>
<body>

 <center><p id="one"></p></center>
 <center><button onclick="random()">Random Number from 1-10</button></center>

<script>
 function random(){

document.getElementById("one").innerHTML = Math.floor(Math.random() * 10);
}

</script>

</body>
