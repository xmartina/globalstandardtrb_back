<?php
$pageName = "Pin";
require_once("layouts/header.php");
include("./userPinfunction.php");

if ($_SESSION['wire-transfer']) {
    $transactionType = "wire_transfer";
} elseif ($_SESSION['dom-transfer']) {
    $transactionType = "dom_transfer";
}

if (isset($transactionType)) {
    ?>
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing">
                <div class="col-md-8 offset-md-2 mt-5">
                    <div class="card component-card">
                        <div class="card-body">
                            <div class="user-profile">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="text-center">Verify Transaction Pin</h3>
                                    </div>
                                </div>
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="text-center text-info"><span class="text-muted">Hello,</span>
                                                <?= ucwords($fullName) ?>
                                                <span class="text-muted">kindly check your email for your one time password to complete this transaction</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row mb-4 mt-4">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" name="type" value="<?= $transactionType ?>" hidden>
                                                    <input type="number" class="form-control" name="pin"
                                                           placeholder="pin" aria-label="notification"
                                                           aria-describedby="basic-addon1" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="number" value="<?= $temp_trans['amount'] ?>"
                                                           name="amount" hidden>
                                                    <input type="text" value="<?= $temp_trans['bank_name'] ?>"
                                                           name="bank_name" hidden>
                                                    <input type="text" value="<?= $temp_trans['acct_name_id'] ?>"
                                                           name="acct_name" hidden>
                                                    <input type="number" value="<?= $temp_trans['acct_number'] ?>"
                                                           name="acct_number" hidden>
                                                    <input type="text" value="<?= $temp_trans['acct_type'] ?>"
                                                           name="acct_type" hidden>
                                                    <input type="text" value="<?= $temp_trans['acct_country'] ?>"
                                                           name="acct_country" hidden>
                                                    <input type="text" value="<?= $temp_trans['acct_swift'] ?>"
                                                           name="acct_swift" hidden>
                                                    <input type="number" value="<?= $temp_trans['acct_routing'] ?>"
                                                           name="acct_routing" hidden>
                                                    <input type="text" value="<?= $temp_trans['acct_remarks'] ?>"
                                                           name="acct_remarks" hidden>
                                                    <input type="number" value="<?= $temp_trans['acct_id'] ?>"
                                                           name="account_id" hidden>
                                                    <input type="number" value="<?= $row['acct_no'] ?>"
                                                           name="acct_no" id="acct_no" hidden>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <button class="btn btn-primary col-12" type="submit"
                                                        name="submit-pin">Submit
                                                </button>
                                            </div>
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
    <?php
}
?>
<!-- Rest of your code -->
