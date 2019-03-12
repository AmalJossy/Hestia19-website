<html>

<head>
    <title>Hestia19</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?=base_url();?>assets/front//img/hestia-icon.png">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!---->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>-->

</head>
<!-- <script type="text/javascript">
  function initmask() {
    var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    if(w < 960){

      var x = document.getElementById("event-img");
     x.setAttribute("src", "<?=base_url();?>assets/front//img/WEB_DENOVO_H.jpg");
    //  var y = document.getElementById("event-mask");
    // y.setAttribute("src", "<?=base_url();?>assets/front//img/mobile_phone_front_end.png");
    }
    
}
   </script> -->
<style>
    @media screen and (max-width: 767px){
        #event-mask{
            -webkit-transform: rotateZ(90deg);
            -moz-transform: rotateZ(90deg);
            -ms-transform: rotateZ(90deg);
            -o-transform: rotateZ(90deg);
            transform: rotateZ(90deg);
        }
        .event_block{
            padding-top: 70%;
        }

    }

    *{
        font-family: 'Pathway Gothic One', sans-serif;
    }
    .btn-custom{
        color: white;
        margin-left: 40%;
        margin-bottom: 10px;
    }
    .btn-custom:hover{
        color: grey;
    }
    body{
        overflow-x: hidden;
    }
    @media screen and (min-width: 1366px) {
        /* #img-event{
                overflow: hidden;
             padding: 0px;
             height: 100%;
             width: 100%;
           }
           #event-mask{
             width: 100%;
             height: 100%;
           } */

        #event-img{
            /* padding-right: 50px; */
            /* padding-top: 120px; */
            height: 100%;
            margin-left: -160px;
            margin-top: 35px;
        }
        #img-cont{
            height : 540px;
            overflow-y: scroll

        }
        body{
            overflow: hidden;
        }
        .space{
            margin-right: 30px;
        }
        /* #event-mask{
           height:100vh;
          }
          #event-mask-img{
           height:90vh;
          } */

    }

    @media screen and (min-width: 320px) and (max-width: 767px) {
        /* #img-event{
                min-height:400px;
              overflow: hidden;
              height: 100vh;
      
           } */
        body{
            /* overflow-x: hidden; */
            width: 100vw;
        }
        #event-mask{
            margin-top: -12px;
            max-width: 100vw;
        }
        #event-img{
            max-width: 100vw;
        }
        /* #event-mask-img{
         height:100%;
         max-height: 200px;
         background-position: center;
        } */
        #img-cont{
            min-height : 400px;

        }


    }
    @media screen and (min-width: 768px) and (max-width: 1365px){
        #event-img{
            /* padding-right: 50px; */
            /* padding-top: 120px; */
            height: 100%;
            margin-left: -110px;
            margin-top: 20px;
        }
        #event-mask{
            height: 100vh;
        }
        #img-cont{
            height : 540px;
            overflow-y: scroll

        }
        body{
            overflow: hidden;
        }
        .space{
            margin-right: 30px;
        }

    }
    @media screen and (width: 1280px){
        #event-mask{
            height: 100%;
        }
        #event-img{

            margin-top: 0px;
        }
    }
    @media screen and (height: 1366px){
        #event-mask{
            height: 45vh;
        }
        #event-img{

            margin-top: 0px;
        }
    }
    @media screen and (height: 1024px){
        #event-mask{
            height: 55vh;
        }
        #event-img{

            margin-top: 0px;
        }
    }
    @media screen and (height: 1280px){
        #event-mask{
            height: 50vh;
        }
        #event-img{

            margin-top: 0px;
        }
    }

    .back_btn{

        left:10px;
    }


    @media screen and (min-width: 767px) {

        .back_btn{
            left:40px;
        }
    }
