<!DOCTYPE html>
<html lang="en">
<head>
   <?php 
   //koneksi
   require_once ('Api/koneksi.php');
   //header
   require_once('header.php'); ?>
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <!-- Start = Sidebar -->
      <?php 
      //sidebar
      require_once('sidebar.php');
      //navbar atas
      require_once('topNavigation.php');
      ?>
     
    
      <!-- Start = isi konten -->
        <div class="right_col" role="main">
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="dashboard_graph">
                
                <div class="row x_title">
                  <div class="col-md-6">
                  </div>

                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="dashboard_graph">
                
                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Kelola Wedding Ceremonies</h3>
                  </div>
                  <div class="col-md-6">
                    <a href="../index.php#wedding" class="btn btn-primary " style="float:right;" target="_blank  ">LIHAT WEB</a>
                  </div>
                </div>

                <div class="col-md-12 col-sm-12 ">              
                <br>

                <form method="POST" action="updateAdat.php" class="form-horizontal form-label-left" >
                  <?php
                    $adat = mysqli_query($conn,"SELECT * FROM adat");
                    while ($tampilAdat=mysqli_fetch_array($adat)) {
                  ?>
                  <input type="text" name="idAdat" value = "<?php echo $tampilAdat['idAdat'];?>" hidden >

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Penjelasan Adat</label>
                    <div class="col-sm-6 ">
                     <textarea class="form-control" name="penjelasan" rows="3" required><?php echo $tampilAdat['penjelasan'];?></textarea>
                    </div>
                  </div>  
                  <?php
                    }
                  ?>
                  <div class="item form-group">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                    <button type="submit" class="btn btn-info">Simpan</button>
                    </div>
                  </div>
                  <div class="ln_solid"></div>
                </form>

                </div>
                <div class="clearfix"></div>

              </div>
            </div>
          </div>
        <br/>       
      </div>
    <!-- End = isi konten -->
    



    <!--  -->
    </div>
  </div>

  
  <!-- Start = Footer -->
  <?php require_once('footer.php'); ?>
  <!-- End = Isi Footer -->
</body>
</html>
