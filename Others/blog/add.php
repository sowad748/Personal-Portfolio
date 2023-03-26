<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


<?php
if (isset($_REQUEST['info'])) {
    if ($_REQUEST['info'] == "added") { ?>
        <h3 class="alert alert-success mt-3 d-flex justify-content-center" role="alert">Post has been added successfully!</h3>
<?php   }
}

include('action.php');
?>

<div class="row">
    
    <?php foreach ($query as $q) {
        
    ?>


        <div class="col-5 ms-5 p-3 ">
            <div class="card border border-dark">
                <div class="card-body">
                    <div class="card-title text-center">
                        <h5><?php echo $q['Title']; ?></h5>
                    </div>
                    <div class="card-text text-center">
                        <p><?php echo $q['Content']; ?></p>
                    </div>
                </div>
            </div>

        </div>
        


    <?php  } ?>
    


</div>