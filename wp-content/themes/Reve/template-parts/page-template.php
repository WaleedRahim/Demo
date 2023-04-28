<?php

/* Template Name: Pop Up */
get_header();
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha512-k78e1fbYs09TQTqG79SpJdV4yXq8dX6ocfP0bzQHReQSbEghnS6AQHE2BbZKns962YaqgQL16l7PkiiAHZYvXQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet"> -->
<!-- <div class=" topbann btnn mt-5 pt-5">
 <a class="btn btn-default bttn" style="background-color: #27424D; color: white;" data-toggle="modal" href='#practiceprofile'>Take A Survey</a>
    <div id="practiceprofile" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg"> 

</div> -->

<!-- Modal content-->

<div class="pop-model">
<div class="modal-content">
    <div class="modal-header" style="background-color: #27424D; color: white;">
        <!-- <button id="crosbtn" type="button" class="close" data-dismiss="modal" style=" opacity: 12; color: red; "><span
                class="glyphicon glyphicon-remove" style="color: white;"></span></button> -->
        <h4 class="modal-title" style="font-weight: bold; ">PHQ-9 (Patient Health Questionnaire-9)</h4>
            <!-- <span id="crosstoclose" class="glyphicon glyphicon-star-empty"></span></h5> -->
    </div>
  
    <div class="modal-body">
        <h5 class="well" style="background-color: #27424D; color: white; padding: 25px 50px 25px 25px;"> <b>Ask the
                patient: how often have they been bothered by the following over the past 2 weeks? </b> </h5>

                <!-- Form -->


    <form method="post" class="myform" id="form1" action="">   
        
     
        <div class="container Scrl">
                <div class="col-xs-12 col-sm-12 col-md-12" style="border-bottom: 1px solid #e5e5e5;">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <h6 style="text-align: justify;"><b>Little interest or pleasure in doing things?</b> </h6>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                        <div class="btn-group btn-group-vertical btn-group-justified" data-toggle="buttons">

                            <div class="btn-group  ">
                                
                                    <label class="btn btn-default active" style="text-align: left; padding-right:10px">
                                    
                                    <input type="radio" name="littleintest" id="littleintest_notatall" value="0"><span class="pull-right">0</span> 
                                    </label>
                                    
                                    <label class="btn btn-default" style="text-align: left;">
                                    
                                        <input type="radio" name="littleintest" id="littleintest_severaldays"
                                            value="1"><span class="pull-right">+1</span>

                                    </label>

                                    <label class="btn btn-default" style="text-align: left;">
                                    <input type="radio" name="littleintest" id="littleintest_MTHTD" value="2"><span class="pull-right">+2</span>
                                    </label>

                                    <label class="btn btn-default" style="text-align: left;">
                                    <input type="radio" name="littleintest" id="littleintest_NED" value="3"><span class="pull-right">+3</span>
                                    </label>
                                
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12" style="border-bottom: 1px solid #e5e5e5; padding: 10px;">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <h6 style="text-align: justify;"><b>Feeling down, depressed, or hopeless?</b> </h6>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                        <div class="btn-group btn-group-vertical btn-group-justified" data-toggle="buttons">

                            <div class="btn-group  ">
                                <label class="btn btn-default active" style="text-align: left;">
                                    <input type="radio" name="FDDRH" id="FDDRH_notatall" value="0"><span
                                        class="pull-right">0</span>
                                </label>

                                <label class="btn btn-default" style="text-align: left;">
                                    <input type="radio" name="FDDRH" id="FDDRH_severaldays" value="1"><span
                                        class="pull-right">+1</span>
                                </label>

                                <label class="btn btn-default" style="text-align: left;">
                                    <input type="radio" name="FDDRH" id="FDDRH_MTHTD" value="2"><span class="pull-right">+2</span>
                                </label>

                                <label class="btn btn-default" style="text-align: left;">
                                    <input type="radio" name="FDDRH" id="FDDRH_NED" value="3"><span
                                        class="pull-right">+3</span>
                                </label>

                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12" style="border-bottom: 1px solid #e5e5e5; padding: 10px;">
                    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                        <h6 style="text-align: justify;"><b>Trouble falling or staying asleep, or sleeping too much?</b></h6>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                        <div class="btn-group btn-group-vertical btn-group-justified" data-toggle="buttons">

                            <div class="btn-group  ">
                                <label class="btn btn-default active" style="text-align: left;">
                                    <input type="radio" name="TFRS" id="TFRS_notatall" value="0"><span
                                        class="pull-right">0</span>
                                </label>

                                <label class="btn btn-default" style="text-align: left;">
                                    <input type="radio" name="TFRS" id="TFRS_severaldays" value="1"><span
                                        class="pull-right">+1</span>
                                </label>

                                <label class="btn btn-default" style="text-align: left;">
                                    <input type="radio" name="TFRS" id="TFRS_MTHTD" value="2"><span class="pull-right">+2</span>
                                </label>

                                <label class="btn btn-default" style="text-align: left;">
                                    <input type="radio" name="TFRS" id="TFRS_NED" value="3"><span
                                        class="pull-right">+3</span>
                                </label>

                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12" style="border-bottom: 1px solid #e5e5e5; padding: 10px;">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <h6 style="text-align: justify;"><b>Feeling tired or having little energy?</b> </h6>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                        <div class="btn-group btn-group-vertical btn-group-justified" data-toggle="buttons">

                            <div class="btn-group  ">
                                <label class="btn btn-default active" style="text-align: left;">
                                    <input type="radio" name="FTRHLE" id="FTRHLE_notatall" value="0"><span
                                        class="pull-right">0</span>
                                </label>

                                <label class="btn btn-default" style="text-align: left;">
                                    <input type="radio" name="FTRHLE" id="FTRHLE_severaldays" value="1"><span class="pull-right">+1</span>
                                </label>

                                <label class="btn btn-default" style="text-align: left;">
                                    <input type="radio" name="FTRHLE" id="FTRHLE_MTHTD" value="2"><span class="pull-right">+2</span>
                                </label>

                                <label class="btn btn-default" style="text-align: left;">
                                    <input type="radio" name="FTRHLE" id="FTRHLE_NED" value="3"><span
                                        class="pull-right">+3</span>
                                </label>

                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12" style="border-bottom: 1px solid #e5e5e5; padding: 10px;">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <h6 style="text-align: justify;"><b>Poor appetite or overeating?</b> </h6>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                        <div class="btn-group btn-group-vertical btn-group-justified" data-toggle="buttons">

                            <div class="btn-group  ">
                                <label class="btn btn-default active" style="text-align: left;">
                                    <input type="radio" name="PARO" id="PARO_notatall" value="0"><span
                                        class="pull-right">0</span>
                                </label>

                                <label class="btn btn-default" style="text-align: left;">
                                    <input type="radio" name="PARO" id="PARO_severaldays" value="1"><span
                                        class="pull-right">+1</span>
                                </label>

                                <label class="btn btn-default" style="text-align: left;">
                                    <input type="radio" name="PARO" id="PARO_MTHTD" value="2"><span class="pull-right">+2</span>
                                </label>

                                <label class="btn btn-default" style="text-align: left;">
                                    <input type="radio" name="PARO" id="PARO_NED" value="3"><span
                                        class="pull-right">+3</span>
                                </label>

                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12" style="border-bottom: 1px solid #e5e5e5; padding: 10px;">
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        <h6 style="text-align: justify;"><b>Feeling bad about yourself — or that you are a failure or have let yourself or your family down?</b> </h6>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                        <div class="btn-group btn-group-vertical btn-group-justified" data-toggle="buttons">

                            <div class="btn-group  ">
                                <label class="btn btn-default active" style="text-align: left;">
                                    <input type="radio" name="FBAYS" id="FBAYS_notatall" value="0"><span
                                        class="pull-right">0</span>
                                </label>

                                <label class="btn btn-default" style="text-align: left;">
                                    <input type="radio" name="FBAYS" id="FBAYS_severaldays" value="1"><span
                                        class="pull-right">+1</span>
                                </label>

                                <label class="btn btn-default" style="text-align: left;">
                                    <input type="radio" name="FBAYS" id="FBAYS_MTHTD" value="2"><span class="pull-right">+2</span>
                                </label>

                                <label class="btn btn-default" style="text-align: left;">
                                    <input type="radio" name="FBAYS" id="FBAYS_NED" value="3"><span
                                        class="pull-right">+3</span>
                                </label>

                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12" style="border-bottom: 1px solid #e5e5e5; padding: 10px;">
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        <h6 style="text-align: justify;"><b>Trouble concentrating on things, such as reading the
                                newspaper or watching television?
                            </b> </h6>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                        <div class="btn-group btn-group-vertical btn-group-justified" data-toggle="buttons">

                            <div class="btn-group  ">
                                <label class="btn btn-default active" style="text-align: left;">
                                    <input type="radio" name="TCOT" id="TCOT_notatall" value="0"><span
                                        class="pull-right">0</span>
                                </label>

                                <label class="btn btn-default" style="text-align: left;">
                                    <input type="radio" name="TCOT" id="TCOT_severaldays" value="1"><span
                                        class="pull-right">+1</span>
                                </label>

                                <label class="btn btn-default" style="text-align: left;">
                                    <input type="radio" name="TCOT" id="TCOT_MTHTD" value="2"><span class="pull-right">+2</span>
                                </label>

                                <label class="btn btn-default" style="text-align: left;">
                                    <input type="radio" name="TCOT" id="TCOT_NED" value="3"><span
                                        class="pull-right">+3</span>
                                </label>

                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12" style="border-bottom: 1px solid #e5e5e5; padding: 10px;">
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        <h6 style="text-align: justify;"><b>Moving or speaking so slowly that other people could have
                                noticed? Or so fidgety or restless that you have been moving a lot more than usual?</b>
                        </h6>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                        <div class="btn-group btn-group-vertical btn-group-justified" data-toggle="buttons">

                            <div class="btn-group  ">
                                <label class="btn btn-default active" style="text-align: left;">
                                    <input type="radio" name="MRSSS" id="MRSSS_notatall" value="0"><span
                                        class="pull-right">0</span>
                                </label>

                                <label class="btn btn-default" style="text-align: left;">
                                    <input type="radio" name="MRSSS" id="MRSSS_severaldays" value="1"><span
                                        class="pull-right">+1</span>
                                </label>

                                <label class="btn btn-default" style="text-align: left;">
                                    <input type="radio" name="MRSSS" id="MRSSS_MTHTD" value="2"><span class="pull-right">+2</span>
                                </label>

                                <label class="btn btn-default" style="text-align: left;">
                                    <input type="radio" name="MRSSS" id="MRSSS_NED" value="3"><span
                                        class="pull-right">+3</span>
                                </label>

                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12" style="border-bottom: 1px solid #e5e5e5; padding: 10px;">
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        <h6 style="text-align: justify;"><b>Thoughts that you would be better off dead, or thoughts of
                                hurting yourself in some way?</b> </h6>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                        <div class="btn-group btn-group-vertical btn-group-justified" data-toggle="buttons">

                            <div class="btn-group  ">
                                <label class="btn btn-default active" style="text-align: left;">
                                    <input type="radio" name="TTYWBBOD" class="dead" id="TTYWBBOD_notatall"
                                        value="0"><span class="pull-right">0</span>
                                </label>

                                <label class="btn btn-default" style="text-align: left;">
                                    <input type="radio" name="TTYWBBOD" class="dead" id="TTYWBBOD_severaldays"
                                        value="1"><span class="pull-right">+1</span>
                                </label>

                                <label class="btn btn-default" style="text-align: left;">
                                    <input type="radio" name="TTYWBBOD" class="dead" id="TTYWBBOD_MTHTD" value="2"><span class="pull-right">+2</span>
                                </label>

                                <label class="btn btn-default" style="text-align: left;">
                                    <input type="radio" name="TTYWBBOD" class="dead" id="TTYWBBOD_NED" value="3"><span class="pull-right">+3</span>
                                </label>

                            </div>
                        </div>

                    </div>

                </div>

                <div id="ASK_THE_PATIENT" class="col-xs-12 col-sm-12 col-md-12"
                    style="border-bottom: 1px solid #e5e5e5; padding: 10px; display: none;">
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        <h6 style="text-align: justify;"><b>Over the last 2 weeks, how often have you been bothered by the following problems</b> </h6>
                        <h6>Optional, not included in final score but may help assess global impairment</h6>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                        <div class="btn-group btn-group-vertical btn-group-justified" data-toggle="buttons">

                            <div class="btn-group  ">
                                <label class="btn btn-default active" style="text-align: left;">
                                    <input type="radio" name="" id="ATP_notatall" value="1">Not at all
                                </label>

                                <label class="btn btn-default" style="text-align: left;">
                                    <input type="radio" name="" id="ATP_somewhatdiff" value="2">Somewhat difficult
                                </label>

                                <label class="btn btn-default" style="text-align: left;">
                                    <input type="radio" name="" id="ATP_verydiff" value="3">Very difficult
                                </label>

                                <label class="btn btn-default" style="text-align: left;">
                                    <input type="radio" name="" id="ATP_extremelydiff" value="4">Extremely difficult
                                </label>

                            </div>
                        </div>

                    </div>

                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"
                style="background-color: #ffffff; color: black; padding: 25px 15px; border-top: 2px solid #0b2804;">

                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <h3><span id="PHQ9points" name="Totalpoints">0</span> <span style="font-size: 20px;">points</span> </h3>
                    <p id="PHQ9txt" name="TotalScore" style="font-size: 20px;">Minimal Or None</p>
                    <label id="CHK" style="display: none;"><input id="chkbox" type="checkbox">&nbsp;<span
                            style="font-size: 20px;">Schedule Patient Visit</span></label>
                </div>



                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div id='myChart' style="width: 389px; height: 245px;"></div>
                </div>

            </div>


            <div id="scrptdiv" class="col-sm-12 col-md-12 col-lg-12" style="background-color: #27424D; color: white; padding: 25px 15px; margin-top: 10px; display: none;">
                <div class="row justify-content-center">
                    Enter your Name:<input type="name" class="form-control col-md-3 ml-4 mr-3" id="name" name="name">
                    Enter your email:<input type="email" class="form-control col-md-3 ml-4 " id="email" name="email">
                </div>
            </div>


    </div>



                <div class="modal-footer">
                <button type="submit" name="submit" id="btn" style="margin: 20px 0 0 0;"> Send</button>
                
                </div>
                </form>
    
