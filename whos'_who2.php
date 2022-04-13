<?php include 'db/db_connection.php';
include 'session.php';

// $checkrow = "select * from niot_whos_who where types='secretary' and content <> '' limit 1";
// $resultcheckrow = pg_query($db, $checkrow);
// $checkrowcount = pg_num_rows($resultcheckrow);

// $annualreport = "select  *  from _events limit 1";
$annualreport = "select  *  from niot_whos_who where designation='niot_minister' and contents <> '' limit 1";

$resultannualreport = pg_query($db, $annualreport);
$annualreportcount = pg_num_rows($resultannualreport);

$row1 = pg_fetch_array(
    $resultannualreport
);


$saveniot_secretary = "select  *  from niot_whos_who where designation='niot_secretary' and contents <> '' limit 1";

$resultsaveniot_secretary = pg_query($db, $saveniot_secretary);
$saveniot_secretarycount = pg_num_rows($resultsaveniot_secretary);

$row2 = pg_fetch_array(
    $resultsaveniot_secretary
);

$keyobjective = "select  *  from niot_whos_who where designation='niot_director' and contents <> '' limit 1";

$resultkeyobjective = pg_query($db, $keyobjective);
$keyobjectivecount = pg_num_rows($resultkeyobjective);

$row3 = pg_fetch_array(
    $resultkeyobjective
);


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>NIOT-Who's Who</title>

    <?php include 'include/sourcelink_css.php'; ?>
    <?php include 'include/sourcelink_js.php'; ?>
</head>

