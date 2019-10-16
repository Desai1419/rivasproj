<html>
 <head>
  <style>
    body {
 background-image: url("https://imelgrat.me/wp-content/uploads/2019/07/random-numbers-mysql.jpg");
  background-repeat: no-repeat;
     background-size: 100% 100%;
   }
  </style>
</div>
 </head>
<body>

 <marquee behavior="scroll" direction="right">Here is some scrolling text... left to right!</marquee>
 
 <center><font color="white"><p id="one"></p></font></center>
 <center><button onclick="random()">Press to Reveal Random Numbers</button></center>
 <center><font color="white"><h2>TEST YOUR LUCK AND GET 42069 OR 69420 TO PASS THIS SEM</h2></font></center>

<script>
 function random(){

document.getElementById("one").innerHTML = Math.floor(Math.random() * 99999) + 1;
}

</script>

</body>
