<?php
include 'import.php';
$year =$_GET['year'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Final Marks System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Stylesheets -->
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
  <link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
  <link href="css/vertical-responsive-menu.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link href="css/night-mode.css" rel="stylesheet">

  <!-- Vendor Stylesheets -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
  <link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="vendor/semantic/semantic.min.css">


  <style>
    .font {
      font-size: 17px;
      font-weight: bolder;
    }

    .text {
      text-align: center;
      background-color: rgb(41, 84, 84);
      color: white;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .head {
      font-size: 60px;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }

    hr.solid {
      border-top: 3px solid black;
    }

    .footer {

      position: fixed;
      padding: 5px;
      left: 0;
      bottom: 0;
      width: 100%;
      background: #222;
      color: grey;
      font-weight: bolder;
      text-align: center;
      font-weight: bolder;
    }
  </style>
</head>

<body style="background-color:rgb(208,232,232);font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
  ​<div class="container-fluid">
    <div class="jumbotron text">
      <h1 class="head">FINAL MARKS SYSTEM</h1>
      <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> Where you can easily handle your final marksheets!!</p>
    </div>
  </div>
  
  <button type="button" class="btn btn-dark mb-3 ml-3" style="width:250px"> <a href="pdf.php" style="color:white"> SYLLABUS </a></button>
  <button type="button" class="btn btn-dark mb-3 ml-3" style="width:250px"> <a href="index.php" style="color:white"> Years </a></button>
  <button type="button" class="btn btn-dark mb-3 ml-3" style="width:250px"> <a href="student.php?year=<?php echo $year;?>" style="color:white"> STUDENTS LIST </a></button>
  <button type="button" class="btn btn-dark mb-3 ml-3" style="width:250px"> <a href="result.php?year=<?php echo $year;?>" style="color:white"> RESULT </a></button>
  ​<div class="container-fluid">
    <div class="row">
      <div class="col-3">
        <div class="list-group" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action active text-center font" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
          <a class="list-group-item list-group-item-action text-center font" id="list-semester3-list" data-toggle="list" href="#list-semester3" role="tab" aria-controls="profile">SEMESTER 3</a>
          <a class="list-group-item list-group-item-action text-center font" id="list-semester4-list" data-toggle="list" href="#list-semester4" role="tab" aria-controls="profile">SEMESTER 4</a>
          <a class="list-group-item list-group-item-action text-center font" id="list-semester5-list" data-toggle="list" href="#list-semester5" role="tab" aria-controls="profile">SEMESTER 5</a>
          <a class="list-group-item list-group-item-action text-center font" id="list-semester6-list" data-toggle="list" href="#list-semester6" role="tab" aria-controls="messages">SEMESTER 6</a>
          <a class="list-group-item list-group-item-action text-center font" id="list-semester7-list" data-toggle="list" href="#list-semester7" role="tab" aria-controls="settings">SEMESTER 7</a>
          <a class="list-group-item list-group-item-action text-center font" id="list-semester8-list" data-toggle="list" href="#list-semester8" role="tab" aria-controls="settings">SEMESTER 8</a>
        </div>
      </div>
      <div class="col-9">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
            <div class="row">
            <div class="card" style="width:15rem;height:250px;margin-right:30px;margin-left:50px;">
                <img class="card-img-top" src="images/sem5.jpg" alt="Card image cap" style="height:150px">
                <div class="card-body">
                  <h5 class="card-title">SEMESTER 3</h5>
                  <a href="finalmarkssystem.php?sem=3&year=<?php echo $year;?>" class="btn btn-primary">More</a>
                </div>
              </div>
              <div class="card" style="width:15rem;height:250px;margin-right:30px;">
                <img class="card-img-top" src="images/sem5.jpg" alt="Card image cap" style="height:150px">
                <div class="card-body">
                  <h5 class="card-title">SEMESTER 4</h5>
                  <a href="finalmarkssystem.php?sem=4&year=<?php echo $year;?>" class="btn btn-primary">More</a>
                </div>
              </div>
              <div class="card" style="width:15rem;height:250px;margin-right:30px;">
                <img class="card-img-top" src="images/sem5.jpg" alt="Card image cap" style="height:150px">
                <div class="card-body">
                  <h5 class="card-title">SEMESTER 5</h5>
                  <a href="finalmarkssystem.php?sem=5&year=<?php echo $year;?>" class="btn btn-primary">More</a>
                </div>
              </div></div>
              <div class="row">
              <div class="card" style="width:15rem;height:250px;margin-right:30px;margin-top:20px;margin-left:50px;">
                <img class="card-img-top" src="images/sem6.jpg" alt="Card image cap" style="height:150px">
                <div class="card-body">
                  <h5 class="card-title">SEMESTER 6</h5>
                  <a href="finalmarkssystem.php?sem=6&year=<?php echo $year;?>" class="btn btn-primary">More</a>
                </div>
              </div>
              <div class="card" style="width:15rem;height:250px;margin-right:30px;margin-top:20px;">
                <img class="card-img-top" src="images/sem7.jpg" alt="Card image cap" style="height:150px">
                <div class="card-body">
                  <h5 class="card-title">SEMESTER 7</h5>
                  <a href="finalmarkssystem.php?sem=7&year=<?php echo $year;?>" class="btn btn-primary">More</a>
                </div>
              </div>
              <div class="card" style="width:15rem;height:250px;margin-top:20px;">
                <img class="card-img-top" src="images/sem8.jpg" alt="Card image cap" style="height:150px">
                <div class="card-body">
                  <h5 class="card-title">SEMESTER 8</h5>
                  <a href="finalmarkssystem.php?sem=8&year=<?php echo $year;?>" class="btn btn-primary">More</a>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="list-semester3" role="tabpanel" aria-labelledby="list-semester3-list">
            <div class="table-responsive mt-30">
              <div class="btn btn-success"><a href="add_course.php?sem=<?php echo $year;?>-semester3&year=<?php echo $year;?>" style="color:white"> + ADD COURSE </a></div>
              
              <table class="table ucp-table">
                <thead class="thead-s">
                  <tr>
                    <th class="text-center" scope="col"> Course Code</th>
                    <th class="text-center" scope="col">Course Name</th>
                    <th class="text-center" scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = "SELECT * FROM `$year-semester3`";
                  $result = mysqli_query($conn,$sql);

                  while ($rows = mysqli_fetch_assoc($result)) { ?>
                    <tr>

                      <td class="text-center"><?php echo "$rows[crs_code]" ?></td>
                      <td class="text-center"><?php echo "$rows[SUBJECT]" ?></td>
                      <td class="text-center">

                        <a class="btn btn-danger" href="DelCrs.php?crs_code=<?php echo "$rows[crs_code]"; ?>&sem=<?php echo $year;?>-semester3&year=<?php echo $year;?>">
                          <font color="white">Delete</font>
                        </a>
                      </td>
                    </tr>
                  <?php } ?>

                </tbody>
              </table>
            </div>

          </div>
          <div class="tab-pane fade" id="list-semester4" role="tabpanel" aria-labelledby="list-semester4-list">
            <div class="table-responsive mt-30">
              <div class="btn btn-success"><a href="add_course.php?sem=<?php echo $year;?>-semester4&year=<?php echo $year;?>" style="color:white"> + ADD COURSE </a></div>
              
              <table class="table ucp-table">
                <thead class="thead-s">
                  <tr>
                    <th class="text-center" scope="col"> Course Code</th>
                    <th class="text-center" scope="col">Course Name</th>
                    <th class="text-center" scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = "SELECT * FROM `$year-semester4`";
                  $result = mysqli_query($conn,$sql);

                  while ($rows = mysqli_fetch_assoc($result)) { ?>
                    <tr>

                      <td class="text-center"><?php echo "$rows[crs_code]" ?></td>
                      <td class="text-center"><?php echo "$rows[SUBJECT]" ?></td>
                      <td class="text-center">

                        <a class="btn btn-danger" href="DelCrs.php?crs_code=<?php echo "$rows[crs_code]"; ?>&sem=<?php echo $year;?>-semister5&year=<?php echo $year;?>">
                          <font color="white">Delete</font>
                        </a>
                      </td>
                    </tr>
                  <?php } ?>

                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="list-semester5" role="tabpanel" aria-labelledby="list-semester5-list">
            <div class="table-responsive mt-30">
              <div class="btn btn-success"><a href="add_course.php?sem=<?php echo $year;?>-semister5&year=<?php echo $year;?>" style="color:white"> + ADD COURSE </a></div>
              
              <table class="table ucp-table">
                <thead class="thead-s">
                  <tr>
                    <th class="text-center" scope="col"> Course Code</th>
                    <th class="text-center" scope="col">Course Name</th>
                    <th class="text-center" scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = "SELECT * FROM `$year-semister5`";
                  $result = mysqli_query($conn,$sql);

                  while ($rows = mysqli_fetch_assoc($result)) { ?>
                    <tr>

                      <td class="text-center"><?php echo "$rows[crs_code]" ?></td>
                      <td class="text-center"><?php echo "$rows[SUBJECT]" ?></td>
                      <td class="text-center">

                        <a class="btn btn-danger" href="DelCrs.php?crs_code=<?php echo "$rows[crs_code]"; ?>&sem=<?php echo $year;?>-semister5&year=<?php echo $year;?>">
                          <font color="white">Delete</font>
                        </a>
                      </td>
                    </tr>
                  <?php } ?>

                </tbody>
              </table>
            </div>

          </div>
          <div class="tab-pane fade" id="list-semester6" role="tabpanel" aria-labelledby="list-semester6-list">
            <div class="table-responsive mt-30">
              <div class="btn btn-success"><a href="add_course.php?sem=<?php echo $year;?>-semester6&year=<?php echo $year;?>" style="color:white"> + ADD COURSE </a></div>
             
              <table class="table ucp-table">
                <thead class="thead-s">
                  <tr>
                    <th class="text-center" scope="col"> Course Code</th>
                    <th class="text-center" scope="col">Course Name</th>
                    <th class="text-center" scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = "SELECT * FROM `$year-semester6`";
                  $result = mysqli_query($conn, $sql);

                  while ($rows = mysqli_fetch_assoc($result)) { ?>
                    <tr>

                      <td class="text-center"><?php echo "$rows[crs_code]" ?></td>
                      <td class="text-center"><?php echo "$rows[SUBJECT]" ?></td>
                      <td class="text-center">

                        <a class="btn btn-danger" href="DelCrs.php?crs_code=<?php echo "$rows[crs_code]"; ?>&sem=semester6">
                          <font color="white">Delete</font>
                        </a>
                      </td>
                    </tr>
                  <?php } ?>

                </tbody>
              </table>
            </div>

          </div>
          <div class="tab-pane fade" id="list-semester7" role="tabpanel" aria-labelledby="list-semester7-list">
            <div class="table-responsive mt-30">
              <div class="btn btn-success"><a href="add_course.php?sem=<?php echo $year;?>-semester7&year=<?php echo $year;?>" style="color:white"> + ADD COURSE </a></div>
             
              <table class="table ucp-table">
                <thead class="thead-s">
                  <tr>
                    <th class="text-center" scope="col"> Course Code</th>
                    <th class="text-center" scope="col">Course Name</th>
                    <th class="text-center" scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = "SELECT * FROM `$year-semester7`";
                  $result = mysqli_query($conn, $sql);

                  while ($rows = mysqli_fetch_assoc($result)) { ?>
                    <tr>

                      <td class="text-center"><?php echo "$rows[crs_code]" ?></td>
                      <td class="text-center"><?php echo "$rows[SUBJECT]" ?></td>
                      <td class="text-center">

                        <a class="btn btn-danger" href="DelCrs.php?crs_code=<?php echo "$rows[crs_code]"; ?>&sem=semester7">
                          <font color="white">Delete</font>
                        </a>
                      </td>
                    </tr>
                  <?php } ?>

                </tbody>
              </table>
            </div>

          </div>
          <div class="tab-pane fade" id="list-semester8" role="tabpanel" aria-labelledby="list-semester8-list">
            <div class="table-responsive mt-30">
              <div class="btn btn-success"><a href="add_course.php?sem=<?php echo $year;?>-semester8&year=<?php echo $year;?>" style="color:white"> + ADD COURSE </a></div>
             
              <table class="table ucp-table">
                <thead class="thead-s">
                  <tr>
                    <th class="text-center" scope="col"> Course Code</th>
                    <th class="text-center" scope="col">Course Name</th>
                    <th class="text-center" scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = "SELECT * FROM `$year-semester8`";
                  $result = mysqli_query($conn, $sql);

                  while ($rows = mysqli_fetch_assoc($result)) { ?>
                    <tr>

                      <td class="text-center"><?php echo "$rows[crs_code]" ?></td>
                      <td class="text-center"><?php echo "$rows[SUBJECT]" ?></td>
                      <td class="text-center">

                        <a class="btn btn-danger" href="DelCrs.php?crs_code=<?php echo "$rows[crs_code]"; ?>&sem=<?php echo $year;?>-semester8&year=<?php echo $year;?>">
                          <font color="white">Delete</font>
                        </a>
                      </td>
                    </tr>
                  <?php } ?>

                </tbody>
              </table>
            </div>

          </div>

        </div>
      </div>
    </div>

  </div><br><br>
  <!--<?php include 'footer.php'; ?>-->
</body>

</html>