<?php include("include/db_connection.php");

$draftEn = "SELECT * FROM mst_recruitment_en WHERE  status='L' ORDER BY updated_on desc ";
$resultDraftEn = pg_query($db, $draftEn);
$count = pg_num_rows($resultDraftEn);
echo $count;
// $myArray = [];

// array_push($myArray, (object)[
//     'key1' => $sku,
//     'key2' => $sku,
//     'key3' => $sku,
// ]);

// return $myArray;
$arr = [];
while ($row = pg_fetch_assoc($resultDraftEn)) {
    $o = new stdClass;
    $o->title_id = $row['title_id'];
    $o->adfile = $row['adfile_name'];
    $o->app_file = $row['appfile_name'];
    array_push($arr, $o);
}

echo json_encode($arr, JSON_UNESCAPED_UNICODE);
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
// // print_r($myArray);
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
    <?php include("include/header.php"); ?>
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
                    <p><a href="index.php"><i class="fa fa-home "> </i> /</a> Recruitment</p>
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
            <h3 class="text-center"><strong>Recruitment</strong></h3>
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
                        $i = 0;
                        while (
                            $row = pg_fetch_array(
                                $resultDraftEn
                            )

                        ) {
                            $path = "../niotadmin/uploads/recruitment" . $row['filename'] . "";
                            $fileSize = filesize($path);
                            $fileSize = round($fileSize / 1024);
                            //   var_dump($fileSize);
                            // $file1 = basename($path);
                            // $file2 = pathinfo($path );
                            // pathinfo($path);
                            // echo $path;
                            // exit;

                        ?>
                            <tr>
                                <td><?php echo
                                    ++$i ?>
                                </td>
                                <td><?php
                                    echo  $row['title']; ?></td>
                                <td style="width:20%;"><?php
                                                        if ($row['adfile_name'] != '') {
                                                        ?>
                                        <a href='../niotadmin/uploads/recruitment/<?php echo $row['adfile_name'] ?>' target="_blank" style="color:blue;" title="View Here"> Download Advertisement (<?php echo  $row['add_filesize'];  ?> ) &nbsp; <i class="fa fa-file-pdf-o fa-lg" style="color:#F44336;"></i></a> &nbsp;&nbsp;<a href=""> <i class="fa fa-download fa-lg " style="color:#673AB7;" title="Download Here" aria-hidden="true"></i></a>
                                        <br><br>
                                        <a href='../niotadmin/uploads/recruitment/<?php echo $row['adfile_name'] ?>' target="_blank" style="color:blue;" title="View Here"> Download Advertisement (<?php echo  $row['app_filesize'];  ?> ) &nbsp; <i class="fa fa-file-pdf-o fa-lg" style="color:#F44336;"></i></a> &nbsp;&nbsp;<a href=""> <i class="fa fa-download fa-lg " style="color:#673AB7;" title="Download Here" aria-hidden="true"></i></a>
                                    <?php


                                                        } else {
                                    ?>
                                        <a href='<?php echo $row['link']; ?>' style="color:blue;"> Click here to apply </a><?php
                                                                                                                        }
                                                                                                                            ?>
                                </td>
                                <td style="width:20%;"><?php
                                                        if ($row['appfile_name'] != '') {
                                                        ?>
                                        <a href='../niotadmin/uploads/recruitment/<?php echo $row['appfile_name'] ?>' target="_blank" style="color:blue;" title="View Here">Click here (<?php echo $row['app_filesize'];  ?> ) &nbsp; <i class="fa fa-file-pdf-o fa-lg" style="color:#F44336;"></i></a> &nbsp;&nbsp;<a href=""> <i class="fa fa-download fa-lg " style="color:#673AB7;" title="Download Here" aria-hidden="true"></i></a>

                                    <?php


                                                        } else {
                                    ?>
                                        <a href='<?php echo $row['link']; ?>' style="color:blue;"> click Here </a><?php
                                                                                                                }
                                                                                                                    ?>
                                </td>
                                <td>Last Date For Online Applications : <b style="color:red"><?php
                                                                                                echo  date(
                                                                                                    'd-m-Y ',
                                                                                                    strtotime(
                                                                                                        $row['announce_dt']
                                                                                                    )
                                                                                                );
                                                                                                ?></b>
                                    <br><br>
                                    Last Date For Receipt : <b><?php
                                                                echo  date(
                                                                    'd-m-Y ',
                                                                    strtotime(
                                                                        $row['announce_dt']
                                                                    )
                                                                );
                                                                ?></b>
                                    <br><br>
                                    Last Date For Of Non-remote localities : <b> <?php
                                                                                    echo  date(
                                                                                        'd-m-Y ',
                                                                                        strtotime(
                                                                                            $row['announce_dt']
                                                                                        )
                                                                                    );
                                                                                    ?></b>
                                    <br><br>
                                    Last Date For Hard Copy of Applications - Remote localities : <b><?php
                                                                                                        echo  date(
                                                                                                            'd-m-Y ',
                                                                                                            strtotime(
                                                                                                                $row['announce_dt']
                                                                                                            )
                                                                                                        );
                                                                                                        ?></b>
                                </td>


                            </tr> <?php  } ?>

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