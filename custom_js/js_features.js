<!DOCTYPE html>
<html lang="en">
<head>
  <title>Custom Javascript</title>
  <meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1">   
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css"> -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 

  <style>
      
.first_design {

}

  </style>
  
</head>
<body>

<div class="first_design">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <h1 id="demo_loop"></h1>
                <br><br>
                <p id="demo_loops"></p> 
            </div>

            <div class="col-lg-6 col-12">  
                <p id="demo2"></p> 
            </div>
        </div>
    </div>
</div>

<!-- <script src="js/jquery.min.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script>  -->                                      

<script> 
    
var cars = ["Bmw", "Ferrary", "Toyata", "Sedaan", "Safari"];
var text = "";
var i;
for(i = 0; i < cars.length; i++) { 
    text += cars[i] + "<br>";       
}

document.getElementById('demo_loop').innerHTML = text;           

// second for loop

var texts = "";
var a;
for (a = 0; a < 5; a++) {
    texts += "This Number is :" + a + "<br>";
}                       

document.getElementById('demo_loops').innerHTML = texts; 

// third loop

var cars = ["BMW", "Volvo", "Saab", "Ford"];
var i, len, text;
for (i = 0, len = cars.length, text = ""; i < len; i++) {
  text += cars[i] + "<br>";
}
document.getElementById("demo2").innerHTML = text;

                         

</script>

</body>
</html>











