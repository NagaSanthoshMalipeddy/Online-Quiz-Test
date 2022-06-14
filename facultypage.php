<?php
session_start();
if(!isset($_SESSION['fid'])){
  header("location:site.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Hello</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Administrator portal</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown" style="margin-left: 1200px;">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a style="color: aliceblue;" class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php echo $_SESSION['fname'];?>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="AddUser.php">Add User</a></li>
                <a class="dropdown-item" href="viewusers.php">View Users</a></li>
                  <li><a class="dropdown-item" href="facultyprofile.php">My Profile</a></li>
                  <li><a class="dropdown-item" id="logout" href="site.php">Log out</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container" style="margin-top:20px;background-color: black;border: solid 2px;border-radius:10px;padding-left: 20px;padding-top: 20px;padding-bottom: 20px;padding-right: 20px;">
        <h1 style="color: aliceblue;">Java</h1>
        <div class="row">
          <div class="col-lg-3" style="border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:220px;width:400px;">
            <h2 style="margin-left: 140px;margin-top: 25px;">Test1</h2>
            <button style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary" id="je1"> Edit Test</button>
            <div style="margin-left: 100px;margin-top: 15px;">
                <a href="je1u.html"><button class="btn btn-primary btn-sm" id="je1u" style="margin-right: 20px;" onclick="je1u.html">Update</button></a>
                <button class="btn btn-primary btn-sm" id="je1d">Delete</button>
                </div>
          </div>
          <div class="col-lg-3" style="margin-left: 20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:220px;width:400px;">
            <h2 style="margin-left: 140px;margin-top: 25px;">Test2</h2>
            <button style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary" id="je2"> Edit Test</button>
            <div style="margin-left: 100px;margin-top: 15px;">
            <a href="je2u.html"><button class="btn btn-primary btn-sm" id="je2u" style="margin-right: 20px;" onclick="je2u.html">Update</button></a>
                <button class="btn btn-primary btn-sm" id="je2d">Delete</button>
                </div>
        </div>
          <div class="col-lg-3" style="margin-left: 20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:220px;width:400px;">
            <h2 style="margin-left: 140px;margin-top: 25px;">Test3</h2>
            <button style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary" id="je3"> Edit Test</button>
            <div style="margin-left: 100px;margin-top: 15px;">
            <a href="je3u.html"><button class="btn btn-primary btn-sm" id="je3u" style="margin-right: 20px;" onclick="je3u.html">Update</button></a>    
            <button class="btn btn-primary btn-sm" id="je3d">Delete</button>
                </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-3 " style="margin-top:20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:220px;width:400px;">
          <h2 style="margin-left: 140px;margin-top: 25px;">Test4</h2>
          <button style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary" id="je4"> Edit Test</button>
          <div style="margin-left: 100px;margin-top: 15px;">
          <a href="je4u.html"><button class="btn btn-primary btn-sm" id="je4u" style="margin-right: 20px;" onclick="je4u.html">Update</button></a>
            <button class="btn btn-primary btn-sm" id="je4d">Delete</button>
            </div>
        </div>
        <div class="col-lg-3" style="margin-top:20px;margin-left: 20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:220px;width:400px;">
          <h2 style="margin-left: 140px;margin-top: 25px;">Test5</h2>
          <button style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary" id="je5"> Edit Test</button>
          <div style="margin-left: 100px;margin-top: 15px;">
          <a href="je5u.html"><button class="btn btn-primary btn-sm" id="je5u" style="margin-right: 20px;" onclick="je5u.html">Update</button></a>
            <button class="btn btn-primary btn-sm" id="je5d">Delete</button>
            </div>
        </div>
        </div>

      </div>
      <div class="container" style="margin-top:20px;background-color: black;border: solid 2px;border-radius:10px;padding-left: 20px;padding-top: 20px;padding-bottom: 20px;padding-right: 20px;">
        <h1 style="color: aliceblue;">Python</h1>
        <div class="row">
          <div class="col-lg-3 " style="border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:220px;width:400px;">
            <h2 style="margin-left: 140px;margin-top: 25px;">Test1</h2>
            <button style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary" id="pe1"> Edit Test</button>
            <div style="margin-left: 100px;margin-top: 15px;">
            <a href="pe1u.html"><button class="btn btn-primary btn-sm" id="pe1u" style="margin-right: 20px;" onclick="pe1u.html">Update</button></a>
                <button class="btn btn-primary btn-sm" id="pe1d">Delete</button>
                </div>
        </div>
          <div class="col-lg-3" style="margin-left: 20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:220px;width:400px;">
            <h2 style="margin-left: 140px;margin-top: 25px;">Test2</h2>
            <button style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary" id="pe2">Edit Test</button>
            <div style="margin-left: 100px;margin-top: 15px;">
            
            <a href="pe2u.html"><button class="btn btn-primary btn-sm" id="pe2u" style="margin-right: 20px;" onclick="pe2u.html">Update</button></a>
                <button class="btn btn-primary btn-sm" id="pe2d">Delete</button>
                </div>
        </div>
          <div class="col-lg-3" style="margin-left: 20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:220px;width:400px;">
            <h2 style="margin-left: 140px;margin-top: 25px;">Test3</h2>
            <button style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary" id="pe3"> Edit Test</button>
            <div style="margin-left: 100px;margin-top: 15px;">
            
            <a href="pe3u.html"><button class="btn btn-primary btn-sm" id="pe3u" style="margin-right: 20px;" onclick="pe3u.html">Update</button></a>
                <button class="btn btn-primary btn-sm" id="pe3d">Delete</button>
                </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-3 " style="margin-top:20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:220px;width:400px;">
          <h2 style="margin-left: 140px;margin-top: 25px;">Test4</h2>
          <button style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary" id="pe4"> Edit Test</button>
          <div style="margin-left: 100px;margin-top: 15px;">
          
          <a href="pe4u.html"><button class="btn btn-primary btn-sm" id="pe4u" style="margin-right: 20px;" onclick="pe4u.html">Update</button></a>  
          <button class="btn btn-primary btn-sm" id="pe4d">Delete</button>
            </div>
        </div>
        <div class="col-lg-3" style="margin-top:20px;margin-left: 20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:220px;width:400px;">
          <h2 style="margin-left: 140px;margin-top: 25px;">Test5</h2>
          <button style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary" id="pe5"> Edit Test</button>
          <div style="margin-left: 100px;margin-top: 15px;">
          
          <a href="pe5u.html"><button class="btn btn-primary btn-sm" id="pe5u" style="margin-right: 20px;" onclick="pe5u.html">Update</button></a>  
          <button class="btn btn-primary btn-sm" id="pe5d">Delete</button>
            </div>
        </div>
        </div>

      </div>
      <div class="container" style="margin-top:20px;margin-bottom: 20px;background-color: black;border: solid 2px;border-radius:10px;padding-left: 20px;padding-top: 20px;padding-bottom: 20px;padding-right: 20px;">
        <h1 style="color: aliceblue;">C++</h1>
        <div class="row">
          <div class="col-lg-3 " style="border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:220px;width:400px;">
            <h2 style="margin-left: 140px;margin-top: 25px;">Test1</h2>
            <button style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary" id="ce1"> Edit Test</button>
            <div style="margin-left: 100px;margin-top: 15px;">
            
            <a href="ce1u.html"><button class="btn btn-primary btn-sm" id="ce1u" style="margin-right: 20px;" onclick="ce1u.html">Update</button></a>    
            <button class="btn btn-primary btn-sm" id="ce1d">Delete</button>
                </div>
        </div>
          <div class="col-lg-3" style="margin-left: 20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:220px;width:400px;">
            <h2 style="margin-left: 140px;margin-top: 25px;">Test2</h2>
            <button style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary" id="ce2"> Edit Test</button>
            <div style="margin-left: 100px;margin-top: 15px;">
            <a href="ce2u.html"><button class="btn btn-primary btn-sm" id="ce2u" style="margin-right: 20px;" onclick="ce2u.html">Update</button></a>    
               
            <button class="btn btn-primary btn-sm" id="ce2d">Delete</button>
                </div>
        </div>
          <div class="col-lg-3" style="margin-left: 20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:220px;width:400px;">
            <h2 style="margin-left: 140px;margin-top: 25px;">Test3</h2>
            <button style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary" id="ce3">Edit Test</button>
                <div style="margin-left: 100px;margin-top: 15px;">
                <a href="ce3u.html"><button class="btn btn-primary btn-sm" id="ce3u" style="margin-right: 20px;" onclick="ce3u.html">Update</button></a>    
                
                <button class="btn btn-primary btn-sm" id="ce3d">Delete</button>
                    </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-3 " style="margin-top:20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:220px;width:400px;">
          <h2 style="margin-left: 140px;margin-top: 25px;">Test4</h2>
          <button style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary" id="ce4"> Edit Test</button>
          <div style="margin-left: 100px;margin-top: 15px;">
          <a href="ce4u.html"><button class="btn btn-primary btn-sm" id="ce4u" style="margin-right: 20px;" onclick="ce4u.html">Update</button></a>    
            
            <button class="btn btn-primary btn-sm" id="ce4d">Delete</button>
            </div>
        </div>
        <div class="col-lg-3" style="margin-top:20px;margin-left: 20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:220px;width:400px;">
          <h2 style="margin-left: 140px;margin-top: 25px;">Test5</h2>
          <button style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary" id="ce5"> Edit Test</button>
          <div style="margin-left: 100px;margin-top: 15px;">
          <a href="ce5u.html"><button class="btn btn-primary btn-sm" id="ce5u" style="margin-right: 20px;" onclick="ce5u.html">Update</button></a>    
            
            <button class="btn btn-primary btn-sm" id="ce5d">Delete</button>
            </div>
        </div>
        </div>

      </div>
          
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
  <script>
      $(document).ready(function(){
          $("#je1u").hide();
          $('#je1d').hide();
          $("#je2u").hide();
          $('#je2d').hide();
          $("#je3u").hide();
          $('#je3d').hide();
          $("#je4u").hide();
          $('#je4d').hide();
          $("#je5u").hide();
          $('#je5d').hide();
          $("#pe1u").hide();
          $('#pe1d').hide();
          $("#pe2u").hide();
          $('#pe2d').hide();
          $("#pe3u").hide();
          $('#pe3d').hide();
          $("#pe4u").hide();
          $('#pe4d').hide();
          $("#pe5u").hide();
          $('#pe5d').hide();
          $("#ce1u").hide();
          $('#ce1d').hide();
          $("#ce2u").hide();
          $('#ce2d').hide();
          $("#ce3u").hide();
          $('#ce3d').hide();
          $("#ce4u").hide();
          $('#ce4d').hide();
          $("#ce5u").hide();
          $('#ce5d').hide();
          $("#je1").click(function(){
              $("#je1u").toggle();
              $("#je1d").toggle();
          });
          $("#je2").click(function(){
              $("#je2u").toggle();
              $("#je2d").toggle();
          });
          $("#je3").click(function(){
              $("#je3u").toggle();
              $("#je3d").toggle();
          });
          $("#je4").click(function(){
              $("#je4u").toggle();
              $("#je4d").toggle();
          });
          $("#je5").click(function(){
              $("#je5u").toggle();
              $("#je5d").toggle();
          });
          $("#pe1").click(function(){
              $("#pe1u").toggle();
              $("#pe1d").toggle();
          });
          $("#pe2").click(function(){
              $("#pe2u").toggle();
              $("#pe2d").toggle();
          });
          $("#pe3").click(function(){
              $("#pe3u").toggle();
              $("#pe3d").toggle();
          });
          $("#pe4").click(function(){
              $("#pe4u").toggle();
              $("#pe4d").toggle();
          });
          $("#pe5").click(function(){
              $("#pe5u").toggle();
              $("#pe5d").toggle();
          });
          $("#ce1").click(function(){
              $("#ce1u").toggle();
              $("#ce1d").toggle();
          });
          $("#ce2").click(function(){
              $("#ce2u").toggle();
              $("#ce2d").toggle();
          });
          $("#ce3").click(function(){
              $("#ce3u").toggle();
              $("#ce3d").toggle();
          });
          $("#ce4").click(function(){
              $("#ce4u").toggle();
              $("#ce4d").toggle();
          });
          $("#ce5").click(function(){
              $("#ce5u").toggle();
              $("#ce5d").toggle();
          });
      });
      
  </script>
</html>