
<!DOCTYPE html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz|Open+Sans:400,600,700|Oswald|Electrolize' rel='stylesheet' type='text/css' />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <title>Kwiqpick Bill</title>

    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="images/" />
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" />
    
    <!-- <link rel="stylesheet" href="sliders/flexslider/flexslider.css" media="screen" />
    <link rel="stylesheet" href="fancybox/jquery.fancybox.css" media="screen" /> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.0/css/buttons.dataTables.min.css"/>




    <!-- HTML5 detect touch events -->
    <!-- <script type="text/javascript" src="js/modernizr.custom.js"></script> -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
        .pad{
            padding: 8px;
        };
    </style>
</head>


<body class="">

<div class="container">
    <div class="col-md-12" id="pdf">
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


      

         <!-- <div class="col-md-8">
             <label for="bill#">Item 1</label>
             <input type="text" name="" id="bill#">
         </div> 
         <div class="col-md-8">
             <label for="bill#">Item 1</label>
             <input type="text" name="" id="bill#">
         </div>       -->
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

<div class ="container" id="content">
<!-- <div class="col-md-4 pad">
    <label for="bill#">1. Bill Number</label>
    
</div>
<div class="col-md-6 pad">
    <input type="text" name="" id="bill#" placeholder="123" value="fwuefiwuefhiwue">
</div>
<div class="col-md-4 pad">
    <label for="bill#">2. Item one</label>
    
</div>
<div class="col-md-6 pad">
    <input type="text" name="" id="bill#" placeholder="Chicken Biryani">
</div>
<div class="col-md-4 pad">
    <label for="bill#">3. Item two</label>
    
</div>
<div class="col-md-6 pad">
    <input type="text" name="" id="bill#" placeholder="Mutton Gravy">
</div>
<div class="col-md-4 pad">
    <label for="bill#">4. Item three</label>
</div>
<div class="col-md-6 pad">
    <input type="text" name="" id="bill#" placeholder="Kabab">
</div>
<div class="col-md-4 pad">
    <label for="bill#">5. Discount(%)</label>
</div>
<div class="col-md-6 pad">
    <input type="text" name="" id="bill#" placeholder="10">
</div>
<div class="col-md-4 pad">
    <label for="bill#">6. TAX (%)</label>
</div>
<div class="col-md-6 pad">
    <input type="text" name="" id="bill#" placeholder="12">
</div>
<div class="col-md-4 pad">
    <label for="bill#">6. Total </label>
</div>
<div class="col-md-6 pad">
    <input type="text" name="" id="bill#" placeholder="400">
</div> -->
  <div class="col-md-8 pad">
      <p>
                  1914 translation by H. Rackham

                  "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
              </p>
  </div>
</div>
<div id="editor">efegwgwggggggggg</div>
<button id="cmd">generate PDF</button>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script src="jsPDF/jspdf.js"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
<!-- <script src="printThis.js"></script> -->
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

<script src="pdf/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="pdf/pdfmake/build/pdfmake.min.js"></script>


<script src="pdf/datatables.net-buttons/js/buttons.flash.min.js"></script>

<script src="pdf/datatables.net-buttons/js/buttons.html5.min.js"></script>

<script src="pdf/datatables.net-buttons/js/buttons.print.min.js"></script>

<script src="pdf/jszip/dist/jszip.min.js"></script>

<script src="pdf/pdfmake/build/pdfmake.min.js"></script>
<script src="pdf/pdfmake/build/vfs_fonts.js"></script>
<script type="text/javascript">
    $(document ).ready(function() {   
        $("#printpdf").DataTable({
            dom: 'Bfrtip',
            buttons: [
            'pdfHtml5'
            ],
            
            "aoColumns": [
                {"bSortable": false},
                {"bSortable": false}
            ],
            searching: false,
            paging: false,
            "bInfo": false
        });
        $("#btn").click(function () {
            $("#pdf").printThis();
        });
    });
</script>
<script type="text/javascript">
    var doc = new jsPDF();
    var specialElementHandlers = {
        '#editor': function (element, renderer) {
            return true;
        }
    };

    $('#cmd').click(function () {
        doc.fromHTML($('#content').html(),15,15, {
            'width': 170,
                'elementHandlers': specialElementHandlers
        });
        doc.save('sample-file.pdf');
    });
</script>



 <!-- <script language="JavaScript"> 
if (window.print) {
    document.write('<form><input type=button id ="pdf" name=print value="Print" onClick="window.print()" class="button orange"></form>');
                        }
</script>    --> 
</body>
</html>