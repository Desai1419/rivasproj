<html>
<body>

 <center><p id="one"></p></center>
 <center><button onclick="random()">Random Numbers</button></center>

<script>
 function random(){

document.getElementById("one").innerHTML = Math.floor(Math.random() * 100000) + 1;
}

</script>

</body>