</div>  


<style>

label.btn.btn-default {
    padding-top: 8px;
    padding-bottom: 8px;
    font-size: 13px;
    font-weight: 700;
    color: #000;
    position: relative;
    background: #efefef;
    border: 1px solid #ccc;
    -webkit-box-shadow: 1px 1px 2px #eee;
    box-shadow: 1px 1px 2px #eee;
    padding-left: 20px;
    padding-right: 20px;
    display: block;
    text-align: center;
}

label.btn.btn-default.active{

    background: #27424D;
    color: #ffcb2f;
}

label.btn.btn-default:hover {
    background: white;
    -webkit-box-shadow: 4px 4px 4px #eee;
}
.pop-model {
    width: 100% !important;
    margin-left: 10Px;
    
}
h4.modal-title {
    text-align: center;
    margin-left: 26%;
}


.well{

    margin-bottom: 20px;
    margin-top:-11px;
}

h6{

    font-weight:500px;
    font-size:18px;
}

button#btn {
    color: white;
    padding: 10px 20px 10px 20px;
    background: black;
    /* margin-left: 30px; */
}
    </style>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src="bootstrap\js\jquery.min.js"></script> -->
<!-- Bootstrap JavaScript -->
<!-- <script src="bootstrap\js\bootstrap.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha512-ANkGm5vSmtDaoFA/NB1nVJzOKOiI4a/9GipFtkpMG8Rg2Bz8R1GFf5kfL0+z0lcv2X/KZRugwrAlVTAgmxgvIg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
var Clittle = 0,
    FD = 0,
    TF = 0,
    FT = 0,
    PARO = 0,
    FB = 0,
    TC = 0,
    MR = 0,
    TTY = 0;
