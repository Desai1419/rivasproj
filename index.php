<html>
 <head>
  <style>
    body {
 background-image: url("https://imelgrat.me/wp-content/uploads/2019/07/random-numbers-mysql.jpg");
  background-repeat: no-repeat;
     background-size: 100% 100%;
   }
  </style>
 </head>
<body>

 <center><font color="white"><p id="one"></p></font></center>
 <center><button onclick="random()">Random Numbers</button></center>

<script>
 function random(){

document.getElementById("one").innerHTML = Math.floor(Math.random() * 9999999) + 1;
}

</script>

</body>
