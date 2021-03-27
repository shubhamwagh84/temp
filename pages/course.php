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
			<h2>course</h2>
				<div class="right-wrapper pull-right">
					<ol class="breadcrumbs">
						<li>
							<a href="index.php">
							    <i class="fa fa-home"></i>
							</a>
						</li>
						<li><span>course</span></li>
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
						<h2 class="panel-title">course</h2>
					</header>
					<div class="panel-body">

                        <!-- add new department modal -->
                        <div id="div_add_course">                        
                        <div id="div_add_course_button">
                        <button type="button" class="btn btn-primary" onclick="display_CourseForm()" id="add_course_button">
                            Add New Cource
                        </button>
                        </div>

                        <div id="course_form" style="display: none;">
                          <form action="#" method="POST" id="course-form1">
                          
                          <div class="form-group col-sm-12">
                              <label for="course-id" class="control-label">Department Name</label>
                              <select id="department-name" name="department_id" class="form-control">
                                      <option value="">Select Department</option>
                                      <option>small</option>
                                      <option>medium</option>
                                      <option>large</option>
                              </select>
                            </div>

                            <div class="form-group col-sm-6">
                              <label for="academic-year" class="control-label">Academic Year</label>
                              <select id="academic-year" name="academic_year" class="form-control">
                                      <option value="">Select Academic Year</option>
                                      <option>small</option>
                                      <option>medium</option>
                                      <option>large</option>
                              </select>
                            </div>

                            <div class="form-group col-sm-6">
                              <label for="semester" class="control-label">Semester</label>
                              <select id="semester" name="semester" class="form-control">
                                      <option value="">Select Department</option>
                                      <option>small</option>
                                      <option>medium</option>
                                      <option>large</option>
                              </select>     
                            </div>
                            
                            <div class="form-group col-sm-6">
                              <label class="control-label" for="course-code">Course Code</label>
                              <input type="text" class="form-control" id="course-id" name="course_code">
                          </div> 
                          
                          <div class="form-group col-sm-6">
                              <label class="control-label" for="course-name">Course Name</label>
                              <input type="text" class="form-control" id="course-name" name="course_name">
                          </div> 

                        <center>
                        <div class="col-sm-12">
                          <input type="submit" class="btn btn-primary" id="add-course" value="Add">
                        </div>
                      </center>
                        </form>                          
                        </div>                        
                        </div>

<script type="text/javascript">
function display_CourseForm() 
{
  var x = document.getElementById("course_form");
  var y= document.getElementById("add_course_button");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.innerHTML="Close";
    y.classList.remove("btn-primary");
    y.classList.add("btn-secondary");
  } else 
  {
    x.style.display = "none";
    y.innerHTML="Add New Course";
    y.classList.add("btn-primary");
    y.classList.remove("btn-secondary");
  }
}
</script>                                               
                        <!-- add new department modal end -->

<!-- update Course details start-->
      <div id="div_update_course" style="display: none;">
        <form action="#" method="POST" id="course-form2">
          
          <div class="form-group col-sm-12">
            <label for="course-id" class="control-label">Department Name</label>
            <select id="department-name" name="department_id_update" class="form-control">
                    <option value="">Select Department</option>
                    <option>small</option>
                    <option>medium</option>
                    <option>large</option>
            </select>
          </div>

          <div class="form-group col-sm-6">
            <label for="academic-year" class="control-label">Academic Year</label>
            <select id="academic-year" name="academic_year_update" class="form-control">
                    <option value="">Select Academic Year</option>
                    <option>small</option>
                    <option>medium</option>
                    <option>large</option>
            </select>
          </div>

          <div class="form-group col-sm-6">
            <label for="semester update" class="control-label">Semester</label>
            <select id="semester_update" name="semester_update" class="form-control">
                    <option value="">Select Department</option>
                    <option>small</option>
                    <option>medium</option>
                    <option>large</option>
            </select>          
          </div>
          
          <div class="form-group col-lg-6">
            <label class="control-label" for="course-code">Course Code</label>
            <input type="text" class="form-control" id="course-update-id" name="course_code_update">
        </div> 

        <div class="form-group col-sm-6">
            <label class="control-label" for="course-name">Course Name</label>
            <input type="text" class="form-control" id="course-update-name" name="course_name_update">
        </div> 

      <center>
      <div class="col-sm-12">
        <button type="button" class="btn btn-default" onclick="close_updtecourse()" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="update-course" value="Update">Update</button>
      </div>
    </center>

      </form>
      </div>

<script type="text/javascript">

function updateShowcourse() 
{
  var a = document.getElementById("div_update_course");
  var b= document.getElementById("div_add_course");
  var c= document.getElementById("course_form");
  var d= document.getElementById("add_course_button");
  if (a.style.display === "none") {
    b.style.display = "none";
    a.style.display = "block";
  } else 
  {
    c.style.display = "none";
    a.style.display = "none";
    b.style.display = "block";
    d.innerHTML="Add New Course";
    d.classList.add("btn-primary");
  }
}