var count = 0;
var text0_4 = "Minimal Or None",
    text5_9 = "Mild",
    text10_14 = "Moderate",
    text15_19 = "Moderately severe",
    text20_27 = "Severe";

$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
    Riskometre(count);
});

$("input[type=radio][name='littleintest']").change(function() {
    
    if (Clittle != 0) {
        count -= parseInt(Clittle);
    }

    Clittle = $("input[name='littleintest']:checked").val();
    if (Clittle == 1 || Clittle == 2 || Clittle == 3 || $('#ASK_THE_PATIENT').css('display') == 'none') {
        $("#ASK_THE_PATIENT").show();
    } else {
        $("#ASK_THE_PATIENT").hide();
    }
    count += parseInt(Clittle);
    showcount(count);
})
$("input[type=radio][name='FDDRH']").change(function() {
    if (FD != 0) {
        count -= parseInt(FD);
    }
    FD = $("input[name='FDDRH']:checked").val();
    if (FD == 1 || FD == 2 || FD == 3 || $('#ASK_THE_PATIENT').css('display') == 'none') {
        $("#ASK_THE_PATIENT").show();
    } else {
        $("#ASK_THE_PATIENT").hide();
    }

    count += parseInt(FD);
    showcount(count);
})
$("input[type=radio][name='TFRS']").change(function() {
    if (TF != 0) {
        count -= parseInt(TF);
    }

    TF = $("input[name='TFRS']:checked").val();
    if (TF == 1 || TF == 2 || TF == 3 || $('#ASK_THE_PATIENT').css('display') == 'none') {
        $("#ASK_THE_PATIENT").show();
    } else {
        $("#ASK_THE_PATIENT").hide();
    }
    count += parseInt(TF);
    showcount(count);
})
$("input[type=radio][name='FTRHLE']").change(function() {
    if (FT != 0) {
        count -= parseInt(FT);
    }
    FT = $("input[name='FTRHLE']:checked").val();

    if (FT == 1 || FT == 2 || FT == 3 || $('#ASK_THE_PATIENT').css('display') == 'none') {
        $("#ASK_THE_PATIENT").show();
    } else {
        $("#ASK_THE_PATIENT").hide();
    }
    count += parseInt(FT);
    showcount(count);
})
$("input[type=radio][name='PARO']").change(function() {
    if (PARO != 0) {
        count -= parseInt(PARO);
    }
    PARO = $("input[name='PARO']:checked").val();

    if (PARO == 1 || PARO == 2 || PARO == 3 || $('#ASK_THE_PATIENT').css('display') == 'none') {
        $("#ASK_THE_PATIENT").show();
    } else {
        $("#ASK_THE_PATIENT").hide();
    }
    count += parseInt(PARO);
    showcount(count);
})
$("input[type=radio][name='FBAYS']").change(function() {
    if (FB != 0) {
        count -= parseInt(FB);
    }
    FB = $("input[name='FBAYS']:checked").val();
    if (FB == 1 || FB == 2 || FB == 3 || $('#ASK_THE_PATIENT').css('display') == 'none') {
        $("#ASK_THE_PATIENT").show();
    } else {
        $("#ASK_THE_PATIENT").hide();
    }
    count += parseInt(FB);
    showcount(count);
})
$("input[type=radio][name='TCOT']").change(function() {
    if (TC != 0) {
        count -= parseInt(TC);
    }
    TC = $("input[name='TCOT']:checked").val();
    if (TC == 1 || TC == 2 || TC == 3 || $('#ASK_THE_PATIENT').css('display') == 'none') {
        $("#ASK_THE_PATIENT").show();
    } else {
        $("#ASK_THE_PATIENT").hide();
    }
    count += parseInt(TC);
    showcount(count);
})
$("input[type=radio][name='MRSSS']").change(function() {
    if (MR != 0) {
        count -= parseInt(MR);
    }
    MR = $("input[name='MRSSS']:checked").val();
    if (MR == 1 || MR == 2 || MR == 3 || $('#ASK_THE_PATIENT').css('display') == 'none') {
        $("#ASK_THE_PATIENT").show();
    } else {
        $("#ASK_THE_PATIENT").hide();
    }
    count += parseInt(MR);
    showcount(count);
})
$("input[type=radio][name='TTYWBBOD']").change(function() {
    if (TTY != 0) {
        count -= parseInt(TTY);
    }
    TTY = $("input[name='TTYWBBOD']:checked").val();
    if (TTY == 1 || TTY == 2 || TTY == 3 || $('#ASK_THE_PATIENT').css('display') == 'none') {
        $("#ASK_THE_PATIENT").show();
    } else {
        $("#ASK_THE_PATIENT").hide();
    }
    count += parseInt(TTY);
    showcount(count);
})

