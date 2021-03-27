<?php
    include '../includes/headerlinks.php';
    include '../includes/header.php';
?>

<div class="inner-wrapper">
    <?php
        include '../includes/sidebar.php';
    ?>

    <section role="main" class="content-body">
    <header class="page-header">
      <h2>Batch</h2>
        <div class="right-wrapper pull-right">
          <ol class="breadcrumbs">
            <li>
              <a href="index.php">
                  <i class="fa fa-home"></i>
              </a>
            </li>
            <li><span>Batch</span></li>
            <!-- <li><span>Insert / Upadte / Delete</span></li> -->
          </ol>
          <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>
    
        <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            <div class="panel-actions">
              <a href="#" class="fa fa-caret-down"></a>
              <!-- <a href="#" class="fa fa-times"></a> -->
            </div>
            <h2 class="panel-title">Batch</h2>
          </header>
          <div class="panel-body">

<!-- add new Acedemic Year modal -->
                      <div id="div_add_division">
                      
                      <div id="div_Divsionbutton">
                        <button type="button" class="btn btn-primary" onclick="display_diviForm()" id="add_divi_button">
                            Add New Batch
                        </button>
                      </div>
                      <div id="add_division_form" style="display: none;">
                  
                        <form id="Division-form1">
                          
                          <div class="form-group col-lg-12">
                            <label for="recipient-name" class="control-label">Department Name</label>
                            <select class="form-control" id="department" name="department">
                                <option value="">Select Department</option>
                            </select>
                          </div>
                          
                          <div class="form-group col-lg-6">
                            <label for="message-text" class="control-label">Acedemic Year</label>
                            <select class="form-control" id="AcademicYearr" name="AcademicYear">
                                <option value="">Select Academic Year</option>
                                <option value="1">2019</option>
                                <option value="2">2020</option>
                            </select>           
                        </div>

                          <div class="form-group col-lg-6">
                            <label for="message-text" class="control-label">Semester</label>
                            <select class="form-control" id="semetser" name="semester">
                                <option value="">Select Semester</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>          
                        </div>


                          <div class="form-group col-lg-6">
                            <label for="message-text" class="control-label">Semester</label>
                            <select class="form-control" id="division" name="division">
                                <option value="">Select Semester</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>          
                        </div>


                        <div class="form-group col-lg-6">
                            <label for="message-text" class="control-label">How Many Batch?</label>
                            <input type="text" class="form-control" name="batch_1" id="batch_1" />         
                        </div>
                       
                      <center>  
                      <div class="col-lg-12">
                        <button class="btn btn-primary" id="add-Division">Add</button>
                      </div>
                      </center>
                      </form>
                      </div>
                      </div>

<script type="text/javascript">
function display_diviForm() 
{
  var x = document.getElementById("add_division_form");
  var y= document.getElementById("add_divi_button");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.innerHTML="Close";
    y.classList.remove("btn-primary");
    y.classList.add("btn-secondary");
  } else 
  {
    x.style.display = "none";
    y.innerHTML="Add New Division";
    y.classList.add("btn-primary");
    y.classList.remove("btn-secondary");
  }
}
</script>                        
<!-- add new Division modal End -->

<!-- update Division details start-->
      <div id="div_update_divi" style="display: none;">
          <form id="Division-form2">
          
          <div class="form-group col-lg-12">
            <label for="recipient-name" class="control-label">Department Name</label>
            <select class="form-control" id="department_update" name="department_update">
                <option value="">Select Department</option>
            </select>          
            </div>

            <div class="form-group col-sm-6 ">
                <label for="message-text" class="control-label">Acedemic Year</label>
                <select class="form-control" id="AcademicYear_update" name="AcademicYear_update">
                <option value="">Select Academic Year</option>
                <option value="1">2019</option>
                <option value="2">2020</option>
            </select> 
          </div>

          <div class="form-group col-sm-6">
            <label for="message-text" class="control-label">Semester</label>
            <select class="form-control" id="semetser_update" name="semester_update">
                <option value="">Select Division</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>          
        </div>


          <div class="form-group col-sm-6">
            <label for="message-text" class="control-label">Division</label>
            <select class="form-control" id="division_update" name="division_update">
                <option value="">Select Division</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>          
        </div>

        <div class="form-group col-lg-6">
            <label for="message-text" class="control-label">Batch</label>
            <input type="text" class="form-control" name="batch_2" id="batch_2" />         
        </div>

      <center>
      <div class="col-sm-12">
        <button type="button" class="btn btn-default" onclick="close_updtedivi()" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" id="update-Division">Update</button>
      </div>
      </center>

      </form>
      </div>
<script type="text/javascript">
  

function updateShowdivi() 
{
  var a = document.getElementById("div_update_divi");
  var b= document.getElementById("div_add_division");
  var c = document.getElementById("add_division_form");
  var d= document.getElementById("add_divi_button");
  if (a.style.display === "none") 
  {
    b.style.display = "none";
    a.style.display = "block";
  } else 
  {
    a.style.display = "none";
    b.style.display = "block";
    c.style.display = "none";
    d.innerHTML="Add New Division";
    d.classList.add("btn-primary");
  }
}