</style>
<body>
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Error</h4>
                <button type="button" class="close modal-close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">


                <form id="team_form" name="team_form" style="display: none;">

                    <input class="form-control" type="email" name="email0" placeholder="Email" readonly><br>
                    <div id="team_form_members">

                    </div>
                    <div id="team_form_members_opt">
                    </div>
                    <div>
                        <div class="form-group-div form-group" style="display:none;" id="member_1">
                            <div><a id="member_1_close" class="close-href btn btn-xs btn-danger text-white" style="margin-bottom: 3px; padding-top: 2px; padding-bottom: 2px; padding-left: 6px; padding-right: 6px;">Close</a></div>
                            <input class="form-control" type="email" name="email4" placeholder="Email 4">
                        </div>
                        <div class="form-group-div form-group" style="display:none;" id="member_2">
                            <div><a id="member_2_close" class="close-href btn btn-xs btn-danger text-white" style="margin-bottom: 3px; padding-top: 2px; padding-bottom: 2px; padding-left: 6px; padding-right: 6px;">Close</a></div>
                            <input class="form-control" type="email" name="email5" placeholder="Email 5">
                        </div>

                    </div>
                    <div>
                        <button type="button" class="btn btn-warning my-2 " name="addMoreMembers" id="addmoreMembersBtn">Add Member&nbsp;<i class="fas fa-plus-square"></i></button><br>
<input type="submit" id="team_form_hid_btn" hidden/>

                        <div class="row ">
                            <div class="col-xs-6 ml-3 mt-3">
                                <div class="form-check chk_team" style="display: none;">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">Accommodate for

                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1"></label>
                                    <select class="form-control ml-2 p-0" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>

                                    </select>

                                </div>
                            </div>
                        </div>




                    </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary modal-redirect" data-dismiss="modal">OK</button>
            </div>

        </div>
    </div>
</div>
<section>
    <h1><a  class="back_btn" style="position:absolute;top:30px;text-decoration:none;color:black;z-index:99;" href="<?=base_url("events/".$parent)?>"><i class="fa fa-arrow-left" aria-hidden="true"></i>
        </a></h1>

    <div class="container-fluid p-0 m-0 py-lg-3 py-md-0 ">
        <!-- <div class="card"> -->
        <div class="row ">
            <!-- <div class="col-md-5 col-sm-12" style="position: fixed;" id="img-event">
              <div id="event-mask-img" style="background-image: url('<?=base_url();?>assets/front//img/WEB_DENOVO_H.jpg'); background-size: cover; background-position: right; background-repeat: no-repeat;  width:100%;  position: absolute;z-index:0;"></div>
              <div id="event-mask" src="" style=" background-image: url('<?=base_url();?>assets/front//img/mask technical events short  crcted.png'); background-size: cover; background-position: right; background-repeat: no-repeat;   "></div>
              </div>
            </div> -->
            <div class="col-md-5 col-sm-12">

                <img src="<?=base_url();?>assets/uploads/event_images/<?=$event->event_id?>.jpg" id="event-img" style="position: absolute; width:100%; z-index:0;" alt="">
                <img src="<?=base_url();?>assets/front//img/event_mask.png" id="event-mask" style="position: absolute; width:100%; z-index:1; " alt="">
                <!-- <div style="background-image: url('<?=base_url();?>assets/front//img/WEB_DENOVO_H.jpg'); background-size: cover; background-position: right; background-repeat: no-repeat;  width:100%;  position: absolute;z-index:0;"></div> -->
                <!-- <div style="background-image: url('<?=base_url();?>assets/front//img/event-mask1.png'); background-size: cover; background-position: right; background-repeat: no-repeat;  width:100%;  position: absolute;z-index:1;"></div> -->
            </div>
            <div class="col-md-7 px-3 col-sm-12 event_block"  style="z-index: 1; display: block;  " >

                <div class="card-block px-3" style="margin-top: 5%; " id="img-cont">
                    <h2 class="card-title" style="font-weight: 900; letter-spacing: 3px;max-height: 100vh;"><?=$event->title?></h2>
                    <p class="card-text text-justify text-muted space" style="font-size: 1.2em;" ><?=$event->details?>
                        <?php
                        if($event->prize!="0"){

                        ?> <h3>Prizes Worth : <?=$event->prize?></h3>
                    <?php
                    }
                    ?>



                        <?php
                        if($event->reg_fee && $event->reg_fee>0){

?> <h4>Registration Fee : ₹<?=$event->reg_fee?></h4>
                        <?php
                        }
                        ?>




                    <br>
                        <h3>Coordinators</h3>
                    <div style="padding-left: 15px;">
                        <a style="text-decoration: none;" href="tel:+91<?=$event->co1_no?>"><h5><?=$event->co1_name?> : <?=$event->co1_no?></h5></a>
                        <a style="text-decoration: none;" href="tel:+91<?=$event->co2_no?>"><h5><?=$event->co2_name?> : <?=$event->co2_no?></h5></a>
                    </div>

                    </p>