function showcount(count) {
    if (count >= 0 && count <= 4) {
        $("#PHQ9points").text(count);
        $("#PHQ9points").css("color", "black");
        $("#PHQ9txt").text(text0_4);
        $("#PHQ9txt").css("color", "black");
    } else if (count >= 5 && count <= 9) {
        $("#PHQ9points").text(count);
        $("#PHQ9points").css("color", "green");
        $("#PHQ9txt").text(text5_9);
        $("#PHQ9txt").css("color", "green");
    } else if (count >= 10 && count <= 14) {
        $("#PHQ9points").text(count);
        $("#PHQ9points").css("color", "#5833FF");
        $("#PHQ9txt").text(text10_14);
        $("#PHQ9txt").css("color", "#5833FF");
    } else if (count >= 15 && count <= 19) {
        $("#PHQ9points").text(count);
        $("#PHQ9points").css("color", "purple");
        $("#PHQ9txt").text(text10_14);
        $("#PHQ9txt").css("color", "purple");
    } else if (count >= 20 && count <= 27) {
        $("#PHQ9points").text(count);
        $("#PHQ9points").css("color", "red");
        $("#PHQ9txt").text(text20_27);
        $("#PHQ9txt").css("color", "red");
    }
    if (count > 4) {
        $("#CHK").show();
        $("#closebtn").css("display", "none");
        $("#crosbtn").css("display", "none");
    } else {
        $("#CHK").hide();
        $("#closebtn").show();
        $("#chkbox").prop("checked", false);
        $("#crosbtn").show();
        $("#scrptdiv").hide();
    }
    $('input[type="checkbox"]').click(function() {
        if ($(this).is(":checked")) {
            $("#closebtn").show();
            $("#crosbtn").show();
            $("#scrptdiv").show();
        } else if ($(this).is(":not(:checked)")) {
            $("#closebtn").hide();
            $("#crosbtn").css("display", "none");
            $("#scrptdiv").hide();
        }
    });
    Riskometre(count);
}

