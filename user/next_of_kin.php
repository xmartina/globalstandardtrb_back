<?php
//session_start();
$pageName = "Next of Kin";
include_once("layouts/header.php");
//require_once("../include/config.php");
//require_once("../include/userFunction.php");
//require_once('../include/userClass.php');
$acct_id = userDetails('id');



if (!$_SESSION['acct_no']) {
    header("location:../login.php");
    die;
}





?>

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="account-settings-container layout-top-spacing">

            <div class="account-content">
                <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <form id="general-info" class="section general-info" enctype="multipart/form-data" method="POST">

                                <div class="info">
                                    <h6 class="">My Next of Kin</h6>
                                    <div class="row">
                                        <div class="col-lg-11 mx-auto">
                                            <div class="row">
                                                <div class="col-xl-2 col-lg-12 col-md-4 text-center">
                                                    <div class="upload mt-4 pr-md-4">
                                                        <center>
                                                            <input type="file" class="dropify" data-default-file="/assets/profile/<?= $row['mgr_image']?>" name="mgr_image" data-max-file-size="2M" / disabled>

                                                            <!--<img src="/assets/profile/<?= $row['mgr_image']?>" class="dropify">-->
                                                        </center>
                                                        <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i>Next of Kin</p>

                                                    </div>
                                                </div>
                                                <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                    <div class="form">
                                                        <div class="row">
                                                            <!--                                                            <div class="col-sm-6">-->
                                                            <!--                                                                <div class="form-group">-->
                                                            <!--                                                                    <label for="fullName">Account Manager </label>-->
                                                            <!--                                                                    -->
                                                            <!--                                                                    <h5>--><?php //= $row['mgr_name'] ?><!--</h5>-->
                                                            <!--                                                                    -->
                                                            <!--                                                                </div>-->
                                                            <!--                                                            </div>-->
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <!--                                                                    <label for="profession">Account Manager Contact</label>-->
                                                                    <!--                                                                     <h5 class="text-danger">--><?php //= $row['mgr_no'] ?><!--</h5>-->

                                                                    <!--                                                                      <h5>--><?php //= $row['mgr_no'] ?><!--</h5>-->

                                                                    <!--                                                                    <input type="text" class="form-control mb-4" id="mgr_no" placeholder="--><?php //= $row['mgr_no'] ?><!--" value="--><?php //= $row['mgr_no'] ?><!--" readonly>-->
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--                                                            <div class="col-sm-6">-->
                                                            <!--                                                                <div class="form-group">-->
                                                            <!--                                                                    <label for="fullName">Account Manager Email</label>-->
                                                            <!--                                                                    <h5>--><?php //= $row['mgr_email'] ?><!--</h5>-->
                                                            <!--                                                                    -->
                                                            <!--                                                                </div>-->
                                                            <!--                                                            </div>-->
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="profession">Next of Kin full name</label>

                                                                    <h5><?= $row['kin_name'] ?></h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="profession">Next of Kin email</label>

                                                                    <h5><?= $row['kin_email'] ?></h5>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="profession">Next of Kin phone</label>
                                                                    <h5><?= $row['kin_phone'] ?></h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="">Relationship to Next of Kin</label>
                                                                            <?php
                                                                            $kin_Rtype = $row['kin_type'];
                                                                            if($kin_Rtype == 1){ $kin_out_type = "Mother";}
                                                                            elseif($kin_Rtype == 2){ $kin_out_type = "Father";}
                                                                            elseif($kin_Rtype == 3){ $kin_out_type = "Sister";}
                                                                            elseif($kin_Rtype == 4){ $kin_out_type = "Brother";}
                                                                            elseif($kin_Rtype == 5){ $kin_out_type = "Uncle";}
                                                                            elseif($kin_Rtype == 6){ $kin_out_type = "Aunty";}
                                                                            elseif($kin_Rtype == 7){ $kin_out_type = "Cousin";}
                                                                            ?>
                                                                            <h5><?= $kin_out_type ?></h5>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <label for="profession">Next of Kin age</label>
                                                                        <h5><?= $row['kin_age'] ?></h5>
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
                            </form>
                        </div>






                    </div>
                </div>
            </div>




            <?php
            include_once("layouts/footer.php");
            ?>