<?=$btn?>
                </div>
            </div>

        </div>
        <!-- </div> -->
    </div>

</section>
</body>

<script type="text/javascript">


    var maxmemb=0;
    var minmemb=0;
    var rem_members=0;
    $('.modal-close').click(function(){
        $('#myModal').hide();
    });

    $('.modal-redirect').click(function(){
        window.location.href="<?=base_url();?>";
    });
    $('.btn-custom').click(function(){

        $.ajax({
            type:'post',
            url:"<?=base_url("process/".$event->event_id)?>",
            data:"",
            async: false,
            processData: false,
            contentType: false,
            beforeSend:function(){
                // launchpreloader();
            },
            complete:function(){
                //  stopPreloader();
            },
            success:function(result){


                var array = JSON.parse(result);

                switch(array[0]){
                    case 505:{
                        $('.modal-title').text(array[1]);
                        $('.modal-body').html(array[2]);
                        $('#myModal').show();
                        break;
                    }
                    case 200:{
                        alert("Payment"); //#TODO
                        break;
                    }
                    case 201:{
                        maxmemb=array[2];
                        minmemb=array[1];
                        $('.chk_team').css('display','inline');
                        rem_members=maxmemb-minmemb-1;
                        var n=minmemb-1;
                        var html="";
                        while(n>0){
                            html+="<input class='form-control' type='email' name='email"+(minmemb-n)+"' placeholder='Email' required><br>";
                            n--;
                        }
                        $('#team_form_members').html(html);
                        $('#team_form').css('display','block');

                        $('.modal-title').text("Add Members");

                        $('#myModal').show();
                        if(rem_members<=0){
                            $("#addmoreMembersBtn").css({
                                "display": "none"

                            });

                        }
                        $('.modal-footer').html("<button type='button' class='btn btn-success' name='team_form_submit' class='team_form_submit' onclick='team_form_sumbit()' >Submit&nbsp;<i class='fas fa-check-circle'></i></button>");


                        break;
                    }
                    }




            }
        });




    });
    $("#addmoreMembersBtn").click(function() {
        $('.close-href').hide();
        var old=$('#team_form_members_opt').html();
        var cur_cnt=$("#team_form_members_opt > div").length;
        $('.close-href').css('display','none');
       // $('.close-href').show(); // Shows
         // hides
        if(cur_cnt<=rem_members){
            var html="<div class='form-group-div form-group' style='' id='member_"+(minmemb+cur_cnt)+"'> <input class='form-control' type='email' name='email"+(minmemb+cur_cnt)+"' placeholder='Email' required> <a id='member_"+(minmemb+cur_cnt)+"_close' class='close-href btn btn-xs btn-danger text-white' style='border: 0;margin: 0; float:right;margin-top:-38px;' onclick='removeElement("+(minmemb+cur_cnt)+")'>X</a> </div>";
            $('#team_form_members_opt').html(old+html);

        }
        if(cur_cnt>=rem_members){
            $("#addmoreMembersBtn").prop("disabled",true);
        }


        });
    function  removeElement(_id){
            $("#member_"+_id).remove();
        $("#member_"+(_id-1)+"_close").css('display','block');

        $("#addmoreMembersBtn").prop("disabled",false);
    }
    function team_form_sumbit(){


        $('#team_form_hid_btn').click();


    }












</script>


</html>
