<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>ARGAO CHURCH MANAGEMENT SYSTEM</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link rel="icon" href="../assets/img/mainlogo.jpg" type="image/x-icon"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Fonts and icons -->
    <link rel="stylesheet" href="../css/table.css" />

    <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/plugins.min.css" />
    <link rel="stylesheet" href="../assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../assets/css/demo.css" />
  </head>
  <body>
  <?php require_once 'sidebar.php'?>
      <!-- End Sidebar -->

      <div class="main-panel">
      <?php require_once 'header.php'?>
        <div class="container">
            <div class="page-inner">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Acknowledgement Receipt</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table
                        id="multi-filter-select"
                        class="display table table-striped table-hover"
                      >
                        <thead>
                          <tr>
                            <th>Citizen's Name</th>
                            <th>Finance Type</th>
                            <th>Amount</th>
                            <th>Payment On </th>
                            <th>Description</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                  
                        <tbody>
                          <tr>
                            <td>Kathryn Bernardo</td>
                            <th>For Mass</th>
                           <td><span>&#8369;</span>500 </td>
                           <td>2024/04/25</td>
                           <td>Shoutout my name after the mass</td>
                           <td>  
                            <button class="btn btn-primary btn-xs" style="background-color: #31ce36!important; border-color:#31ce36!important;"> Edit</button> 
                            <button class="btn btn-primary btn-xs"> Delete</button> 
                        </td>
                          </tr>
                          <tr>
                            <td>Alden Richards</td>
                            <th>For Church</th>
                           <td><span>&#8369;</span>1,000 </td>
                           <td>2024/04/25</td>
                           <td>None</td>
                           <td>  
                            <button class="btn btn-primary btn-xs" style="background-color: #31ce36!important; border-color:#31ce36!important;"> Edit</button> 
                            <button class="btn btn-primary btn-xs"> Delete</button> 
                        </td>
                          </tr>
                          <tr>
                            <td>Alden Richards</td>
                            <th>For Church</th>
                           <td><span>&#8369;</span>1,000 </td>
                           <td>2024/04/25</td>
                           <td>None</td>
                           <td>  
                            <button class="btn btn-primary btn-xs" style="background-color: #31ce36!important; border-color:#31ce36!important;"> Edit</button> 
                            <button class="btn btn-primary btn-xs"> Delete</button> 
                        </td>
                          </tr>
                          <tr>
                            <td>Alden Richards</td>
                            <th>For Church</th>
                           <td><span>&#8369;</span>1,000 </td>
                           <td>2024/04/25</td>
                           <td>None</td>
                           <td>  
                            <button class="btn btn-primary btn-xs" style="background-color: #31ce36!important; border-color:#31ce36!important;"> Edit</button> 
                            <button class="btn btn-primary btn-xs"> Delete</button> 
                        </td>
                          </tr>
                          <tr>
                            <td>Alden Richards</td>
                            <th>For Church</th>
                           <td><span>&#8369;</span>1,000 </td>
                           <td>2024/04/25</td>
                           <td>None</td>
                           <td>  
                            <button class="btn btn-primary btn-xs" style="background-color: #31ce36!important; border-color:#31ce36!important;"> Edit</button> 
                            <button class="btn btn-primary btn-xs"> Delete</button> 
                        </td>
                          </tr>
                          <tr>
                            <td>Alden Richards</td>
                            <th>For Church</th>
                           <td><span>&#8369;</span>1,000 </td>
                           <td>2024/04/25</td>
                           <td>None</td>
                           <td>  
                            <button class="btn btn-primary btn-xs" style="background-color: #31ce36!important; border-color:#31ce36!important;"> Edit</button> 
                            <button class="btn btn-primary btn-xs"> Delete</button> 
                        </td>
                          </tr>
                          <tr>
                            <td>Alden Richards</td>
                            <th>For Church</th>
                           <td><span>&#8369;</span>1,000 </td>
                           <td>2024/04/25</td>
                           <td>None</td>
                           <td>  
                            <button class="btn btn-primary btn-xs" style="background-color: #31ce36!important; border-color:#31ce36!important;"> Edit</button> 
                            <button class="btn btn-primary btn-xs"> Delete</button> 
                        </td>
                          </tr>
                          <tr>
                            <td>Alden Richards</td>
                            <th>For Church</th>
                           <td><span>&#8369;</span>1,000 </td>
                           <td>2024/04/25</td>
                           <td>None</td>
                           <td>  
                            <button class="btn btn-primary btn-xs" style="background-color: #31ce36!important; border-color:#31ce36!important;"> Edit</button> 
                            <button class="btn btn-primary btn-xs"> Delete</button> 
                        </td>
                          </tr>
                          <tr>
                            <td>Alden Richards</td>
                            <th>For Church</th>
                           <td><span>&#8369;</span>1,000 </td>
                           <td>2024/04/25</td>
                           <td>None</td>
                           <td>  
                            <button class="btn btn-primary btn-xs" style="background-color: #31ce36!important; border-color:#31ce36!important;"> Edit</button> 
                            <button class="btn btn-primary btn-xs"> Delete</button> 
                        </td>
                          </tr>
                          <tr>
                            <td>Alden Richards</td>
                            <th>For Church</th>
                           <td><span>&#8369;</span>1,000 </td>
                           <td>2024/04/25</td>
                           <td>None</td>
                           <td>  
                            <button class="btn btn-primary btn-xs" style="background-color: #31ce36!important; border-color:#31ce36!important;"> Edit</button> 
                            <button class="btn btn-primary btn-xs"> Delete</button> 
                        </td>
                          </tr>
                          <tr>
                            <td>Alden Richards</td>
                            <th>For Church</th>
                           <td><span>&#8369;</span>1,000 </td>
                           <td>2024/04/25</td>
                           <td>None</td>
                           <td>  
                            <button class="btn btn-primary btn-xs" style="background-color: #31ce36!important; border-color:#31ce36!important;"> Edit</button> 
                            <button class="btn btn-primary btn-xs"> Delete</button> 
                        </td>
                          </tr>
                          <tr>
                            <td>Alden Richards</td>
                            <th>For Church</th>
                           <td><span>&#8369;</span>1,000 </td>
                           <td>2024/04/25</td>
                           <td>None</td>
                           <td>  
                            <button class="btn btn-primary btn-xs" style="background-color: #31ce36!important; border-color:#31ce36!important;"> Edit</button> 
                            <button class="btn btn-primary btn-xs"> Delete</button> 
                        </td>
                          </tr>
                          <tr>
                            <td>Alden Richards</td>
                            <th>For Church</th>
                           <td><span>&#8369;</span>1,000 </td>
                           <td>2024/04/25</td>
                           <td>None</td>
                           <td>  
                            <button class="btn btn-primary btn-xs" style="background-color: #31ce36!important; border-color:#31ce36!important;"> Edit</button> 
                            <button class="btn btn-primary btn-xs"> Delete</button> 
                        </td>
                          </tr>
                          <tr>
                            <td>Alden Richards</td>
                            <th>For Church</th>
                           <td><span>&#8369;</span>1,000 </td>
                           <td>2024/04/25</td>
                           <td>None</td>
                           <td>  
                            <button class="btn btn-primary btn-xs" style="background-color: #31ce36!important; border-color:#31ce36!important;"> Edit</button>  
                            <button class="btn btn-primary btn-xs"> Delete</button> 
                        </td>
                          </tr>
                          <tr>
                            <td>Alden Richards</td>
                            <th>For Church</th>
                           <td><span>&#8369;</span>1,000 </td>
                           <td>2024/04/25</td>
                           <td>None</td>
                           <td>  
                            <button class="btn btn-primary btn-xs" style="background-color: #31ce36!important; border-color:#31ce36!important;"> Edit</button> 
                            <button class="btn btn-primary btn-xs"> Delete</button> 
                        </td>
                          </tr>
                          <tr>
                            <td>Alden Richards</td>
                            <th>For Church</th>
                           <td><span>&#8369;</span>1,000 </td>
                           <td>2024/04/25</td>
                           <td>None</td>
                            <td>  
                                <button class="btn btn-primary btn-xs" style="background-color: #31ce36!important; border-color:#31ce36!important;"> Edit</button> 
                                <button class="btn btn-primary btn-xs"> Delete</button> 
                            </td>
                          </tr>
                          <tr>
                            <td>Alden Richards</td>
                            <th>For Church</th>
                           <td><span>&#8369;</span>1,000 </td>
                           <td>2024/04/25</td>
                           <td>None</td>
                           <td>  
                            <button class="btn btn-primary btn-xs" style="background-color: #31ce36!important; border-color:#31ce36!important;"> Edit</button> 
                            <button class="btn btn-primary btn-xs"> Delete</button> 
                        </td>
                          </tr>
                          <tr>
                            <td>Alden Richards</td>
                            <th>For Church</th>
                           <td><span>&#8369;</span>1,000 </td>
                           <td>2024/04/25</td>
                           <td>None</td>
                           <td>  
                            <button class="btn btn-primary btn-xs" style="background-color: #31ce36!important; border-color:#31ce36!important;"> Edit</button> 
                            <button class="btn btn-primary btn-xs"> Delete</button> 
                        </td>
                          </tr>
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div> </div>
    </div>
    <script src="../assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="../assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="../assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="../assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="../assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="../assets/js/kaiadmin.min.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="../assets/js/setting-demo.js"></script>
    <script src="../assets/js/demo.js"></script>
 
   <script>
     $(document).ready(function () {
       $("#basic-datatables").DataTable({});

       $("#multi-filter-select").DataTable({
         pageLength: 5,
         initComplete: function () {
           this.api()
             .columns()
             .every(function () {
               var column = this;
               var select = $(
                 '<select class="form-select"><option value=""></option></select>'
               )
                 .appendTo($(column.footer()).empty())
                 .on("change", function () {
                   var val = $.fn.dataTable.util.escapeRegex($(this).val());

                   column
                     .search(val ? "^" + val + "$" : "", true, false)
                     .draw();
                 });

               column
                 .data()
                 .unique()
                 .sort()
                 .each(function (d, j) {
                   select.append(
                     '<option value="' + d + '">' + d + "</option>"
                   );
                 });
             });
         },
       });

       // Add Row
       $("#add-row").DataTable({
         pageLength: 5,
       });

       var action =
         '<td> <div class="form-button-action"> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

       $("#addRowButton").click(function () {
         $("#add-row")
           .dataTable()
           .fnAddData([
             $("#addName").val(),
             $("#addPosition").val(),
             $("#addOffice").val(),
             action,
           ]);
         $("#addRowModal").modal("hide");
       });
     });
   </script>
   
  </body>
</html>