//////////////////////////////////////////////////////////////////

function Riskometre(count) {
    var myConfig = {
        type: "gauge",
        globals: {
            fontSize: 25
        },
        plotarea: {
            marginTop: 50
        },
        plot: {
            size: '90%',
            valueBox: {
                placement: 'center',
                text: '%v', //default
                fontSize: 24,
                rules: [{
                    rule: '' + count + ' >= 0 && ' + count + ' <= 4',
                    text: '<br><br><br>' + count + '<br>Minimal or none'
                }, {
                    rule: '' + count + '>= 5 && ' + count + ' < 10',
                    text: '<br><br><br>' + count + '<br>Mild'
                }, {
                    rule: '' + count + ' >= 10 && ' + count + ' < 15',
                    text: '<br><br><br>' + count + '<br>Moderate'
                }, {
                    rule: '' + count + ' >= 15 && ' + count + ' < 20',
                    text: '<br><br><br>' + count + '<br>Moderately severe'
                }, {
                    rule: '' + count + ' >= 20 && ' + count + ' < 28',
                    text: '<br><br><br>' + count + '<br>Severe'
                }]
            }
        },
        tooltip: {
            borderRadius: 5
        },
        scaleR: {
            aperture: 180,
            minValue: 0,
            maxValue: 28,
            step: 1,
            center: {
                visible: false
            },
            tick: {
                visible: false
            },
            item: {
                offsetR: 0,
                rules: [{
                    rule: '%i == 9',
                    offsetX: 10
                }]
            },
            labels: ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
            ring: {
                size: 50,
                rules: [{
                    rule: '%v <= 4',
                    backgroundColor: '#00B200'
                }, {
                    rule: '%v >= 5 && %v <= 9',
                    backgroundColor: '#00E500'
                }, {
                    rule: '%v >= 10 && %v <= 14',
                    backgroundColor: '#FFFF1E'
                }, {
                    rule: '%v >= 15 && %v <= 19',
                    backgroundColor: '#ffaa1d'
                }, {
                    rule: '%v >= 20 && %v <= 28',
                    backgroundColor: '#FF0000'
                }]
            }
        },
        refresh: {
            type: "feed",
            transport: "js",
            url: "feed()",
        },
        series: [{
            values: [count], // starting value
            backgroundColor: 'black',
        }]
    };

    zingchart.render({
        id: 'myChart',
        data: myConfig,
        height: 300,
        width: '100%'
    });


}


</script>


 <script>
jQuery(document).ready(function($) {



$('.myform').on('submit', function(event) {
   
    event.preventDefault();
    
    alert("Form Submitted Sucessfully....!");

    var link = " <?php echo admin_url('admin-ajax.php')?> ";

    var form = jQuery('.myform').serialize();

   
    var score = $('#PHQ9txt').text();
    var points = $('#PHQ9points').text();

   var forms = form+'&Score='+score+'&points='+points;
    var formData = new FormData;
   formData.append('action','contact_us');
   formData.append('contact_us',forms);
//    formData.append('Score',score);
//    formData.append('points',points);
  
debugger;
   jQuery.ajax({
    type: 'post',
    url: link,
    data: formData,
    processData:false,
    contentType:false,
    success: function (result) {
        alert (result);
    }
   });

   this.reset();

   
});
});

</script>