function close_updtedivi() 
{
  var a = document.getElementById("div_update_divi");
  var b= document.getElementById("div_add_division");
  var c = document.getElementById("add_division_form");
  var d= document.getElementById("add_divi_button");
    a.style.display = "none";
    b.style.display = "block";  
    c.style.display = "none";
    d.innerHTML="Add New Division";
    d.classList.add("btn-primary");
}

</script>

<!-- update Division details end-->

                        <!-- Show Acedemic Year details table -->
                        <div class="row" style="margin-top:15px;">
                          <div class="col-sm-12">
                            <table class="display nowrap cell-border" style="width:100%" id="Division-table">
                              <thead>
                                <tr>
                                  <th class="text-center">Actions</th>
                                  <th class="text-center">Sr No</th>
                                  <th class="text-center">Department</th>
                                  <th class="text-center">Acedemic Year</th>
                                  <th class="text-center">Semester</th>
                                  <th class="text-center">Division</th>
                                  <th class="text-center">Batch</th>
                                </tr>
                              </thead> 
                              <tbody class="text-center">
                                <tr>
                                  <td>
                                    <button type="button" data-value="1" onclick="updateShowdivi()" class="btn btn-success update"><i class="fa fa-pencil"></i></button>
                                    <button type="button" data-value="1" class="btn btn-danger delete"><i class="fa fa-trash"></i></button>
                                  </td>
                                  <td>1</td>
                                  <td>CMPN</td>
                                  <td>2021</td>
                                  <td>2021</td>
                                  <td>2021</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>
                                    <button type="button" data-value="2" onclick="updateShowdivi()" class="btn btn-success update"><i class="fa fa-pencil"></i></button>
                                    <button type="button" data-value="2" class="btn btn-danger delete"><i class="fa fa-trash"></i></button>
                                  </td>
                                  <td>2</td>
                                  <td>IT</td>
                                  <td>2020</td>
                                  <td>2020</td>
                                  <td>2020</td>
                                  <td>B</td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                        </div>
                
                    </div>
                </section>
            </div>
        </div>

    </section>

</div>


<?php
    include '../includes/footer.php';
    include '../includes/footerlinks.php';
?>


<!-- Script of Datatable -->

<script>
  $(document).ready(function(){


    var DivisionTable = $("#Division-table").DataTable({
      "scrollX": true,
    });



    // Acedemic Year-form1 validation
    $("#Division-form1").validate({
      rules:{
        department:{
          required:true,
        },
        Division:{
          required:true,
        },
        AcademicYear:{
          required:true,
        },
        semester:{
          required:true,
        },
        batch_1:{
          required:true,
        },
        division:{
          required:true,
        }
      },
      messages:{
        department:{
          required:"Please select department."
        },
        Division:{
          required:"Please select Division."
        },
        AcademicYear:{
          required:"Please select Academic Year."
        },
        semester:{
          required:"Please select semester."
        },
        batch_1:{
          required:"Batch is mandatory."
        },
        division:{
          required:"Division is mandatory."
        }
      }
    });

    $("#add-Division").click(function(){
      if($("#Division-form1").valid()){
        alert("valid");
      }
      else{
        alert("invalid");
      }
    });




    // update details
    $(document).on("click", ".update", function(){
      $("#updateDivision").modal("show");
      let id = $(this).attr("data-value");
      console.log(id);
    });

        // Acedemic Year-form2 validation
    $("#Division-form2").validate({
      rules:{
        department_update:{
          required:true,
        },
        Division_update:{
          required:true,
        },
        AcademicYear_update:{
          required:true,
        },
        semester_update:{
          required:true,
        },
        batch_2:{
          required:true,
        },
        division_update:{
          required:true,
        }
      },
      messages:{
        department_update:{
          required:"Please select department.",
        },
        Division_update:{
          required:"Please select Division.",
        },
        AcademicYear_update:{
          required:"Please select Academic Year.",
        },
        semester_update:{
          required:"Please select semester."
        },
        division_update:{
          required:"Division is mandatory."
        },
        batch_2:{
          required:"Batch is mandatory."
        }
      }
    });

    $("#update-Division").click(function(){
      if($("#Division-form2").valid()){
        alert("valid");
      }
      else{
        alert("invalid");
      }
    });



    // Delete Details
    $(document).on("click", ".delete", function(e){
        e.preventDefault();
        var message = "Once deleted, you can retrieve this.";
        var href = "../index.php";
    swal({
            title: "Are you sure ??",
            text: message, 
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            swal("Record has been deleted successfully!", {
              icon: "success",
            });
            window.location.href = href;
          } else {
            swal("Your record is safe!");
          }
        });
    });




});
</script>

<!-- end -->