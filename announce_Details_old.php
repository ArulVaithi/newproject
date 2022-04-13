<?php include("include/db_connection.php");
$draftEn = "SELECT * FROM mst_newsannouncement_en WHERE  status='L' ORDER BY uploaded_on desc";
$resultDraftEn = pg_query($db, $draftEn);
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
    <div class="bradcam_area_img breadcam_bg ">
        <!-- <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3></h3>
                        <p><a href="index.php">Home /</a> Announce Details</p>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <!-- bradcam_area_end  -->

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3></h3>
                    <p><a href="index.php"><i class="fa fa-home "> </i> /</a> Announce Details</p>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <!-- <div class="row"> -->
            <div class="data-tables">
                <h2 class="text-center"><strong>News / Announcements</strong></h2>
                <div class="table-responsive">

                    <table id="tbl-en-draft" class="table table-bordered " width="100%">
                        <!-- <button class="btn btn-success notika-btn-success pull-left" data-toggle="modal" data-target="#addModal" style="margin-right:20px;" onclick="addNew('en');"><i class="fa fa-plus"> </i> Add New</button>
        <h3 class="text-center" style="padding-right:110px;">Draft Items</h3> -->
                        <thead bgcolor="#D3D3D3">
                            <tr>
                                <!-- <th><input type="checkbox" class="" id='checkallusers' onclick="checkAll(id);"> All
                                                        </th> -->
                                <th>S.No</th>
                                <th>Title</th>
                                <th>Announce Date</th>
                                <th>File</th>

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

                            ?>
                                <tr>
                                    <td><?php echo
                                        ++$i ?>
                                    </td>
                                    <td><?php
                                        echo  $row['title']; ?></td>
                                    <td><?php
                                        echo  date(
                                            'd-m-Y ',
                                            strtotime(
                                                $row['announce_dt']
                                            )
                                        );
                                        ?></td>
                                    <td><?php
                                        if ($row['filename'] != '') {
                                        ?>
                                            <a href='../niotadmin/uploads/<?php echo $row['filename'] ?>' target="_blank"> <i class="fa fa-file-pdf-o fa-lg" style="color:red;"><i> <?php


                                                                                                                                                                                } else {
                                                                                                                                                                                    ?>
                                                        <a href='<?php $row['link'] ?>'> <?php echo $row['filename'];
                                                                                                                                                                                }
                                                                                            ?>
                                    </td>
                                </tr> <?php  } ?>

                        </tbody>
                    </table>
                    <!-- </div> -->
                </div>
            </div>

    </section>
    <?php include('include/bottomfooter.php'); ?>

    <?php include("include/sourcelink-js.php"); ?>

    <script>
        $('#tbl-en-draft').DataTable({

        });
    </script>
</body>

</html>