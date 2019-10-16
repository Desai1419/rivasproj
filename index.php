<html>
 <head>
  <style>
    body {
 background-image: url("https://imelgrat.me/wp-content/uploads/2019/07/random-numbers-mysql.jpg");
  background-repeat: no-repeat;
     background-size: 100% 100%;
   }
  </style>
  <style>
.example1 {
 height: 50px;	
 overflow: hidden;
 position: relative;
}
.example1 h3 {
 font-size: 3em;
 color: limegreen;
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 line-height: 50px;
 text-align: center;
 /* Starting position */
 -moz-transform:translateX(100%);
 -webkit-transform:translateX(100%);	
 transform:translateX(100%);
 /* Apply animation to this element */	
 -moz-animation: example1 15s linear infinite;
 -webkit-animation: example1 15s linear infinite;
 animation: example1 15s linear infinite;
}
/* Move it (define the animation) */
@-moz-keyframes example1 {
 0%   { -moz-transform: translateX(100%); }
 100% { -moz-transform: translateX(-100%); }
}
@-webkit-keyframes example1 {
 0%   { -webkit-transform: translateX(100%); }
 100% { -webkit-transform: translateX(-100%); }
}
@keyframes example1 {
 0%   { 
 -moz-transform: translateX(100%); /* Firefox bug fix */
 -webkit-transform: translateX(100%); /* Firefox bug fix */
 transform: translateX(100%); 		
 }
 100% { 
 -moz-transform: translateX(-100%); /* Firefox bug fix */
 -webkit-transform: translateX(-100%); /* Firefox bug fix */
 transform: translateX(-100%); 
 }
}
</style>

<!-- HTML -->	
<div class="index">
<h3>Fuck you </h3>
</div>
 </head>
<body>

 <center><font color="white"><p id="one"></p></font></center>
 <center><button onclick="random()">Press to Reveal Random Numbers</button></center>
 <center><font color="white"><h2>TEST YOUR LUCK AND GET 42069 OR 69420 TO PASS THIS SEM</h2></font></center>

<script>
 function random(){

document.getElementById("one").innerHTML = Math.floor(Math.random() * 99999) + 1;
}

</script>

</body>
