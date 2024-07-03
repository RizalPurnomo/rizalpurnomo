<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" rel="stylesheet"> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <br />
        <div class="card">
            <h5 class="card-header">DATA UNDANGAN</h5>
            <div class="card-body">
                <input type="text" id="kode" name="kode" value="<?php echo $scan[0]['kode'] ?>">
                <h5 class="card-title"><?php echo $scan[0]['kode'] ?></h5>
                <h4 class="card-title"><?php echo $scan[0]['nama'] ?></h4>
                <p class="card-text">Anda Terdaftar dan mendapatkan <b><?php echo $scan[0]['quota'] ?></b> kupon</p>
                <button type="button" class="btn btn-primary" onclick="konfirmasi()">Konfirmasi</button>
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
    function konfirmasi() {
        var dataArray = {
            "scan": {
                "is_hadir": 1
            }
        }

        $.ajax({
            type: "POST",
            dataType: 'json',
            data: {
                dataArray
            },
            url: '<?php echo base_url('undangan/undangan/konfirmasi/'); ?>' + $("#kode").val(),
            success: function(result) {
                console.log(result);
                if (result.success === true) {
                    $('#notification_type').removeClass('alert alert-dismissable').addClass('alert alert-success alert-dismissable');
                    $('#notification_message').html(result.messages);
                    $('#notification_type').show();
                    $("#notification_type").fadeTo(500, 250).slideUp(250, function() {
                        $("#notification_type").hide();
                        window.location = '<?php echo base_url(); ?>undangan';
                    });
                } else {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Gagal Disimpan',
                        text: result.messages
                    })
                    return;
                }

            }
        })
    }
</script>