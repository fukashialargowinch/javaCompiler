<!DOCTYPE html>
<html>
<head>


        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>thesmileyworld</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/font-awesome.min.css">
        <link rel="stylesheet" href="bootstrap/css/normalize.css">
        <link rel="stylesheet" href="bootstrap/css/main.css">
        <link rel="stylesheet" href="bootstrap/css/style.css">

        <script src="js0/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js0/vendor/jquery-1.12.0.min.js"></script>








</head>
<body>
<div class="main">

  <div class="row">
  <div class="col-sm-12">
  <nav class="navbar navbar-inverse navbar-fixed-top nbar">
   
</nav>
</div>
</div>


<div class="row log">
<div class="col-sm-10">
<div class=""><h3 style="text-align:center;">Online Compiler</h3></div>
</div>

<div class="col-sm-1">

</div>

<div class="col-sm-1">

</div>

</div>

<div class="container">
  <div class="row">
    <div class="col-md-1"></div>
     <div class="col-md-6">
       <div class="form-group">
<form action="../compilers/java.php" id="form" name="f2" method="POST" >



</select><br><br>

<label for="ta">Write Your Code</label>

<textarea class="form-control" name="code" rows="10" cols="50">
  class Main{
    public static void main(String [] abc){
      System.out.println("hello java");
    }
  }
</textarea><br><br>
</div>
     </div>
      <div class="col-md-4">
        <label for="in" style="    margin-top: 39px;
">Enter Your Input</label>
<textarea class="form-control" name="input" rows="10" cols="50" style="    height: 217px;
    margin-top: -2px;"></textarea><br><br>
<input type="submit" id="st" class="btn btn-success" value="Run Code" style="margin-top:-39px"><br><br><br>


</form>
      </div>
     <div class="col-md-1"></div>
  </div>
</div>



<script type="text/javascript">

  $(document).ready(function(){

     $("#st").click(function(){

           $("#div").html("Loading ......");


     });

  });


</script>

<script>
//wait for page load to initialize script
$(document).ready(function(){
    //listen for form submission
    $('form').on('submit', function(e){
      //prevent form from submitting and leaving page
      e.preventDefault();

      // AJAX
      $.ajax({
            type: "POST", //type of submit
            cache: false, //important or else you might get wrong data returned to you
            // url: "compile.php", //destination
            url: "compilers/java.php",

            datatype: "html", //expected data format from process.php
            data: $('form').serialize(), //target your form's data and serialize for a POST
            success: function(result) { // data is the var which holds the output of your process.php

                // locate the div with #result and fill it with returned data from process.php
                $('#div').html(result);
            }
        });
    });
});
</script>

<label for="out">Output</label>
<textarea id='div' class="form-control" name="output" rows="10" cols="50"></textarea><br><br>





</div>
</div>

<div class="col-sm-4">


</div>
</div>
</div>
<br><br><br>
<div class="area">
<div class="well foot">
<div class="row area">
<div class="col-sm-3">

</center>


</div>

<div class="col-sm-5">


<div class="fm">



</div>
</div>


<div class="col-sm-4">
</div>
</div>
</div>
</div>
</body>
</html>