function close_updtecourse() 
{
  var a = document.getElementById("div_update_course");
  var b= document.getElementById("div_add_course");
  var c= document.getElementById("course_form");
  var d= document.getElementById("add_course_button");
    d.innerHTML="Add New Course";
    d.classList.add("btn-primary");
    a.style.display = "none";
    c.style.display = "none";
    b.style.display = "block";  
}

</script>

<!-- update Course details end-->
                        <!-- Show department details table -->
                        <div class="row" style="margin-top:15px;">
                          <div class="col-sm-12">
                            <table class="display nowrap cell-border" style="width:100%" id="course-table">
                              <thead>
                                <tr>
                                  <th class="text-center">Actions</th>
                                  <th class="text-center">Sr No</th>
                                  <th class="text-center">course ID</th>
                                  <th class="text-center">course Name</th>
                                  <th class="text-center">Department Name</th>
                                </tr>
                              </thead> 
                              <tbody class="text-center">
                                <tr>
                                  <td>
                                    <button type="button" data-value="1" onclick="updateShowcourse()" class="btn btn-success update"><i class="fa fa-pencil"></i></button>
                                    <button type="button" data-value="1" class="btn btn-danger delete"><i class="fa fa-trash"></i></button>
                                  </td>
                                  <td>1</td>
                                  <td>CMPN</td>
                                  <td>Computer Engineering</td>
                                  <td>Pankaj Vanwari</td>
                                </tr>
                                <tr>
                                  <td>
                                    <button type="button" data-value="2" onclick="updateShowcourse()" class="btn btn-success update"><i class="fa fa-pencil"></i></button>
                                    <button type="button" data-value="2" class="btn btn-danger delete"><i class="fa fa-trash"></i></button>
                                  </td>
                                  <td>2</td>
                                  <td>IT</td>
                                  <td>Computer Engineering</td>
                                  <td>Swati Sharma</td>
                                </tr>
                                <tr>
                                  <td>
                                    <button type="button" data-value="3" onclick="updateShowcourse()" class="btn btn-success update"><i class="fa fa-pencil"></i></button>
                                    <button type="button" data-value="3" class="btn btn-danger delete"><i class="fa fa-trash"></i></button>
                                  </td>
                                  <td>3</td>
                                  <td>EXTC</td>
                                  <td>Electronics and Telecommunication Engineering</td>
                                  <td>Rasika Ransing</td>
                                </tr>
                                <tr>
                                  <td>
                                    <button type="button" data-value="4" onclick="updateShowcourse()" class="btn btn-success update"><i class="fa fa-pencil"></i></button>
                                    <button type="button" data-value="4" class="btn btn-danger delete"><i class="fa fa-trash"></i></button>
                                  </td>
                                  <td>4</td>
                                  <td>ETRX</td>
                                  <td>Electronics Engineering</td>
                                  <td>Mohini chaudhary</td>
                                </tr>
                                <tr>
                                  <td>
                                    <button type="button" data-value="5" onclick="updateShowcourse()" class="btn btn-success update"><i class="fa fa-pencil"></i></button>
                                    <button type="button" data-value="5" class="btn btn-danger delete"><i class="fa fa-trash"></i></button>
                                  </td>
                                  <td>5</td>
                                  <td>BIOM</td>
                                  <td>Biomedical Engineering</td>
                                  <td>Snehal Andhare</td>
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


    var departmentTable = $("#course-table").DataTable({
      "scrollX": true,
    });



    // department-form1 validation
    $("#course-form1").validate({
      rules:{
        course_code:{
          required:true,
        },
        course_name:{
          required:true,
        },
        department_id:{
            required:true,
        },
        academic_year:{
            required:true,
        },
        semester:{
            required:true,
        }
      },
      messages:{
        course_code:{
          required:"Course ID is mandatory."
        },
        course_name:{
          required:"Course name is mandatory."
        },
        department_id:{
            required:"Please select a department."
        },
        academic_year:{
            required:"Please select academic year."
        },
        semester:{
            required:"Please select semester."
        }
      }
    });

    $("#add-course").click(function(){
      if($("#course-form1").valid()){
        alert("valid");
      }
      else{
        alert("invalid");
      }
    });




    // update details
    $(document).on("click", ".update", function(){
      $("#updatecourse").modal("show");
      let id = $(this).attr("data-value");
      console.log(id);
    });



        // department-form1 validation
    $("#course-form2").validate({
      rules:{
        course_code_update:{
          required:true,
        },
        course_name_update:{
          required:true,
        },
        department_id_update:{
            required:true,
        },
        academic_year_update:{
            required:true,
        },
        semester_update:{
            required:true,
        }
      },
      messages:{
        course_code_update:{
          required:"Course ID is mandatory.",
        },
        course_name_update:{
          required:"Course name is mandatory.",
        },
        department_id_update:{
            required:"Please select a department."
        },
        semester_update:{
            required:"Please select semester."
        },
        academic_year_update:{
            required:"Please select academic year."
        }
        }
    });

    $("#update-course").click(function(){
      if($("#course-form2").valid()){
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