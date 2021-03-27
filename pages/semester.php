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
			<h2>Semester</h2>
				<div class="right-wrapper pull-right">
					<ol class="breadcrumbs">
						<li>
							<a href="index.php">
							    <i class="fa fa-home"></i>
							</a>
						</li>
						<li><span>Semester</span></li>
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
						<h2 class="panel-title">Semester</h2>
					</header>
					<div class="panel-body">


<!-- add new Semseter modal Start -->
                        <div id="div_add_sem" >
                        
                        <div id="div_add_sem_button"> 
                        <button type="button" class="btn btn-primary" onclick="display_SemForm()" id="add_sem_button">
                            Add New Semester
                        </button>
                        </div>

                    <div style="display: none;" class="row" style="margin-top:15px;" id="add_semform">
                        <form id="Semester-form1">
                          
                          <div class="form-group col-sm-12">
                            <label for="recipient-name" class="control-label">Department Name</label>
                            <select class="form-control" id="department" name="department">
                                <option value="">Select Department</option>
                            </select>
                          </div>
                          
                          <div class="form-group col-sm-6 ">
                            <label for="message-text" class="control-label">Acedemic Year</label>
                            <select class="form-control" id="AcademicYearr" name="AcademicYear">
                                <option value="">Select Academic Year</option>
                                <option value="1">2019</option>
                                <option value="2">2020</option>
                            </select>          
                             </div>
                          
                          <div class="form-group col-sm-6 ">
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
                      <center>
                      <div class="col-sm-12">
                        <button class="btn btn-primary" id="add-Semester">Add</button>
                      </div>
                    </center>
                      </form>
                      </div>
                    </div>

<script type="text/javascript">
function display_SemForm() 
{
  var x = document.getElementById("add_semform");
  var y= document.getElementById("add_sem_button");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.innerHTML="Close";
    y.classList.remove("btn-primary");
    y.classList.add("btn-secondary");
  } else 
  {
    x.style.display = "none";
    y.innerHTML="Add New Semester";
    y.classList.add("btn-primary");
    y.classList.remove("btn-secondary");
  }
}
</script>                        
<!-- add new Semseter modal End -->
  

        <!-- update Semeter details start-->
              <div id="div_update_semester" style="display: none;">
                <form id="Semester-form2">
                  <div class="form-group col-sm-12">
                    <label for="recipient-name" class="control-label">Department Name</label>
                    <select class="form-control" id="department_update" name="department_update">
                        <option value="">Select Department</option>
                    </select>          
                    </div>
                    <div class="form-group col-sm-6">
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
              <center>  
              <div class="col-sm-12">
                <button type="button" class="btn btn-default" onclick="close_updtesem()" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" id="update-Semester">Update</button>
              </div>
            </center>
              </form>
              </div>

<script type="text/javascript">
  

function updateShowsem() 
{
  var a = document.getElementById("div_update_semester");
  var b= document.getElementById("div_add_sem");
  var d= document.getElementById("add_sem_button");
  var c = document.getElementById("add_semform");
  if (a.style.display === "none") {
    b.style.display = "none";
    a.style.display = "block";
  } else 
  {
    d.innerHTML="Add New Semester";
    d.classList.add("btn-primary");
    a.style.display = "none";
    c.style.display = "none";
    b.style.display = "block";
  }
}

function close_updtesem() 
{
  var a = document.getElementById("div_update_semester");
  var b= document.getElementById("div_add_sem");
  var d= document.getElementById("add_sem_button");
  var c = document.getElementById("add_semform");
    d.innerHTML="Add New Semester";
    d.classList.add("btn-primary");
    a.style.display = "none";
    c.style.display = "none";
    b.style.display = "block";  
}

