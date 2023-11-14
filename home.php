<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>img[alt="www.000webhost.com"]{display:none;}</style>

</head>

<body>
<div class="header">
<?php
$active="home";
include('head.php'); ?>

</div>


  <div id="page-container" style="position: relative;min-height: 84vh;   ">
    <div class="container">
    <div id="content-wrap"style="padding-bottom:75px;">
  </div>
<br>
        <h1 style="text-align:center;font-size:45px;">Selamat Datang di BloodBank</h1>
<br>
        <div class="row" style= "padding-top: 40px;">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header card bg-danger text-white" >Perlunya Darah</h4>

                        <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                          <?php
                            include 'conn.php';
                            $sql=$sql= "select * from pages where page_type='needforblood'";
                            $result=mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result)>0)   {
                                while($row = mysqli_fetch_assoc($result)) {
                                  echo $row['page_data'];
                                }
                              }

                           ?>
                         </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header card bg-danger text-white">Tips Mendonor Darah</h4>

                    <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                      <?php
                        include 'conn.php';
                        $sql=$sql= "select * from pages where page_type='bloodtips'";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0)   {
                            while($row = mysqli_fetch_assoc($result)) {
                              echo $row['page_data'];
                            }
                          }

                       ?>
                     </p>

                        </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header card bg-danger text-white" >Siapa yang akan dibantu</h4>

                    <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                      <?php
                        include 'conn.php';
                        $sql=$sql= "select * from pages where page_type='whoyouhelp'";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0)   {
                            while($row = mysqli_fetch_assoc($result)) {
                              echo $row['page_data'];
                            }
                          }

                       ?>
                     </p>


                        </div>
            </div>
</div>

        <h2>Informasi Pendonor</h2>

        <div class="row">
          <?php
            include 'conn.php';
            $sql= "select * from donor_details join blood where donor_details.donor_blood=blood.blood_id order by rand() limit 6";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)
            {
            while($row = mysqli_fetch_assoc($result)) {
           ?>
            <div class="col-lg-4 col-sm-6 portfolio-item" ><br>
            <div class="card" style="width:300px">
                <img class="card-img-top" src="image\blood_drop_logo.jpg" alt="Card image" style="width:100%;height:300px">
                <div class="card-body">
                  <h3 class="card-title"><?php echo $row['donor_name']; ?></h3>
                  <p class="card-text">
                    <b>Golongan darah : </b> <b><?php echo $row['blood_group']; ?></b><br>
                    <b>No. HP: </b> <?php echo $row['donor_number']; ?><br>
                    <b>Jenis Kelamin : </b><?php echo $row['donor_gender']; ?><br>
                    <b>Umur : </b> <?php echo $row['donor_age']; ?><br>
                    <b>Alamat : </b> <?php echo $row['donor_address']; ?><br>
                  </p>

                </div>
              </div>
        </div>
      <?php }} ?>
</div>
<br>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <h2>Golongan Darah</h2>
                <p>
                  <?php
                    include 'conn.php';
                    $sql=$sql= "select * from pages where page_type='bloodgroups'";
                    $result=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0)   {
                        while($row = mysqli_fetch_assoc($result)) {
                          echo $row['page_data'];
                        }
                      }

                   ?></p>

            </div>
            <!-- <div class="col-lg-6">
                <img class="img-fluid rounded" src="image\blood_donationcover.jpeg" alt="" >
            </div> -->
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
            <h4>Pendonor & Resipien Universal</h4>
            <p>
              <?php
                include 'conn.php';
                $sql=$sql= "select * from pages where page_type='universal'";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0)   {
                    while($row = mysqli_fetch_assoc($result)) {
                      echo $row['page_data'];
                    }
                  }

               ?></p>
              </div>
            
                <a class="btn btn-lg btn-secondary btn-block" href="donate_blood.php" style="width: 50%; align:center; background-color:#bb2124;color:#fff ">Menjadi Pendonor Darah</a>
            
        </div>
               
    </div>
    <?php include('footer.php');?>     
  </div>
</div>

</body>

</html>
