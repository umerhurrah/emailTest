
<!DOCTYPE html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz|Open+Sans:400,600,700|Oswald|Electrolize' rel='stylesheet' type='text/css' />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <title>PDF Test</title>

    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="images/" />
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" />
    <link rel="stylesheet" href="css/customs.css" media="screen" />
    <link rel="stylesheet" href="sliders/flexslider/flexslider.css" media="screen" />
    <link rel="stylesheet" href="fancybox/jquery.fancybox.css" media="screen" />



    <!-- HTML5 detect touch events -->
    <script type="text/javascript" src="js/modernizr.custom.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
        .pad{
            padding: 8px;
        };
    </style>
</head>


<body class="">

<div class="container">

    <div class="row" id="pdf">
    <h3>Welcome To Kwiqpick</h3>
         <form action="" method="POST" name="service" id="service" >
         <i>As on. &nbsp;  &nbsp; &nbsp;<?php  
                 echo date("d-m-Y");
                     ?>
         <p>Tax and insurance extra.</p>
        <p>All prices are subject to change without prior notice.</p>
         Please contact the dealership for exact prices and offers.<br/></i>
         Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</br></br    >
         <table id ="printpdf" class="table table-bordered">
             
                      <thead>
                          <tr>
                          <th>Item Name
                          </th>
                          <th>Item Value</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>
                                 1. Bill Number
                              </td>
                              <td>
                                  03
                              </td>
                          </tr>
                          <tr>
                              <td>
                                 2. Item one
                              </td>
                              <td>
                                  100
                              </td>
                          </tr>
                          <tr>
                              <td>
                                 3. Item two
                              </td>
                              <td>
                                  343
                              </td>
                          </tr>
                          <tr>
                              <td>
                                 4. Total
                              </td>
                              <td>
                                  443
                              </td>
                          </tr>

                      </tbody>
                  </table>

         </form>
    </div>
</div>
<div class="container col-md-6 pad">
    <button class="btn btn-success pull-right" id="btn">Button
    </button>
</div>
<div class="container">
    <div class="col-md-8">
        <p>
            1914 translation by H. Rackham

            "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
        </p>
    </div>
</div>
<script src="jquery.min.js"></script>
<script src="printThis.js"></script>
<script type="text/javascript">
    $( document ).ready(function() {
        $("#btn").click(function () {
            $("#pdf").printThis();
        });
        
    });
</script>
 <!-- <script language="JavaScript"> 
if (window.print) {
    document.write('<form><input type=button id ="pdf" name=print value="Print" onClick="window.print()" class="button orange"></form>');
                        }
</script>    --> 
</body>
</html>