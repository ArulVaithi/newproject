<?php include("include/db_connection.php");
// $draftEn = "SELECT * FROM mst_recruitment_en WHERE  status='L'  ORDER BY updated_on desc ";
// $draftEn  = "select * from mst_recruitment_en as ab
// inner join (select title,title_id from mst_recruitment_en where title_id in (select title_id from 
// mst_recruitment_en where status='L' group by title_id)  group by title,title_id) app on  
// ab.title_id = app.title_id ";
// $resultDraftEn = pg_query($db, $draftEn);
// $resultcount = pg_num_rows($resultDraftEn);
// echo $resultcount

$check = "select * from mst_recruitment_en 
where status='L' ";
$resultDraftEn = pg_query($db, $check);

if (pg_num_rows($resultDraftEn)) {

    $data = array();
    while ($row = pg_fetch_array($resultDraftEn)) {
        $data[] = array(
            'id' => $row['title_id'],
            'name' => $row['adfile_name']
        );
    }
}
//  $myarray = array();
// while ($row = pg_fetch_row($resultDraftEn)) {
//   $myarray[] = $row;
// }

print_r($data);
exit;
//  while($row = pg_fetch_array(
//     $resultDraftEn
// ))
// {
//     echo $row['ad_filename'];
//     // foreach($row as $value)
//     // {
//     //   print_r( $value);
//     // }

// }

exit;


// // $row = pg_fetch_result($resultDraftEn);
// while (
//     $row = pg_fetch_array(
//         $resultDraftEn
//     )

// ) {
//     echo $row['adfile_name'];
// }
// // echo $resultDraftEn;
// // echo $title_id;
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

                                                        if ($row['adfile_name'] != '') { { ?> <a href='../niotadmin/uploads/recruitment/<?php echo $row['adfile_name'] ?>' target="_blank" style="color:blue;" title="View Here"> Download Advertisement (<?php echo  $row['add_filesize'];  ?> ) &nbsp; <i class="fa fa-file-pdf-o fa-lg" style="color:#F44336;"></i></a> &nbsp;&nbsp;<a href=""> <i class="fa fa-download fa-lg " style="color:#673AB7;" title="Download Here" aria-hidden="true"></i></a> <br><?php

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ?>

                                        <br><br>
                                        <!-- <a href='../niotadmin/uploads/recruitment/<?php echo $row['adfile_name'] ?>' target="_blank" style="color:blue;" title="View Here"> Download Advertisement (<?php echo  $row['app_filesize'];  ?> ) &nbsp; <i class="fa fa-file-pdf-o fa-lg" style="color:#F44336;"></i></a> &nbsp;&nbsp;<a href=""> <i class="fa fa-download fa-lg " style="color:#673AB7;" title="Download Here" aria-hidden="true"></i></a> -->
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
    </script>
</body>

</html>