</script>

        <!-- update department details end-->

                        <!-- Show Acedemic Year details table -->
                        <div class="row" style="margin-top:15px;">
                          <div class="col-sm-12">
                            <table class="display nowrap cell-border" style="width:100%" id="Semester-table">
                              <thead>
                                <tr>
                                  <th class="text-center">Actions</th>
                                  <th class="text-center">Sr No</th>
                                  <th class="text-center">Department</th>
                                  <th class="text-center">Acedemic Year</th>
                                  <th class="text-center">Semester</th>
                                </tr>
                              </thead> 
                              <tbody class="text-center">
                                <tr>
                                  <td>
                                    <button type="button" data-value="1" onclick="updateShowsem()" class="btn btn-success update"><i class="fa fa-pencil"></i></button>
                                    <button type="button" data-value="1" class="btn btn-danger delete"><i class="fa fa-trash"></i></button>
                                  </td>
                                  <td>1</td>
                                  <td>CMPN</td>
                                  <td>2021</td>
                                  <td>2021</td>
                                </tr>
                                <tr>
                                  <td>
                                    <button type="button" data-value="2" onclick="updateShowsem()" class="btn btn-success update"><i class="fa fa-pencil"></i></button>
                                    <button type="button" data-value="2" class="btn btn-danger delete"><i class="fa fa-trash"></i></button>
                                  </td>
                                  <td>2</td>
                                  <td>IT</td>
                                  <td>2020</td>
                                  <td>2020</td>
                                </tr>
                                <tr>
                                  <td>
                                    <button type="button" data-value="3" onclick="updateShowsem()" class="btn btn-success update"><i class="fa fa-pencil"></i></button>
                                    <button type="button" data-value="3" class="btn btn-danger delete"><i class="fa fa-trash"></i></button>
                                  </td>
                                  <td>3</td>
                                  <td>EXTC</td>
                                  <td>2021</td>
                                  <td>2021</td>
                                </tr>
                                <tr>
                                  <td>
                                    <button type="button" data-value="4" onclick="updateShowsem()" class="btn btn-success update"><i class="fa fa-pencil"></i></button>
                                    <button type="button" data-value="4" class="btn btn-danger delete"><i class="fa fa-trash"></i></button>
                                  </td>
                                  <td>4</td>
                                  <td>ETRX</td>
                                  <td>2021</td>
                                  <td>2021</td>
                                </tr>
                                <tr>
                                  <td>
                                    <button type="button" data-value="5" onclick="updateShowsem()" class="btn btn-success update"><i class="fa fa-pencil"></i></button>
                                    <button type="button" data-value="5" class="btn btn-danger delete"><i class="fa fa-trash"></i></button>
                                  </td>
                                  <td>5</td>
                                  <td>BIOM</td>
                                  <td>2021</td>
                                  <td>2021</td>
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


    var SemesterTable = $("#Semester-table").DataTable({
      "scrollX": true,
    });



    // Acedemic Year-form1 validation
    $("#Semester-form1").validate({
      rules:{
        department:{
          required:true,
        },
        semester:{
          required:true,
        },
        AcademicYear:{
          required:true,
        }
      },
      messages:{
        department:{
          required:"Please select department."
        },
        semester:{
          required:"Please select semester."
        },
        AcademicYear:{
          required:"Please select Academic Year."
        }
      }
    });

    $("#add-Semester").click(function(){
      if($("#Semester-form1").valid()){
        alert("valid");
      }
      else{
        alert("invalid");
      }
    });




    // update details
    $(document).on("click", ".update", function(){
      $("#updateSemester").modal("show");
      let id = $(this).attr("data-value");
      console.log(id);
    });

        // Acedemic Year-form2 validation
    $("#Semester-form2").validate({
      rules:{
        department_update:{
          required:true,
        },
        semester_update:{
          required:true,
        },
        AcademicYear_update:{
          required:true,
        }
      },
      messages:{
        department_update:{
          required:"Please select department.",
        },
        semester_update:{
          required:"Please select semester.",
        },
        AcademicYear_update:{
          required:"Please select Academic Year.",
        }
      }
    });

    $("#update-Semester").click(function(){
      if($("#Semester-form2").valid()){
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