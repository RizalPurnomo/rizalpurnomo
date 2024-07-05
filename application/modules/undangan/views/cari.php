<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rizal Purnomo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" rel="stylesheet"> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <br />
        <div class="card">
            <h5 class="card-header">Cari Undangan</h5>
            <div class="card-body">
                <div class="input-group mb-3">
                    <input type="text" id="kode" name="kode" class="form-control" placeholder="Input Kode Undangan" aria-label="Input Kode Undangan" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="cari" onclick="cari()">Cari</button>
                </div>
            </div>
            <div id="notification_type" class="alert alert-dismissable" style="display:none;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p id="notification_message"></p>
            </div>
        </div>

    </div>


    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>

</html>

<script>
    function cari() {
        window.location.href = "<?php echo base_url(); ?>undangan/undangan/scan/" + $("#kode").val();
    }
</script>