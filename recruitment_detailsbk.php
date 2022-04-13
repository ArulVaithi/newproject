<?php include("include/db_connection.php");

// print_r(count($data));
// exit;
// echo json_encode($data, JSON_UNESCAPED_UNICODE);
// exit;

// exit;

// // print_r($data);
// foreach ($arr as $l) {
//     if ($count % 2 == 0) {
//         $data2[$count] = array(
//             "id" => $l->id,
//             "title" => $l->title,

//         );

//         $data2[$count]['adfile_name'] = [];
//         $data2[$count]['adfile_name'][] = $l->answer;
//     } else {
//         $data2[$count - 1]['adfile_name'][] = $l->answer;
//     }

//     $count++;
// }

// print_r(json_encode($data2));
// $json = ['publications' => []];

// if($count > 0)
// {
//     while($row = pg_fetch_assoc($resultDraftEn))
//     {
//         $json['publications'][] = [
//             'nom' => $row['nom'],
//             'id' => $row['id'],
//             'userid' => $row['userid'],
//             'publication' => $row['publication'],
//             'time' => $row['time'],
//             'avatar' => $row['avatar']
//         ];
//     }
//     echo json_encode($json);
// }
// else
// {
//     echo "0";
// }
// echo $count;
// $myArray = [];

// array_push($myArray, (object)[
//     'key1' => $sku,
//     'key2' => $sku,
//     'key3' => $sku,
// ]);

// return $myArray;
// $result = pg_query($con, $query);
// $i = 1;
// while ($row = pg_fetch_array($resultDraftEn)) {
//     // $adfile = [];
//     // $adfile_data = $row['adfile_name'];
//     // array_push($adfile, $adfile_data);
//     // $app_file = [];
//     // $app_filedata = $row['appfile_name'];
//     // array_push($app_file, $app_filedata);

//     $id = $row['title_id'];

//     // $adfile_data = $row['adfile_name'];
//     // $app_filedata = $row['adfile_data'];
//     if ($i == $id) {
//         $title = $row['title'];
//         $adfile = [];
//         $app_file = [];
//         $adfile_data = $row['adfile_name'];
//         array_push($adfile, $adfile_data);

//         $app_filedata = $row['appfile_name'];
//         array_push($app_file, $app_filedata);
//          print_r($adfile);
//     } 
//     $return_arr[] = array(
//         "id" => $id,
//         "title" => $title,
//         "adfile_data" => $adfile,
//         "app_filedata" => $app_file
//     );
//     ++$i;
// }

// // Encoding array in JSON format
// echo json_encode($return_arr);
// exit;
// $arr = [];

// while (
//     $row = pg_fetch_array(
//         $resultDraftEn
//     )

// ) {
//     $id = $row['title_id'];
//     $adfile = [];
//     $adfile_data = $row['adfile_name'];
//     array_push($adfile, $adfile_data);
//     $app_file = [];
//     $app_filedata = $row['appfile_name'];
//     array_push($app_file, $app_filedata);
//     // print_r($adfile);
//     // print_r($app_file);

//     // array_push($myArray, (object)[
//     //     'id' => $id,
//     //     'adfile' => $adfile,
//     //     '$app_file' => $app_file,

//     // ]);


//     // print_r($adfile);
//     for ($i = 1; $i <= $count; $i++) {
//         // echo $row['title_id'];
//         echo $i;
//         if ($i == $row['title_id']) {
//             // echo $i;
//             $myArray = [];

//             // echo  $adfile ;
//             array_push($myArray, (object)[
//                 'id' => $i,
//                 'adfile' => $adfile,
//                 'app_file' => $app_file,

//             ]);
//         }
//     }
// }
// echo json_encode($myArray);
// print_r($arr);
// exit;
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>National Institute of Ocean Technology</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include("include/sourcelink-css.php") ?>
</head>