<body>

    <div id="main">
        <?php include 'include/sidebar.php'; ?>
        <?php include 'include/header.php'; ?>

        <div class="tooltips-area" style="padding-top:40px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget-tabs-int tab-ctm-wp mg-t-30">
                            <div class="widget-tabs-list">
                                <ul class="nav nav-tabs tab-nav-right">
                                    <li class="active"><a data-toggle="tab" href="#english" >English</a></li>
                                    <li><a data-toggle="tab" href="#hindi" >Hindi</a></li>
                                    <li><a data-toggle="tab" href="#tamil" >Tamil</a></li>
                                </ul>
                            </div>
                            <div class="tab-content tab-custom-st tab-ctn-right">
                                <div id="english" class="tab-pane fade in active">
                                    <div class="tab-hd">
                                        <h1 class="text-center">Who's Who</h1>
                                        <!-- <p>Simply include the class <code>.tab-nav-right</code> to align the tab header to right side.</p> -->
                                    </div>
                                    <div class="widget-tabs-list">
                                        <ul class="nav nav-tabs tab-nav-right">
                                            <li class="active"><a data-toggle="tab" href="#home2" onclick="tab('niot_minister')">Niot Minister</a></li>
                                            <li><a data-toggle="tab" href="#menu12" onclick="tab('niot_secretary')">Niot Secretary</a></li>
                                            <li><a data-toggle="tab" href="#menu22" onclick="tab('niot_director')">Niot Director</a></li>
                                        </ul>
                                        <div class="tab-content tab-custom-st tab-ctn-right">
                                            <div id="home2" class="tab-pane fade in active">
                                                <div class="tab-ctn">
                                                    <div id="textAddDiv1">
                                                        <h3 class="text-center"> Niot Minister</h3>
                                                        <form id="save-content-form" data-parsley-validate="">

                                                            <div class="form-group ">
                                                                <?php if ($annualreportcount == 0) {
                                                                ?>
                                                                    <textarea class="tinymce" id="saveniot_minister"></textarea>
                                                                    </br>
                                                                    <button class="btn btn-primary mt-4" type="button" onclick="savedata('niot_minister')">Submit</button>
                                                                <?php } else {

                                                                ?>
                                                                    <div class="row" id="editBtn1">
                                                                        <!-- <div class="container"> -->
                                                                        <div class="col-lg-12">

                                                                            <!-- <h2 class="text-center">News/Announcement</h2> -->
                                                                            <div id="editDiv" style="padding-bottom:50px;">

                                                                                <button class="btn btn-success notika-btn-success pull-left" type="button" onclick="editFunction('niot_minister');"><i class="fa fa-plus"> </i> Edit</button>


                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-12" style="border: 2px solid #041e42;border-radius:25px;">
                                                                                    <div class="form-group">

                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top:10px;padding-bottom:10px;">
                                                                                            <?php echo $row1['contents'] ?>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                <?php } ?>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="tooltips-inner">
                                                                <div class="tooltips-static tooltips-cvn">
                                                                    <div id="texteditordiv1">
                                                                        <!-- <h3 class="text-center"> niot_minister</h3> -->
                                                                        <form id="edit-content-form" data-parsley-validate="">
                                                                            <div class="form-group ">

                                                                                <textarea id="editniot_minister" class="tinymce"><?php echo $row1['contents']; ?></textarea>
                                                                                </br>
                                                                                <div class="text-center">
                                                                                    <button class="btn btn-primary mt-4" type="button" onclick="updateText('niot_minister');"> Update</button>
                                                                                    <button class="btn btn-danger mt-4">Close</button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="menu12" class="tab-pane fade">
                                                <div class="tab-ctn">
                                                    <div id="textAddDiv2">
                                                        <h3 class="text-center"> Niot Secretary</h3>
                                                        <form id="save-content-form" data-parsley-validate="">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <?php if ($saveniot_secretarycount == 0) {
                                                                    ?>
                                                                        <textarea class="tinymce" id="saveniot_secretary"></textarea>
                                                                        </br>
                                                                        <button class="btn btn-primary mt-4" type="button" onclick="savedata('niot_secretary')">Submit</button>
                                                                    <?php } else {

                                                                    ?>
                                                                </div>
                                                            </div>
                                                            <div class="row" id="editBtn2">
                                                                <!-- <div class="container"> -->
                                                                <div class="col-lg-12">

                                                                    <!-- <h2 class="text-center">News/Announcement</h2> -->
                                                                    <div id="editDiv" style="padding-bottom:50px;">
                                                                        <button class="btn btn-success notika-btn-success pull-left" type="button" onclick="editFunction('niot_secretary');"><i class="fa fa-plus"> </i> Edit</button>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12" style="border: 2px solid #041e42;border-radius:25px;">
                                                                            <div class="form-group">

                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top:10px;padding-bottom:10px;">
                                                                                    <?php echo $row2['contents'] ?>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>

                                                            <?php } ?>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="tooltips-inner">
                                                                <div class="tooltips-static tooltips-cvn">
                                                                    <div id="texteditordiv2">
                                                                        <div class="col-lg-12">
                                                                            <form id="edit-content-form" data-parsley-validate="">
                                                                                <div class="form-group ">
                                                                                    <textarea id="editniot_secretary" class="tinymce"><?php echo $row2['contents']; ?></textarea>
                                                                                    </br>
                                                                                    <div class="text-center">
                                                                                        <button class="btn btn-primary mt-4" type="button" onclick="updateText('niot_secretary');">Update</button>
                                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                    </div>
                                                                                </div>

                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="menu22" class="tab-pane fade">
                                                <div class="tab-ctn">
                                                    <div id="textAddDiv3">
                                                        <h3 class="text-center">Niot Director</h3>
                                                        <form id="save-content-form" data-parsley-validate="">
                                                            <div class="form-group ">
                                                                <?php if ($keyobjectivecount == 0) {
                                                                ?>
                                                                    <textarea class="tinymce" id="saveniot_director"></textarea>
                                                                    </br>
                                                                    <button class="btn btn-primary mt-4" type="button" onclick="savedata('niot_director')">Submit</button>
                                                                <?php } else {

                                                                ?>
                                                                    <div class="row" id="editBtn3">
                                                                        <!-- <div class="container"> -->
                                                                        <div class="col-lg-12">

                                                                            <!-- <h2 class="text-center">News/Announcement</h2> -->
                                                                            <div id="editDiv" style="padding-bottom:50px;">
                                                                                <button class="btn btn-success notika-btn-success pull-left" type="button" onclick="editFunction('niot_director');"><i class="fa fa-plus"> </i> Edit</button>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-12" style="border: 2px solid #041e42;border-radius:25px;">
                                                                                    <div class="form-group">

                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top:10px;padding-bottom:10px;">
                                                                                            <?php echo $row3['contents'] ?>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                <?php } ?>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="tooltips-inner">
                                                                <div class="tooltips-static tooltips-cvn">
                                                                    <div id="texteditordiv3">
                                                                        <form id="edit-content-form" data-parsley-validate="">
                                                                            <div class="form-group ">
                                                                                <textarea id="editniot_director" class="tinymce"><?php echo $row3['contents']; ?></textarea>
                                                                                </br>
                                                                                <div class="text-center">
                                                                                    <button class="btn btn-primary mt-4" type="button" onclick="updateText('niot_director');">update</button>
                                                                                    <button class="btn btn-danger mt-4">Close</button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="hindi" class="tab-pane fade in active">
                                    <div class="tab-hd">
                                        <h1 class="text-center">कौन कौन है (Who's Who)</h1>
                                        <!-- <p>Simply include the class <code>.tab-nav-right</code> to align the tab header to right side.</p> -->
                                    </div>
                                    <div class="widget-tabs-list">
                                        <ul class="nav nav-tabs tab-nav-right">
                                            <li class="active"><a data-toggle="tab" href="#home2" onclick="tab('niot_minister')">Niot Minister</a></li>
                                            <li><a data-toggle="tab" href="#menu12" onclick="tab('niot_secretary')">Niot Secretary</a></li>
                                            <li><a data-toggle="tab" href="#menu22" onclick="tab('niot_director')">Niot Director</a></li>
                                        </ul>
                                        <div class="tab-content tab-custom-st tab-ctn-right">
                                            <div id="home2" class="tab-pane fade in active">
                                                <div class="tab-ctn">
                                                    <div id="textAddDiv1">
                                                        <h3 class="text-center"> Niot Minister</h3>
                                                        <form id="save-content-form" data-parsley-validate="">

                                                            <div class="form-group ">
                                                                <?php if ($annualreportcount == 0) {
                                                                ?>
                                                                    <textarea class="tinymce" id="saveniot_minister"></textarea>
                                                                    </br>
                                                                    <button class="btn btn-primary mt-4" type="button" onclick="savedata('niot_minister')">Submit</button>
                                                                <?php } else {

                                                                ?>
                                                                    <div class="row" id="editBtn1">
                                                                        <!-- <div class="container"> -->
                                                                        <div class="col-lg-12">

                                                                            <!-- <h2 class="text-center">News/Announcement</h2> -->
                                                                            <div id="editDiv" style="padding-bottom:50px;">

                                                                                <button class="btn btn-success notika-btn-success pull-left" type="button" onclick="editFunction('niot_minister');"><i class="fa fa-plus"> </i> Edit</button>


                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-12" style="border: 2px solid #041e42;border-radius:25px;">
                                                                                    <div class="form-group">

                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top:10px;padding-bottom:10px;">
                                                                                            <?php echo $row1['contents'] ?>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                <?php } ?>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="tooltips-inner">
                                                                <div class="tooltips-static tooltips-cvn">
                                                                    <div id="texteditordiv1">
                                                                        <!-- <h3 class="text-center"> niot_minister</h3> -->
                                                                        <form id="edit-content-form" data-parsley-validate="">
                                                                            <div class="form-group ">

                                                                                <textarea id="editniot_minister" class="tinymce"><?php echo $row1['contents']; ?></textarea>
                                                                                </br>
                                                                                <div class="text-center">
                                                                                    <button class="btn btn-primary mt-4" type="button" onclick="updateText('niot_minister');"> Update</button>
                                                                                    <button class="btn btn-danger mt-4">Close</button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="menu12" class="tab-pane fade">
                                                <div class="tab-ctn">
                                                    <div id="textAddDiv2">
                                                        <h3 class="text-center"> Niot Secretary</h3>
                                                        <form id="save-content-form" data-parsley-validate="">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <?php if ($saveniot_secretarycount == 0) {
                                                                    ?>
                                                                        <textarea class="tinymce" id="saveniot_secretary"></textarea>
                                                                        </br>
                                                                        <button class="btn btn-primary mt-4" type="button" onclick="savedata('niot_secretary')">Submit</button>
                                                                    <?php } else {

                                                                    ?>
                                                                </div>
                                                            </div>
                                                            <div class="row" id="editBtn2">
                                                                <!-- <div class="container"> -->
                                                                <div class="col-lg-12">

                                                                    <!-- <h2 class="text-center">News/Announcement</h2> -->
                                                                    <div id="editDiv" style="padding-bottom:50px;">
                                                                        <button class="btn btn-success notika-btn-success pull-left" type="button" onclick="editFunction('niot_secretary');"><i class="fa fa-plus"> </i> Edit</button>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12" style="border: 2px solid #041e42;border-radius:25px;">
                                                                            <div class="form-group">

                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top:10px;padding-bottom:10px;">
                                                                                    <?php echo $row2['contents'] ?>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>

                                                            <?php } ?>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="tooltips-inner">
                                                                <div class="tooltips-static tooltips-cvn">
                                                                    <div id="texteditordiv2">
                                                                        <div class="col-lg-12">
                                                                            <form id="edit-content-form" data-parsley-validate="">
                                                                                <div class="form-group ">
                                                                                    <textarea id="editniot_secretary" class="tinymce"><?php echo $row2['contents']; ?></textarea>
                                                                                    </br>
                                                                                    <div class="text-center">
                                                                                        <button class="btn btn-primary mt-4" type="button" onclick="updateText('niot_secretary');">Update</button>
                                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                    </div>
                                                                                </div>

                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="menu22" class="tab-pane fade">
                                                <div class="tab-ctn">
                                                    <div id="textAddDiv3">
                                                        <h3 class="text-center">Niot Director</h3>
                                                        <form id="save-content-form" data-parsley-validate="">
                                                            <div class="form-group ">
                                                                <?php if ($keyobjectivecount == 0) {
                                                                ?>
                                                                    <textarea class="tinymce" id="saveniot_director"></textarea>
                                                                    </br>
                                                                    <button class="btn btn-primary mt-4" type="button" onclick="savedata('niot_director')">Submit</button>
                                                                <?php } else {

                                                                ?>
                                                                    <div class="row" id="editBtn3">
                                                                        <!-- <div class="container"> -->
                                                                        <div class="col-lg-12">

                                                                            <!-- <h2 class="text-center">News/Announcement</h2> -->
                                                                            <div id="editDiv" style="padding-bottom:50px;">
                                                                                <button class="btn btn-success notika-btn-success pull-left" type="button" onclick="editFunction('niot_director');"><i class="fa fa-plus"> </i> Edit</button>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-12" style="border: 2px solid #041e42;border-radius:25px;">
                                                                                    <div class="form-group">

                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top:10px;padding-bottom:10px;">
                                                                                            <?php echo $row3['contents'] ?>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                <?php } ?>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="tooltips-inner">
                                                                <div class="tooltips-static tooltips-cvn">
                                                                    <div id="texteditordiv3">
                                                                        <form id="edit-content-form" data-parsley-validate="">
                                                                            <div class="form-group ">
                                                                                <textarea id="editniot_director" class="tinymce"><?php echo $row3['contents']; ?></textarea>
                                                                                </br>
                                                                                <div class="text-center">
                                                                                    <button class="btn btn-primary mt-4" type="button" onclick="updateText('niot_director');">update</button>
                                                                                    <button class="btn btn-danger mt-4">Close</button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tamil" class="tab-pane fade in active">
                                    <div class="tab-hd">
                                        <h1 class="text-center">யார் யார் (Who's Who)</h1>
                                        <!-- <p>Simply include the class <code>.tab-nav-right</code> to align the tab header to right side.</p> -->
                                    </div>
                                    <div class="widget-tabs-list">
                                        <ul class="nav nav-tabs tab-nav-right">
                                            <li class="active"><a data-toggle="tab" href="#home2" onclick="tab('niot_minister')">Niot Minister</a></li>
                                            <li><a data-toggle="tab" href="#menu12" onclick="tab('niot_secretary')">Niot Secretary</a></li>
                                            <li><a data-toggle="tab" href="#menu22" onclick="tab('niot_director')">Niot Director</a></li>
                                        </ul>
                                        <div class="tab-content tab-custom-st tab-ctn-right">
                                            <div id="home2" class="tab-pane fade in active">
                                                <div class="tab-ctn">
                                                    <div id="textAddDiv1">
                                                        <h3 class="text-center"> Niot Minister</h3>
                                                        <form id="save-content-form" data-parsley-validate="">

                                                            <div class="form-group ">
                                                                <?php if ($annualreportcount == 0) {
                                                                ?>
                                                                    <textarea class="tinymce" id="saveniot_minister"></textarea>
                                                                    </br>
                                                                    <button class="btn btn-primary mt-4" type="button" onclick="savedata('niot_minister')">Submit</button>
                                                                <?php } else {

                                                                ?>
                                                                    <div class="row" id="editBtn1">
                                                                        <!-- <div class="container"> -->
                                                                        <div class="col-lg-12">

                                                                            <!-- <h2 class="text-center">News/Announcement</h2> -->
                                                                            <div id="editDiv" style="padding-bottom:50px;">

                                                                                <button class="btn btn-success notika-btn-success pull-left" type="button" onclick="editFunction('niot_minister');"><i class="fa fa-plus"> </i> Edit</button>


                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-12" style="border: 2px solid #041e42;border-radius:25px;">
                                                                                    <div class="form-group">

                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top:10px;padding-bottom:10px;">
                                                                                            <?php echo $row1['contents'] ?>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                <?php } ?>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="tooltips-inner">
                                                                <div class="tooltips-static tooltips-cvn">
                                                                    <div id="texteditordiv1">
                                                                        <!-- <h3 class="text-center"> niot_minister</h3> -->
                                                                        <form id="edit-content-form" data-parsley-validate="">
                                                                            <div class="form-group ">

                                                                                <textarea id="editniot_minister" class="tinymce"><?php echo $row1['contents']; ?></textarea>
                                                                                </br>
                                                                                <div class="text-center">
                                                                                    <button class="btn btn-primary mt-4" type="button" onclick="updateText('niot_minister');"> Update</button>
                                                                                    <button class="btn btn-danger mt-4">Close</button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="menu12" class="tab-pane fade">
                                                <div class="tab-ctn">
                                                    <div id="textAddDiv2">
                                                        <h3 class="text-center"> Niot Secretary</h3>
                                                        <form id="save-content-form" data-parsley-validate="">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <?php if ($saveniot_secretarycount == 0) {
                                                                    ?>
                                                                        <textarea class="tinymce" id="saveniot_secretary"></textarea>
                                                                        </br>
                                                                        <button class="btn btn-primary mt-4" type="button" onclick="savedata('niot_secretary')">Submit</button>
                                                                    <?php } else {

                                                                    ?>
                                                                </div>
                                                            </div>
                                                            <div class="row" id="editBtn2">
                                                                <!-- <div class="container"> -->
                                                                <div class="col-lg-12">

                                                                    <!-- <h2 class="text-center">News/Announcement</h2> -->
                                                                    <div id="editDiv" style="padding-bottom:50px;">
                                                                        <button class="btn btn-success notika-btn-success pull-left" type="button" onclick="editFunction('niot_secretary');"><i class="fa fa-plus"> </i> Edit</button>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12" style="border: 2px solid #041e42;border-radius:25px;">
                                                                            <div class="form-group">

                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top:10px;padding-bottom:10px;">
                                                                                    <?php echo $row2['contents'] ?>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>

                                                            <?php } ?>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="tooltips-inner">
                                                                <div class="tooltips-static tooltips-cvn">
                                                                    <div id="texteditordiv2">
                                                                        <div class="col-lg-12">
                                                                            <form id="edit-content-form" data-parsley-validate="">
                                                                                <div class="form-group ">
                                                                                    <textarea id="editniot_secretary" class="tinymce"><?php echo $row2['contents']; ?></textarea>
                                                                                    </br>
                                                                                    <div class="text-center">
                                                                                        <button class="btn btn-primary mt-4" type="button" onclick="updateText('niot_secretary');">Update</button>
                                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                    </div>
                                                                                </div>

                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="menu22" class="tab-pane fade">
                                                <div class="tab-ctn">
                                                    <div id="textAddDiv3">
                                                        <h3 class="text-center">Niot Director</h3>
                                                        <form id="save-content-form" data-parsley-validate="">
                                                            <div class="form-group ">
                                                                <?php if ($keyobjectivecount == 0) {
                                                                ?>
                                                                    <textarea class="tinymce" id="saveniot_director"></textarea>
                                                                    </br>
                                                                    <button class="btn btn-primary mt-4" type="button" onclick="savedata('niot_director')">Submit</button>
                                                                <?php } else {

                                                                ?>
                                                                    <div class="row" id="editBtn3">
                                                                        <!-- <div class="container"> -->
                                                                        <div class="col-lg-12">

                                                                            <!-- <h2 class="text-center">News/Announcement</h2> -->
                                                                            <div id="editDiv" style="padding-bottom:50px;">
                                                                                <button class="btn btn-success notika-btn-success pull-left" type="button" onclick="editFunction('niot_director');"><i class="fa fa-plus"> </i> Edit</button>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-12" style="border: 2px solid #041e42;border-radius:25px;">
                                                                                    <div class="form-group">

                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top:10px;padding-bottom:10px;">
                                                                                            <?php echo $row3['contents'] ?>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                <?php } ?>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="tooltips-inner">
                                                                <div class="tooltips-static tooltips-cvn">
                                                                    <div id="texteditordiv3">
                                                                        <form id="edit-content-form" data-parsley-validate="">
                                                                            <div class="form-group ">
                                                                                <textarea id="editniot_director" class="tinymce"><?php echo $row3['contents']; ?></textarea>
                                                                                </br>
                                                                                <div class="text-center">
                                                                                    <button class="btn btn-primary mt-4" type="button" onclick="updateText('niot_director');">update</button>
                                                                                    <button class="btn btn-danger mt-4">Close</button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- <div class="form-example-area">
				<div class="container">
					<h2 class="text-center">niot_minister</h2>
					<div class="data-table-list-En-draft">
						<div class="row">
							<div class="container">
								<div class="col-lg-12">
									 <h2 class="text-center">News/Announcement</h2> 
									<div style="padding-top:10px;" id="editDiv">
										<button class="btn btn-success notika-btn-success pull-left" data-toggle="modal" data-target="#addModal" style="margin-left:10px;" onclick="addNew('en');"><i class="fa fa-plus"> </i> Add New</button>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="container">
									<div class="col-lg-12">

										<div class="card" style="width: 18rem;">
											<img class="card-img-top" src="..." alt="Card image cap">
											<div class="card-body">
												<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>

					</div> 
				</div>

			</div> 
			</div>-->
            </div>
        </div>
    </div>


    <div class="modal animated " id="addModal" role="dialog" tabindex="-1" data-keyboard="true" data-backdrop="static">
        <div class="modal-dialog modal-large">
            <div class="modal-content">
                <div class="modal-header" style=" border-bottom: 1px solid #e8e8e8;">
                    <div class="col-lg-12" style="padding-bottom:10px;">
                        <div class="col-lg-2">
                            <!-- <a href="#" > -->
                            <img src="img/niotHeader.png" alt="Niot Logo" class="pull-right">
                        </div>
                        <div class="col-lg-10" style="padding-top:10px;">
                            <h2 class="text-center"><span id="modalHeader"></span></h2>
                        </div>
                    </div>

                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" style="padding-top:10px;">


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" onclick="add_recruitment(this.value);" id="subLang">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php include 'include/footer.php'; ?>

    <script type="text/javascript">
        var niot_ministercount, missioncount, keycount;
        var checkrowcount = "<?php echo $checkrowcount ?>";
        $(document).ready(function() {

            niot_ministercount = "<?php echo $annualreportcount ?>";
            missioncount = "<?php echo $saveniot_secretarycount ?>";
            keycount = "<?php echo $keyobjectivecount ?>";


            console.log(niot_ministercount, missioncount, keycount);
            if (niot_ministercount == 0) {
                $('#editBtn1').hide();
                $('#texteditordiv1').hide();

            } else {
                $('#editBtn1').show();
                $('#texteditordiv1').hide();
            }

            if (missioncount == 0) {
                $('#editBtn2').hide();
                $('#texteditordiv2').hide();
            } else {
                $('#editBtn2').show();
                $('#texteditordiv2').hide();
            }

            if (keycount == 0) {
                $('#editBtn3').hide();
                $('#texteditordiv3').hide();
            } else {
                $('#editBtn3').show();
                $('#texteditordiv3').hide();
            }

            tinymce.init({
                selector: '.tinymce',
                browser_spellcheck: true,
                document_base_url: 'http://localhost:8080/niotadmin/uploads',
                images_upload_base_path: 'http://localhost:8080/niotadmin/uploads',
                images_upload_url: {
                    "location": "http://localhost:8080/niotadmin/uploads"
                },
                images_upload_credentials: true,
                // images_file_types: 'jpg,svg,webp',
                images_upload_handler: function(blobInfo, success, failure) {
                    setTimeout(function() {
                        /* no matter what you upload, we will turn it into TinyMCE logo :)*/
                        success({
                            location: 'http://localhost:8080/niotadmin/uploads'
                        });
                    }, 2000);
                },
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
                plugins: [
                    "advlist autolink textcolor colorpicker lists link image  charmap print anchor",
                    "searchreplace visualblocks code",
                    "insertdatetime media paste codesample table preview"
                ],
                toolbar: "preview undo redo | fontselect styleselect fontsizeselect | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | codesample action section button | custom_button | table tabledelete | tableprops tablerowprops tablecellprops | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol ",
                // content_css: [window.location.origin+"/assets/css/custom_css_tinymce.css"],
                font_formats: "Segoe UI=Segoe UI;Arial=arial,helvetica,sans-serif;Courier New=courier new,courier,monospace;AkrutiKndPadmini=Akpdmi-n",
                fontsize_formats: "8px 9px 10px 11px 12px 14px 16px 18px 20px 22px 24px 26px 28px 30px 32px 34px 36px 38px 40px 42px 44px 46px 48px 50px 52px 54px 56px 58px 60px 62px 64px 66px 68px 70px 72px 74px 76px 78px 80px 82px 84px 86px 88px 90px 92px 94px 94px 96px",
                advlist_bullet_styles: 'square',
                codesample_languages: [{
                        text: 'HTML/XML',
                        value: 'markup'
                    },
                    {
                        text: 'JavaScript',
                        value: 'javascript'
                    },
                    {
                        text: 'CSS',
                        value: 'css'
                    },
                    {
                        text: 'PHP',
                        value: 'php'
                    },
                    {
                        text: 'Ruby',
                        value: 'ruby'
                    },
                    {
                        text: 'Python',
                        value: 'python'
                    },
                    {
                        text: 'Java',
                        value: 'java'
                    },
                    {
                        text: 'C',
                        value: 'c'
                    },
                    {
                        text: 'C#',
                        value: 'csharp'
                    },
                    {
                        text: 'C++',
                        value: 'cpp'
                    }
                ],
                height: 300,
                statusbar: false,
                setup: function(editor) {
                    editor.ui.registry.addButton('custom_button', {
                        text: 'Add Button',
                        onAction: function() {
                            // Open a Dialog
                            editor.windowManager.open({
                                title: 'Add custom button',
                                body: {
                                    type: 'panel',
                                    items: [{
                                        type: 'input',
                                        name: 'button_label',
                                        label: 'Button label',
                                        flex: true
                                    }, {
                                        type: 'input',
                                        name: 'button_href',
                                        label: 'Button href',
                                        flex: true
                                    }, {
                                        type: 'selectbox',
                                        name: 'button_target',
                                        label: 'Target',
                                        items: [{
                                                text: 'None',
                                                value: ''
                                            },
                                            {
                                                text: 'New window',
                                                value: '_blank'
                                            },
                                            {
                                                text: 'Self',
                                                value: '_self'
                                            },
                                            {
                                                text: 'Parent',
                                                value: '_parent'
                                            }
                                        ],
                                        flex: true
                                    }, {
                                        type: 'selectbox',
                                        name: 'button_rel',
                                        label: 'Rel',
                                        items: [{
                                                text: 'No value',
                                                value: ''
                                            },
                                            {
                                                text: 'Alternate',
                                                value: 'alternate'
                                            },
                                            {
                                                text: 'Help',
                                                value: 'help'
                                            },
                                            {
                                                text: 'Manifest',
                                                value: 'manifest'
                                            },
                                            {
                                                text: 'No follow',
                                                value: 'nofollow'
                                            },
                                            {
                                                text: 'No opener',
                                                value: 'noopener'
                                            },
                                            {
                                                text: 'No referrer',
                                                value: 'noreferrer'
                                            },
                                            {
                                                text: 'Opener',
                                                value: 'opener'
                                            }
                                        ],
                                        flex: true
                                    }, {
                                        type: 'selectbox',
                                        name: 'button_style',
                                        label: 'Style',
                                        items: [{
                                                text: 'Success',
                                                value: 'success'
                                            },
                                            {
                                                text: 'Info',
                                                value: 'info'
                                            },
                                            {
                                                text: 'Warning',
                                                value: 'warning'
                                            },
                                            {
                                                text: 'Error',
                                                value: 'error'
                                            }
                                        ],
                                        flex: true
                                    }]
                                },
                                onSubmit: function(api) {

                                    var html = '<a href="' + api.getData().button_href + '" class="btn btn-' + api.getData().button_style + '" rel="' + api.getData().button_rel + '" target="' + api.getData().button_target + '">' + api.getData().button_label + '</a>';

                                    // insert markup
                                    editor.insertContent(html);

                                    // close the dialog
                                    api.close();
                                },
                                buttons: [{
                                        text: 'Close',
                                        type: 'cancel',
                                        onclick: 'close'
                                    },
                                    {
                                        text: 'Insert',
                                        type: 'submit',
                                        primary: true,
                                        enabled: false
                                    }
                                ]
                            });
                        }
                    });
                },
                automatic_uploads: true,
                file_picker_types: 'image',
                file_picker_callback: function(cb, value, meta) {
                    var input = document.createElement('input');
                    input.setAttribute('type', 'file');
                    input.setAttribute('accept', 'image/*');

                    /*
                      Note: In modern browsers input[type="file"] is functional without
                      even adding it to the DOM, but that might not be the case in some older
                      or quirky browsers like IE, so you might want to add it to the DOM
                      just in case, and visually hide it. And do not forget do remove it
                      once you do not need it anymore.
                    */

                    input.onchange = function() {
                        var file = this.files[0];

                        var reader = new FileReader();
                        reader.onload = function() {
                            /*
                              Note: Now we need to register the blob in TinyMCEs image blob
                              registry. In the next release this part hopefully won't be
                              necessary, as we are looking to handle it internally.
                            */
                            var id = 'blobid' + (new Date()).getTime();
                            var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                            var base64 = reader.result.split(',')[1];
                            var blobInfo = blobCache.create(id, file, base64);
                            blobCache.add(blobInfo);

                            /* call the callback and populate the Title field with the file name */
                            cb(blobInfo.blobUri(), {
                                title: file.name
                            });
                        };
                        reader.readAsDataURL(file);
                        console.log(reader);
                    };

                    input.click();
                },
            });
        });

        // $('#save-content-form').on('submit', function(e) {
        // 	e.preventDefault();

        // 	var savedata = $('#save-content-form').serializeArray();
        // 	savedata.push({
        // 		name: 'content',
        // 		value: tinyMCE.get('tinymce').getContent()
        // 	});
        // 	$.ajax({
        // 		type: 'POST',
        // 		url: 'webservice/texteditorsave.php',
        // 		data: savedata,
        // 		success: function(response, textStatus, xhr) {
        // 			console.log(response)
        // 		},
        // 		complete: function(xhr) {

        // 		},
        // 		error: function(XMLHttpRequest, textStatus, errorThrown) {
        // 			var response = XMLHttpRequest;

        // 		}
        // 	});
        // });


        function savedata(type) {
            var value;
            if (type == 'niot_minister') {
                value = tinyMCE.get('saveniot_minister').getContent();
            } else if (type == 'niot_secretary') {
                value = tinyMCE.get('saveniot_secretary').getContent();
            } else {
                value = tinyMCE.get('saveniot_director').getContent();
            }

            data = {
                value: value,
                type: type,
                operation: 'save',
                checkrowcount: checkrowcount
            }

            // console.log(editdata[0].edit);
            $.ajax({
                type: 'POST',
                // contentType: "application/json",
                // dataType: "json",
                url: 'webservice/whos_whosave.php',
                data: data,
                success: function(response, textStatus, xhr) {

                    console.log(response);

                    swal({
                        title: "",
                        text: "Successfully Saved!",
                        type: "success",
                        buttons: [
                            'NO',
                            'YES'
                        ],
                    }).then(function(isConfirm) {
                        if (isConfirm) {
                            location.reload();
                        } else {
                            //if no clicked => do something else
                        }
                    });
                },
                complete: function(xhr) {

                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    var response = XMLHttpRequest;
                    swal("Error :Archive!", "Please try again", "error");

                }
            });
        }

        function updateText(type) {
            var editvalue;
            if (type == 'niot_minister') {
                editvalue = tinyMCE.get('editniot_minister').getContent().replace(/'/g, "");
            } else if (type == 'niot_secretary') {
                editvalue = tinyMCE.get('editniot_secretary').getContent().replace(/'/g, "");
            } else {
                editvalue = tinyMCE.get('editniot_director').getContent().replace(/'/g, "");
            }

            data = {
                value: editvalue,
                type: type,
                operation: 'edit',
                checkrowcount: checkrowcount
            }

            $.ajax({
                type: 'POST',
                // contentType: "application/json",
                // dataType: "json",
                url: 'webservice/whos_whosave.php',
                data: data,
                success: function(response, textStatus, xhr) {

                    console.log(response);

                    // swal({
                    // 		title: "Good job",
                    // 		text: "You clicked the button!",
                    // 		type: "success"
                    // 	},
                    // 	function() {
                    // 		location.reload();
                    // 	}
                    // );
                    swal({
                        title: "",
                        text: "Successfully Updated!",
                        type: "success",
                        buttons: [
                            'NO',
                            'YES'
                        ],
                    }).then(function(isConfirm) {
                        if (isConfirm) {
                            location.reload();
                        } else {
                            //if no clicked => do something else
                        }
                    });
                },
                complete: function(xhr) {

                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    var response = XMLHttpRequest;
                    swal("Error :Archive!", "Please try again", "error");

                }
            });
        }

        // $('#edit-content-form').on('submit', function(e) {
        // 	e.preventDefault();

        // 	var editdata = $('#edit-content-form').serializeArray();

        // 	editdata.push({
        // 		name: 'content',
        // 		value: tinyMCE.get('tinymce1').getContent(),
        // 		edit: 'edit'
        // 	});

        // 	console.log(editdata);

        // 	$.ajax({
        // 		type: 'POST',
        // 		url: 'webservice/texteditupdate.php',
        // 		data: editdata,
        // 		success: function(response, textStatus, xhr) {
        // 			swal({
        // 				title: "Good job",
        // 				text: "You clicked the button!",
        // 				type: "success"
        // 			}).then(function() {
        // 				location.reload();
        // 			});

        // 		},
        // 		complete: function(xhr) {

        // 		},
        // 		error: function(XMLHttpRequest, textStatus, errorThrown) {
        // 			var response = XMLHttpRequest;
        // 			swal("Error :Archive!", "Please try again", "error");

        // 		}
        // 	});
        // });

        function tab(result) {

            if (result == 'niot_minister') {
                if (niot_ministercount == 0) {
                    $('#texteditordiv1').hide();
                    $('#textAddDiv1').show();
                    // $('#texteditordiv2').hide();
                    // $('#textAddDiv2').hide();
                    // $('#texteditordiv3').hide();
                    // $('#textAddDiv3').hide();
                } else {
                    $('#texteditordiv1').hide();
                    $('#textAddDiv1').show();
                }

                // $('#texteditordiv2').hide();
                // $('#textAddDiv2').hide();
                // $('#texteditordiv3').hide();
                // $('#textAddDiv3').hide();
            } else if (result == 'niot_secretary') {

                if (missioncount == 0) {
                    $('#texteditordiv2').hide();
                    $('#textAddDiv2').show();
                    $('#texteditordiv3').hide();
                    $('#textAddDiv3').hide();
                } else {
                    $('#texteditordiv2').hide();
                    $('#textAddDiv2').show();
                }
                // $('#texteditordiv3').hide();
                // $('#textAddDiv3').hide();
                // $('#texteditordiv1').hide();
                // $('#textAddDiv1').hide();
            } else if (result == 'niot_director') {

                if (keycount == 0) {

                    $('#texteditordiv3').hide();
                    $('#textAddDiv3').show();
                    $('#texteditordiv2').hide();
                    $('#textAddDiv2').hide();
                    // $('#texteditordiv1').hide();
                    // $('#textAddDiv1').hide();
                } else {

                    $('#texteditordiv3').hide();
                    $('#textAddDiv3').show();
                    $('#texteditordiv2').hide();
                    $('#textAddDiv2').hide();
                    // $('#textAddDiv2').hide();
                    // // 	$('#texteditordiv1').hide();
                    // $('#textAddDiv1').hide();

                    // $('#texteditordiv1').hide();
                }

            }
        }

        function editFunction(values) {
            // console.log(tinyMCE.get('tinymce').getContent());
            if (values == 'niot_minister') {
                $('#texteditordiv1').show();
                $('#textAddDiv1').hide();
            } else if (values == 'niot_secretary') {
                $('#texteditordiv2').show();
                $('#textAddDiv2').hide();
            } else {
                $('#texteditordiv3').show();
                $('#textAddDiv3').hide();
            }





        }
    </script>
</body>

</html>