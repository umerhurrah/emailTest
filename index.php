<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Email</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="css/custom.css" rel="stylesheet">
    <style type="text/css">
        <style>
             .main_area{margin:0 auto; width:400; text-align:center; margin-top:200px;}
             .main_area a{ text-decoration:none;}
             .main_area span{font-size:25px; background:#df4662; color:#FFFFFF; padding:5px 10px; border:1px solid bc344d; border-radius:5px;}
        </style>
    </style>
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
    <?php 
    //echo phpinfo();
    //$p = new PDFlib();
    ?>
        <div class="animate form login_form">
            <section class="login_content">
                <form method="POST" action="mailfinal.php" enctype="multipart/form-data">
                <a href="download.php?filename=/home/kpadmin/Pictures/KWIQPICK_REST_MODULE_INSTALLATION.pdf"><span>Download Pdf</span></a>
                <?php if (isset($_GET['msgS'])) {
                    $messageS = $_GET['msgS'];
                    echo "<div class='alert alert-success alert-dismissible' role='alert' id='model'>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
    <strong>Success!</strong>
    {$messageS}
    </div>";
                } ?>
                            <?php if (isset($_GET['msgF'])) {
                                $messageF = $_GET['msgF'];
                                echo "<div class='alert alert-danger alert-dismissible' role='alert' id='model'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                <strong>Warning!</strong>
                {$messageF}
                </div>";
                            } ?>
                 <h2>Sending Email</h2>
                    <div>
                        <input type="email" name="mailTo" class="form-control" placeholder="To" required>
                    </div>
                    <div>
                        <input type="text" name="mailSub" class="form-control" placeholder="Subject" required>
                    </div>
                    <div>
                        <textarea name="mailBody" class="form-control" placeholder="Type Your Message Here" rows="8" required></textarea>
                    </div>
                    <div>
                        <input type="file" name="attachment" class="form-control">
                    </div>
                    <div style="padding-top: 10px;margin-left: 0px">
                        <input type="submit" class="btn btn-default" href="" name="sendEmail" value="Send">
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator">
                        <div>
                            <p>©2017 Email Sending Application Test</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
        
    </div>
</div>
<script src="jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    // $(function () {
    //    $("#modal").modal('toggle');
    // });
    $( document ).ready(function() {

     $("#model").fadeTo(3000, 500).slideUp(500, function(){
         $("#model").slideUp(500);
     });

    });
</script>
</body>
</html>
