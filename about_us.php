<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<style>
  .about-team {
    display: grid;
    grid-template-rows: auto auto;
    text-align: center;
    align-items: center;
    background-color: #ffe1a6;
    padding: 48px 80px
}

  img[alt="www.000webhost.com"]{display:none;}


.team-description {
    margin-bottom: 48px;
}

.team-description h1 {
    font-size: 32px;
    margin-bottom: 24px;
    font-weight: 700;
    color: #000000;
}

.team-profile {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
}

.card-profile {
    width: 16rem;
    box-shadow: 6px 6px 10px 0 rgba(0, 0, 0, 0.2);
    background-color: white;
    display: flex;
    flex-direction: column;
    padding: 0;
    align-items: center;
    justify-self: center;
    border-radius: 8px;
}

.card-profile img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    margin: 0;
    border-radius: 8px;
}

.card-profile h1 {
    font-size: 1em;
    font-weight: 600;
    color: #000000;
}

.card-profile h2 {
  padding-top: 8px;
    font-size: 18px;
    font-weight: 200;
}

.card-profile a {
    margin: 0;
}

.card-profile button {
    min-width: 45px;
    min-height: 45px;
    padding: 12px 24px;
    background: #FFE1A6;
    color: #FF8A00;
    border: none;
    margin: 12px;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 5px;
}

.card-profile button:hover {
    background-color: #FF8A00;
    color: #ffffff;
    font-weight: 500;
    transition: all ease .5s;
}

@media screen and (max-width: 1200px) {
    .team-profile {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(2, 1fr);
        row-gap: 25px;
    }

    .card-profile > *{
        margin-bottom: 24px;
    }

}


@media screen and (max-width: 600px) {
    .about-team {
        padding: 50px 36px;
    }

    .team-description {
        margin-bottom: 20px;
    }

    .team-profile {
        grid-template-columns: 1fr;
        grid-template-rows: repeat(4, 1fr);
        row-gap: 25px;
    }
}

</style>
<body>


<?php 
$active ='about';
include('head.php');

?>


<div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;">
  <div class="container">
  <div id="content-wrap" style="padding-bottom:50px;">
<div class="row">
    <div class="col-lg-6">
        <h1 class="mt-4 mb-3">Tentang Kami</h1>
        <p> <?php
          include 'conn.php';
          $sql=$sql= "select * from pages where page_type='aboutus'";
          $result=mysqli_query($conn,$sql);
          if(mysqli_num_rows($result)>0)   {
              while($row = mysqli_fetch_assoc($result)) {
                echo $row['page_data'];
              }
            }

         ?>
      </p>

    </div>
    <div class="col-lg-6">
        <img class="img-fluid rounded" src="image\asd.jpg" style="height:400px" alt="error"  >
    </div>
</div>
</div></div>

<section class="about-team">
            <div class="team-description">
            <h1>Tentang Kami</h1>
            </div>

            <div class="team-profile">
                <div class="card-profile">
                    <img src="image\ellena.jpeg" alt="Ellena">
                    <h2>201401004</h2>
                    <h1>Ellena Amanda</h1>
                </div>

                <div class="card-profile">
                    <img src="image\jordan.jpeg" alt="Jordan">
                    <h2>201401006</h2>
                    <h1>Jordan G. Sinuhaji</h1>
                </div>
                
                <div class="card-profile">
                    <img src="image\darmawan.jpeg" alt="Darmawan">
                    <h2>201401030</h2>
                    <h1>Darmawan Syah Putra</h1>
                </div>

                <div class="card-profile">
                    <img src="image\lidya.jpg" alt="Lidya">
                    <h2>201401141</h2>
                    <h1>Lidya Gabriella Tarigan</h1>
                </div>
            </div>
        </section>

<?php include('footer.php')
?>
</div>
</body>

</html>
