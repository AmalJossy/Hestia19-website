<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Events - Hestia 19 - National Level Techno-Cultural Fest of TKM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
    body {
      background: url('<?=base_url();?>assets/front/img/about_us_bg.jpg') no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      /* height: 100%;
      min-height: 100vh; */
      padding-top:30px;


    }

    </style>
</head>

<body>

<div class="container">
<?php
    $cntr=0;
     foreach($myevents as $row){
if($cntr%3==0){
echo '<div class="card-deck" style="margin-top:15px;">';
}
?>

    <div class="col-md-4 col-sm-12 card bg-default">
      <div class="card-body text-center">

      <div class="card-content">
                          <!-- <h6 class="category ">EVENT NAME</h6> -->
                          <h4 class="card-title" style="float : left"><?=$row['title']?></h4>
                          <?php

                        if($row['file1']!=""){
                                echo '<input type="text" class="form-control" id="fld1" a placeholder="'.$row['file1'].'"> ';
                        }
                        if($row['file2']!=""){
                            echo '<input type="text" class="form-control" style="margin-top:10px;" id="fld2"  placeholder="'.$row['file2'].'"> ';
                    }
                        ?>

                          <p style="float: right; font-size: 0.8em; margin-right: 5px;">Once submitted cannot be changed.</p>
                          <input type="submit" style="margin-top:3px;margin-left:-2rem;" placeholder="Submit" class="btn btn-primary btn-sm btn-round" style="float: left; padding-top: 8px; padding-bottom: 8px; ">
                      </form>
                      <br><br>
                      <?php

                    foreach($row['time'] as $timerow){

?>
                    <div style="float: left;"><strong><?=$timerow['label']?>:</strong>&nbsp;From <?=$timerow['start_time'];?></div>

<?php
                    }
                    if($row['venue']){
                        ?>
                                        <div style="float: left;"><strong>Venue:</strong>&nbsp;<?=$row['venue'];?></div>

                        <?php
                    }
                    ?>

                    </div>



                        </div>


      </div>

  <?php
     $cntr++;
     if($cntr%3==0 || $cntr==count($myevents)){
        echo '</div>';
        }
     }
      ?>
</div>

</body>
</html>