<body>
    <?php include("include/header.php");


    $draftEn = "SELECT * FROM mst_recruitment_$currentLang WHERE  status='L' ORDER BY updated_on desc ";
    $resultDraftEn = pg_query($db, $draftEn);
    $count = pg_num_rows($resultDraftEn);

    $arr = [];
    $impdate = [];
    while ($row = pg_fetch_assoc($resultDraftEn)) {
        $announce_dt = $row['announce_dt'];
        $online_dt = $row['onlinedate_on'];
        $receipt_dt = $row['receiptdate_on'];
        $hardcopy_dt = $row['hardcopyon'];
        // array_push($impdate, $announce_dt);
        // array_push($impdate, $online_dt);
        // array_push($impdate, $receipt_dt);
        // array_push($impdate, $hardcopy_dt);

        $o = new stdClass;
        $o->id = $row['title_id'];
        $o->title = $row['title'];
        $o->title_id = $row['title_id'];
        $o->adfile = $row['adfile_name'];
        $o->app_file = $row['appfile_name'];
        $o->impdates[] = $announce_dt;
        $o->impdates[] = $online_dt;
        $o->impdates[] = $receipt_dt;
        $o->impdates[] = $hardcopy_dt;
        array_push($arr, $o);
    }
    // print_r($impdate);
    // echo json_encode($impdate, JSON_UNESCAPED_UNICODE);
    // exit;
    // echo json_encode($arr, JSON_UNESCAPED_UNICODE);
    $data = [];
    foreach ($arr as $l) {
        $data[$l->id]['id'] = $l->id;
        $data[$l->id]['title'] = $l->title;
        $data[$l->id]['adfile_name'][] = $l->adfile;
        $data[$l->id]['appfile_name'][] = $l->app_file;
        $data[$l->id]['important_dates'][] = $l->impdates;
    }
    $data = array_values($data);    ?>
    <!-- bradcam_area_start  -->
    <!-- <div class="bradcam_area breadcam_bg bradcam_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3></h3>
                        <h2 class="text-center" style="color:#041E42"><strong>Press Release</strong></h2>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- bradcam_area_end  -->

    <div class="bradcam_area_img breadcam_bg"></div>

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3></h3>
                    <p><a href="index.php"><i class="fa fa-home "> </i> /</a> Recruitments / Current Vacancies</p>
                </div>
            </div>
        </div>
    </div>
    <!-- 
    <div class="container">
        <div class="row">
            <div class="col-xl-12" style="padding-top:5px;">
                <div class="breadcrumb flat">
                    <a href="index.php"><i class="fa fa-home fa-lg"></i> Home</a>
                    <a href="#" class="active"> Press Release</a>
                </div>

            </div>
        </div>
    </div> -->

    <section>
        <!-- <div class="container"> -->
        <!-- <div class="row"> -->
        <div class="data-tables" style="padding-left:100px;padding-right:100px">
            <h2 class="text-center"><strong>Recruitments</strong></h2>
            <h4 class="text-center"><strong>Current Vacancies</strong></h4>
            <div class="table-responsive">
                <table id="tbl-en-draft" class="table  table-bordered dt-responsive" style="width:100">
                    <!-- <button class="btn btn-success notika-btn-success pull-left" data-toggle="modal" data-target="#addModal" style="margin-right:20px;" onclick="addNew('en');"><i class="fa fa-plus"> </i> Add New</button>
        <h3 class="text-center" style="padding-right:110px;">Draft Items</h3> -->
                    <thead bgcolor="#D3D3D3">
                        <tr>
                            <!-- <th><input type="checkbox" class="" id='checkallusers' onclick="checkAll(id);"> All
                                                        </th> -->
                            <th class="text-center" style="width:2%">S.No</th>
                            <th class="text-center " style="width:20%">Advertisement</th>
                            <th class="text-center">Download Advertisement</th>
                            <th class="text-center">Application Form</th>
                            <th class="text-center" style="width:20%">Important Dates</th>

                        </tr>
                    </thead>
                    <tbody>



                        <?php
                        // for($i=1; $i<$count; $i++)
                        // {
                        // echo $count;
                        $sno = 0;
                        for ($i = 0; $i < count($data); $i++) {
                            // print_r($data[$i]['important_dates'][1]);
                            // print(count($data[$i]['important_dates'][1]));
                            //    exit;



                            // while (
                            //     $row = pg_fetch_array(
                            //         $resultDraftEn
                            //     )

                            // ) {
                            //     $path = "../niotadmin/uploads/recruitment" . $row['filename'] . "";
                            //     $fileSize = filesize($path);
                            //     $fileSize = round($fileSize / 1024);
                            //     //   var_dump($fileSize);
                            //     // $file1 = basename($path);
                            //     // $file2 = pathinfo($path );
                            //     // pathinfo($path);
                            //     // echo $path;
                            //     // exit;

                        ?>
                            <tr>
                                <td><?php echo ++$sno ?>
                                </td>
                                <td><?php
                                    echo  $data[$i]['title'] ?></td>
                                <td style="width:20%;"><?php

                                                        if ($data[$i]['adfile_name'] != '') {

                                                            for ($j = 0; $j < count($data[$i]['adfile_name']); $j++) {
                                                        ?>
                                            <a href='../niotadmin/uploads/recruitment/<?php echo $data[$i]['adfile_name'][$j]; ?>' target="_blank" style="color:blue;" title="View Here"> Download Advertisement (<?php echo  $data[$i]['adfile_name'][$j]  ?> ) &nbsp; <i class="fa fa-file-pdf-o fa-lg" style="color:#F44336;"></i></a> &nbsp;&nbsp;<a href=""> <i class="fa fa-download fa-lg " style="color:#673AB7;" title="Download Here" aria-hidden="true"></i></a>
                                            <br><br>
                                            <!-- <a href='../niotadmin/uploads/recruitment/' target="_blank" style="color:blue;" title="View Here"> Download Advertisement (<?php echo  $row['app_filesize'];  ?> ) &nbsp; <i class="fa fa-file-pdf-o fa-lg" style="color:#F44336;"></i></a> &nbsp;&nbsp;<a href=""> <i class="fa fa-download fa-lg " style="color:#673AB7;" title="Download Here" aria-hidden="true"></i></a> -->
                                        <?php


                                                            }
                                                        } else {
                                        ?>
                                        <a href='<?php echo $data[$i]['adfile_name'] ?>' style="color:blue;"> Click here to apply </a><?php
                                                                                                                                    }
                                                                                                                                        ?>
                                </td>
                                <td style="width:20%;"><?php
                                                        if (($data[$i]['appfile_name']) != '') {
                                                            for ($k = 0; $k < count($data[$i]['adfile_name']); $k++) {
                                                        ?>
                                            <a href='../niotadmin/uploads/recruitment/<?php echo $data[$i]['appfile_name'][$k] ?>' target="_blank" style="color:blue;" title="View Here">Download Advertisement(<?php echo $data[$i]['appfile_name'][$k]  ?> ) &nbsp; <i class="fa fa-file-pdf-o fa-lg" style="color:#F44336;"></i></a> &nbsp;&nbsp;<a href=""> <i class="fa fa-download fa-lg " style="color:#673AB7;" title="Download Here" aria-hidden="true"></i></a>
                                            <br><br>
                                        <?php


                                                            }
                                                        } else {
                                        ?>
                                        <a href='<?php echo $data[$i]['appfile_name'] ?>' style="color:blue;"> click Here </a><?php
                                                                                                                            }
                                                                                                                                ?>
                                </td>

                                <td>
                                    <?php for ($m = 0; $m < count($data[$i]['important_dates']); $m++) {  ?>
                                        Last Date For Online Applications : <b style="color:red"><?php echo  date('d-m-Y ', strtotime($data[$i]['important_dates'][$m][0])); ?></b>
                                        <br><br>
                                        Last Date For Receipt : <b><?php echo  date('d-m-Y ', strtotime($data[$i]['important_dates'][$m][1])); ?></b>
                                        <br><br>
                                        Last Date For Of Non-remote localities : <b> <?php echo  date('d-m-Y ', strtotime($data[$i]['important_dates'][$m][2])); ?></b>
                                        <br><br>
                                        Last Date For Hard Copy of Applications - Remote localities : <b><?php echo  date('d-m-Y ', strtotime($data[$i]['important_dates'][$m][3])); ?></b>
                                    <?php } ?>
                                </td>

                            </tr> <?php  }
                                // }
                                    ?>

                    </tbody>
                </table>
                <!-- </div> -->
                <!-- </div> -->
            </div>

    </section>

    <?php include("include/bottomfooter.php"); ?>

    <?php include("include/sourcelink-js.php"); ?>

    <script>
        $(document).ready(function() {

        });

        $('#tbl-en-draft').DataTable();
        // $('#tbl-en-draft').DataTable({

        // });

        function showtable() {
            var my_columns = [];
            var dataSet = [];

            $.ajax({
                async: false,
                success: function(response) {

                    dataSet = JSON.parse(response);
                    //instead of "dataSet=response;"

                    $.each(dataSet[0], function(key, value) {

                    });
                }
            });
        }
    </script>
</body>

</html>