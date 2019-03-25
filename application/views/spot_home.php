<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="//www.hestia.live/assets/front/img/hestia-icon.png">
  
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Hestia 19</title>
</head>
<style>
    body{
        overflow: hidden;
    }
    .custom-button{
        width: 50%;
        border-radius: 0;

    }
    .eventsreg{
        height: calc(100vh - 150px);
        overflow-y: scroll;
    }
    .style-1::-webkit-scrollbar
      {
        width: 5px;
        background-color: #F5F5F5;
        border-radius: 10px;
      }

      .style-1::-webkit-scrollbar-thumb
      {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px #9da2aa;

        background-color: #555;
      }
      .chk_acommodation{
        margin-top:5px;
    }
    .chk_ac_day{
        margin-left:15px;
    }
</style>

<body>
    <div class="row">
        <div class="col-5 p-5  ">
            <h4 class="text-center my-3">Events Registered</h4>
            <div class=" style-1 eventsreg">
                    <div class="card mx-3 my-2">
                            <div class="card-body">
                              <h5 class="card-title text-danger">No Events Registered!!!</h5>
                              
                            </div>
                    </div>
                    <div class="card mx-3 my-2">
                            <div class="card-body">
                              <h5 class="card-title">Event Name</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              
                            </div>
                    </div>
                    <div class="card mx-3 my-2">
                            <div class="card-body">
                              <h5 class="card-title">Event Name</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              
                            </div>
                    </div>
                    <div class="card mx-3 my-2">
                            <div class="card-body">
                              <h5 class="card-title">Event Name</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              
                            </div>
                    </div>
                    <div class="card mx-3 my-2">
                            <div class="card-body">
                              <h5 class="card-title">Event Name</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              
                            </div>
                    </div>
                    <div class="card mx-3 my-2">
                            <div class="card-body">
                              <h5 class="card-title">Event Name</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              
                            </div>
                    </div>
                    <div class="card mx-3 my-2">
                            <div class="card-body">
                              <h5 class="card-title">Event Name</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              
                            </div>
                    </div>
            </div>
        </div>
        <div class="col-7 p-5">
                        <h4 class="text-center my-3">Spot Registration</h4>
                <div class="eventsreg style-1">
                        
                <div class="m-3">
                        <label for="selectcategory">Event Category: </label>
                        <select id="selectcategory" class="form-control">
                            <?php
                            foreach ($categories as $row){

                                echo "<option>".$row->."</option>";

                            }
                            ?>
                        </select>
                        
                </div>
                <div class="m-3">
                        <label for="selectcategory">Event Name: </label>
                        <select id="selectcategory" class="form-control">
                                <option>Event 1</option>
                                <option>Event 2</option>
                                <option>Event 3</option>
                                <option>Event 4</option>
                        </select>
                        
                </div>
                <div class="modal-body">


                        <form id="team_form" method="post" action="https://www.hestia.live/payment/prepay.php" name="team_form" >
        
                        <input type="hidden" id="json_data" name="json_data" hidden/>
                            <div class="row" style='margin-bottom:10px;'>
                                <div class="col-md-8 col-sm-12" id="div_mail0"><input class="form-control" type="email" id="email0" placeholder="Email" value="vm23526@gmail.com"; readonly></div>
                                <div class="col-md-4 col-sm-12" id="div_acm0"><label class="checkbox-inline chk_acommodation">
                                            <input type="checkbox" class="chk_acm"  id="chk_acm0">&nbsp;&nbsp;Accommodation
                                            </label></div>
                            </div> 
                            <div id="team_form_members">
        
                            </div>
                            <div id="team_form_members_opt">
                            </div>
                            
                            <div>
                            <div class="col-md-12 col-sm-12 mt-3" id="email_note"><p><span class="text-danger">Only gmail addresses are allowed</span></p></div>
                          
                                <button type="button" class="btn btn-warning my-2 " name="addMoreMembers" id="addmoreMembersBtn">Add Member&nbsp;<i class="fas fa-plus-square"></i></button><br>
        <input type="submit" id="team_form_hid_btn" hidden/>
        
                                <div class="row ">
                                    <div class="col-xs-6 ml-3 mt-3">
                                        
                                    
                                        <div class="center"> 
                                        <label class="form-check-label">
                                                Accommodation for
                                            </label>
                                            <label class="checkbox-inline chk_ac_day">
                                            <input type="checkbox" id="day_1" value="1" >&nbsp;&nbsp;Day -1
                                            </label>
                                            <label class="checkbox-inline chk_ac_day">
                                            <input type="checkbox" id="day_2" value="2" >&nbsp;&nbsp;Day -2
                                            </label>
                                            <label class="checkbox-inline chk_ac_day">
                                            <input type="checkbox" id="day_3" value="3" >&nbsp;&nbsp;Day -3
                                            </label>
                                            <label class="checkbox-inline chk_ac_day">
                                            <input type="checkbox" id="day_4" value="4" >&nbsp;&nbsp;Day -4
                                            </label>
                                        </div>
                                       
                                    </div>
                                   
                                </div>
                                <div class="row" style='margin-bottom:10px;'>
                                <div class="col-md-12 col-sm-12"><input class="form-control" type="text" id="referralcode" placeholder="Referral Code" value=""; ></div>
                                <div class="col-md-12 col-sm-12 mt-3"><p><span class="text-danger">Note:</span> Schedule may change and accommodation dates can be changed accordingly </p></div>
                            </div> 
        
        
        
        
                            </div>
                        </form>
                    </div>
        
        
                <div style="margin-left: 40%;">
                    <button class="btn btn-outline-danger custom-button"><i class="fas fa-plus-square"></i>&nbsp;Add</button>
                </div>
        
                </div>
        
        </div>
