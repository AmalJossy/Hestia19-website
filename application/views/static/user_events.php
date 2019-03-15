<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Confirm Payment</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="<?=base_url("assets/front/css/material.css")?>" rel="stylesheet" />
  <style>
    body {
      background: url('<?=base_url();?>assets/front/img/about_us_bg.jpg') no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      /* height: 100%;
      min-height: 100vh; */
      overflow: scroll;
	  
    }
    @media only screen and (min-width:768px) and (max-width:1366px){
    .evnt_align{
        display: flex;
    flex-direction: row;
    justify-content: center;
    align-items:center;
    }
}
  </style>
</head>

<body>

  <div class="container">
  <?php
    $cntr=0;
     foreach($myevents as $row){
if($cntr%3==0){
echo '<div class="row evnt_align">';
}
?>

<div class="col-md-4 col-sm-12" style="margin-top: 30px;">
            <div class=" card card-pricing">
                    <div class="card-content">
                      <!-- <h6 class="category ">EVENT NAME</h6> -->
                      <h4 class="card-title" style="float : left"><?=$row->title?></h4>
                      <form>
                      <?php
                        if($row->file1)

                        ?>
                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Some Text"> 
                          <p style="float: right; font-size: 0.8em; margin-right: 5px;">Updated</p>
                          <input type="submit" placeholder="Submit" class="btn btn-primary btn-sm btn-round" style="float: left; padding-top: 8px; padding-bottom: 8px; ">       
                      </form><br><br><br>
                      <p style="float: left;"><strong>Label 1:</strong>&nbsp;From 12-03-2019 To 15-03-2019</p>
                      <p style="float: left;"><strong>Label 2:</strong>&nbsp;From 12-03-2019 To 15-03-2019</p>
                      <p style="float: left;"><strong>Venue:</strong>&nbsp;APJ Hall</p>
          
          
                    </div> 
    </div>
  </div>



<?php
     $cntr++;
     if($cntr%3==2 || $cntr==count($myevents)){
        echo '<div class="row evnt_align">';
        }
     }
      ?>
   
    </div>
  </div>

</body>


</html>