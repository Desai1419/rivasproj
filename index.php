<html>
<body>
 body {
 background-image: url("https://images.immediate.co.uk/production/volatile/sites/4/2018/08/GettyImages-667585631use-a3986be.jpg?quality=45&crop=6px,65px,928px,399px&resize=960,413");
}

 <center><p id="one"></p></center>
 <center><button onclick="random()">Random Numbers</button></center>

<script>
 function random(){

document.getElementById("one").innerHTML = Math.floor(Math.random() * 9999999) + 1;
}

</script>

</body>
