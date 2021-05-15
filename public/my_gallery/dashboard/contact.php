<?php

    require "session.php";
    require '../connect.php';
 
    class View
    {
      public $result;
      public $con;
      function __construct()
      {
        $obj1= new Connect();
        $this->con= $obj1-> getcon();
      }

      function display(){
        $query = "SELECT * FROM contact";
        $this->result = $this->con->query($query);
      
      }
      
      function delete(){
        $user_id = $_GET['id'];
         $query = "DELETE FROM contact WHERE id = '$user_id'";

         if ($this->con->query($query)==true) {
          ?>
            <script type="text/javascript">
              alert('Data Deleted successfully..!');

              <?php header('location: contact.php?id=$user_id')?>

              //window.open('updateform.php?id=<?php //echo $id;?>','_self');
            </script>
          <?php
           // header("location: contact.php");
          // $this->display();
         }
         else{
           echo mysql_li($con);
         }
      }
    }

// call function
    $obj=new View();
    
     
      if (isset($_GET['id']) && isset($_GET['delete'])) {
        $obj->delete();
      }
      else{
          $obj->display();
      }
     
  
 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>contact page</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-2 menubar">
          <div class="row">
            <div class="col-12 text-center py-3">
              <img src="../img/logo/final-logo.png" class="img-fluid " style="width: 28%" >
            </div>
            <div class="col-12 u_profile">
              <img src="../img/user.png" class="img-fluid rounded-circle" style="width: 30%">
              <p class="pt-3"><b>user-name</b></p>
              <p><b><a href="">username@gmail.com</a></b></p>
            </div>
            <div class="col p-0">
              <div class="list-group ">
                <a href="dashboard.php" class="list-group-item list-group-item-action">
                  DASHBOARD
                </a>
                <a href="upload.php" class="list-group-item list-group-item-action">IMAGE UPLOAD</a>
                <a href="feedback.php" class="list-group-item list-group-item-action">FEEDBACK</a>
                <a href="contact.php" class="list-group-item list-group-item-action">CONTACT</a>
                
              </div>
            </div>
          </div>
        </div>

         <!-- section2   -->
        <div class="col">
          <div class="row">
            <div class="col-12">
              <nav class="navbar  navbar-expand-lg navbar-light ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item px-3">
                      <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                      </svg> </a>
                    </li>
                    <li class="nav-item pr-3">
                      <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                      </svg></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                      </svg></a>
                    </li>
                    <li class="nav-item  px-3">
                      <!-- <input type="submit" name="logout" value="logout" > -->
                      <button><a href="login.php" class="btn">Logout</a></button>
                    </li>
                    
                  </ul>
                </div>
              </nav>
            </div>
            <div class="col-12 pt-5">
              <div class="rounded-pill feedback">
                <div class="row">
                  <div class="col">
                    <form>
                      <table class="table table-bordered">
                        <tr>
                          <th>Id</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Mobile No</th>
                          <th>Msg</th>
                          <th>Action</th>
                        </tr>
                        <?php

                          while ($data = $obj->result->fetch_object()) {
                            /*if we declare $data outside of while loop it will go into infinite loop & print 1 st row repeatedly*/
                            echo "<tr>";
                            echo "<td> $data->id</td>";
                            echo "<td> $data->name</td>";
                            echo "<td> $data->email</td>";
                            echo "<td> $data->contact</td>";
                            echo "<td> $data->msg</td>";
                            echo "<td> <a href='contact.php?id=$data->id&delete=1'>Delete</a></td>";
                            echo "</tr>";
                          } 

                        ?>   

                      </table>
                      
                    </form>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          

        </div>
        
      </div>

      <div class="row">
        <div class="col">
          <!-- footer section -->

          <footer>
            <div class="row bg-secondary text-center text-white">
              <div class="col py-3">
                <p class="mb-0">copyright @2020 reserved by rajcorporation </p>
              </div>
            </div>
          </footer>

        </div>
      </div>
    </div>
    




    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>
    
    
    
  </body>
</html>

 