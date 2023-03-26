<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Police Verfication Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="assets/css/print.css" media="print">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">    
            <div class="col-md-7">

                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h4>Dhaka Metropoliton Police, Dhaka</h4>
                        <h6>Gulshan Branch, Vatara Station</h6>
                        <h4>Citizen Registration Form</h6>
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="Nid" value="<?php if(isset($_GET['Nid'])){echo $_GET['Nid'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","house_rental_db");

                                    if(isset($_GET['Nid']))
                                    {
                                        $Nid = $_GET['Nid'];

                                        $query = "SELECT * FROM information WHERE Nid='$Nid' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <div class="form-group mb-3">
                                                    <label for="">NID No.</label>
                                                    <input type="text" value="<?= $row['Nid']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Tenant Name</label>
                                                    <input type="text" value="<?= $row['FirstName']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Fathers Name</label>
                                                    <input type="text" value="<?= $row['FathersName']; ?>" class="form-control">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">Mothers Name</label>
                                                    <input type="text" value="<?= $row['MothersName']; ?>" class="form-control">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">Birth Date</label>
                                                    <input type="text" value="<?= $row['BirthDate']; ?>" class="form-control">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">Marital Status</label>
                                                    <input type="text" value="<?= $row['MaritalStatus']; ?>" class="form-control">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">Permanent Address</label>
                                                    <input type="text" value="<?= $row['PermanentAddress']; ?>" class="form-control">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">Contact No.</label>
                                                    <input type="text" value="<?= $row['ContactNo']; ?>" class="form-control">
                                                </div>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                    
                                   
                                ?>
                                <!--<div class="text-center">
                                    <a href="user_data_print.php" class="btn btn-primary">Print</a>
                                -->

                                <!-- INSERT INTO information (Nid, FirstName, FathersName, MothersName, BirthDate, MaritalStatus, PermanentAddress, ContactNo)
                                    VALUES ('4115645', 'Mehedy', 'Abdullah', 'Begum', '1997-06-09', 'Unmarried' , 'Demra' , '01958652000');-->
                                <div class="text-center">
                                    <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
                                
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>