<!-- end of col-7 -->
        
    </div>
    
</body>

<script type="text/javascript">


        var maxmemb=0;
        var minmemb=0;
        var rem_members=0;
        $('.modal-close').click(function(){
            $('#myModal').hide();
        });
    
        $('.modal-redirect').click(function(){
            window.location.href="//www.hestia.live/";
        });
    
            jQuery('.modal-body').on('change','.chk_acm',
        function(){ 
          
    
           
            checkBoxValidate();
            
        });
    
    function checkBoxValidate(){
    
        var flg=false;
            $('.chk_acm').each(function(i, obj) {
             
                if($(obj).prop('checked')){
                    flg=true;
                 
                }
               
                });
                if(flg==true){
                    $("#day_1").prop('disabled',false);
                  $("#day_2").prop('disabled',false);
                  $("#day_3").prop('disabled',false);
                  $("#day_4").prop('disabled',false);
                }else{
                    $("#day_1").prop('disabled',true);
                  $("#day_2").prop('disabled',true);
                  $("#day_3").prop('disabled',true);
                  $("#day_4").prop('disabled',true);
                  $("#day_1").prop('checked',false);
                  $("#day_2").prop('checked',false);
                  $("#day_3").prop('checked',false);
                  $("#day_4").prop('checked',false);
                }
    }
        $('.btn-custom').click(function(){
    
            $.ajax({
                type:'post',
                url:"//www.hestia.live/process/4",
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
                            if (typeof(Storage) !== "undefined") {
                                localStorage.setItem("pre_login_url", window.location.href);
                            
                                document.cookie = "book=Clicked";
    
                            }
                          window.location="https://accounts.google.com/o/oauth2/auth?response_type=code&access_type=online&client_id=917367370675-s4vebqfc42a9psh6244nncvq4ioolo1n.apps.googleusercontent.com&redirect_uri=https%3A%2F%2Fwww.hestia.live%2FAuth%2Foauth2callback&state&scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile&approval_prompt=auto";
                           
                            break;
                        }
                        case 200:{
                            $('.chk_team').css('display','inline');
                            $('#team_form').css('display','block');
                            $('#chk_acm0').prop('checked','true');
                            $('.chk_acommodation').css('display','none');
                            $('#div_acm0').css('display','none');
    
                            $('#div_mail0').addClass('col-md-12').removeClass('col-md-8');
    
                            
                            $('.modal-title').text("Details");
                            $('#myModal').show();
                                $("#addmoreMembersBtn").css({
                                    "display": "none"
                                });
                                var acc=array[2];
                                for(var i=1;i<=4;i++){
                                        if(acc.includes(i+"")){
                                      
                                            $("#day_"+i).prop('disabled','true');
                                            $("#day_"+i).prop('checked','true');
                                            $("#day_"+i).removeClass("chk_acm");
                                        }else{
    
    
                                        }
                                }
                            $('.modal-footer').html("<button type='button' class='btn btn-success' name='team_form_submit' class='team_form_submit' onclick='team_form_sumbit()' >Submit&nbsp;<i class='fas fa-check-circle'></i></button>");
                            break;
                        }
                        case 201:{
                            maxmemb=array[2];
                            minmemb=array[1];
                            $('.chk_team').css('display','inline');
                            rem_members=maxmemb-minmemb-1;
                            $("#day_1").prop('disabled',true);
                            $("#day_2").prop('disabled',true);
                            $("#day_3").prop('disabled',true);
                            $("#day_4").prop('disabled',true);
                            var n=minmemb-1;
                            var html="";
                            while(n>0){
                                html+=" <div class='row' style='margin-bottom:10px;'><div class='col-md-8 col-sm-12'><input class='form-control' type='email' id='email"+(minmemb-n)+"' placeholder='Email' required></div><div class='col-md-4 col-sm-12'><label class='checkbox-inline chk_acommodation'><input type='checkbox'  class='chk_acm'  id='chk_acm"+(minmemb-n)+"'>&nbsp;&nbsp;Accommodation</label></div></div>";
                                n--;
                            }
                            $('#team_form_members').html(html);
                            $('#team_form').css('display','block');
    
                            $('.modal-title').text("Add Members");
    
                            $('#myModal').show();
                            if(rem_members<0){
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
                var html=" <div class='row' style='margin-bottom:10px;' id='member_"+(minmemb+cur_cnt)+"'><div class='col-md-8 col-sm-12'><input class='form-control' type='email' id='email"+(minmemb+cur_cnt)+"' placeholder='Email' required> </div><div class='col-md-4 col-sm-12'><a id='member_"+(minmemb+cur_cnt)+"_close' class='close-href text-white' style='border: 0;float:left;position:absolute;left:-50px;' onclick='removeElement("+(minmemb+cur_cnt)+")'><button  class='btn btn-xs btn-danger'>X</button></a><label class='checkbox-inline chk_acommodation'><input type='checkbox'   class='chk_acm' id='chk_acm"+(minmemb+cur_cnt)+"'>&nbsp;&nbsp;Accommodation</label></div></div>";
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
            checkBoxValidate();
        }
        function team_form_sumbit(){
    
          
            emails_josn = [];
            $("input[type=email]").each(function() {
                email = {};
                email["email"] = $(this).val();
               
                if($(this).attr('id')!="email0"){
                    var email_regex = /^[a-zA-Z0-9._-]+@gmail.com$/i;
                    var mailid=$(this).val();
                    if(!email_regex.test(mailid)){
    
                        e.preventDefault();
                        return false;
    
                    }
    
                }
    
                
                var chkid=$(this).attr('id');
                chkid=chkid.replace("email","chk_acm");
                if($("#"+chkid).is(":checked")==true){
                    email["acc"] = "Y";
                }else{
                    email["acc"] = "N";
                }
                
                emails_josn.push(email);
            });
            var days_cm="";
            for(var i=1;i<=4;i++){
    
                if($("#day_"+i).is(":checked")==true && $("#day_"+i).is(':enabled')){
                    if(days_cm==""){
                        days_cm=$("#day_"+i).val();
                    }else{
                        days_cm=days_cm+""+$("#day_"+i).val();
                    }
                    email["acc"] = "Y";
                }
            }
            jsonObj = [];
            item = {};
            item ["event_id"] =4;
            item ["referral_code"] = $('#referralcode').val();
            item ["reg_email"] = "vm23526@gmail.com";
            item ["accommodation_days"] = days_cm;
            item ["emails"] = emails_josn;
            jsonObj.push(item);
            $('#json_data').val(JSON.stringify(item));
    
    
            
            $('#team_form_hid_btn').click();
    
    
        }
    
    
    </script>
    
    
</html>