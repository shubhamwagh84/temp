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
			<h2>Acedemic Year</h2>
				<div class="right-wrapper pull-right">
					<ol class="breadcrumbs">
						<li>
							<a href="index.php">
							    <i class="fa fa-home"></i>
							</a>
						</li>
						<li><span>Acedemic Year</span></li>
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
						<h2 class="panel-title">Acedemic Year</h2>
					</header>
					<div class="panel-body">
                      
<!-- add new Acedemic Year modal Start -->

                  <div id="div_add_AY">
                  <div id="div_AYbuttton"> 
                      <button type="button" class="btn btn-primary" onclick="display_AYForm()" id="add_AYbutton">
                        Add New Acedemic Year
                      </button>
                  </div>

                    <div style="display: none;" class="row" style="margin-top:15px;" id="add_AYform">
                      <form id="AcademicYear-form1">
                        
                        <div class="form-group col-sm-6" >
                          <label for="recipient-name" class="control-label">Department Name</label>
                          <select class="form-control" id="department" name="department">
                              <option value="">Select Department</option>
                          </select>
                        </div>

                        <div class="form-group col-sm-6">
                          <label for="message-text" class="control-label">Academic Year</label>
                          <input type="text" class="form-control" id="AcedemicYear" name="AcademicYear"/>
                        </div>
                 <center>     
                    <div class="col-sm-12">
                      <button class="btn btn-primary" id="add-AcademicYear">Add</button>
                    </div>
                </center>
                    </form>
                    </div>
                    
                  </div>

<script type="text/javascript">
function display_AYForm() 
{
  var x = document.getElementById("add_AYform");
  if (x.style.display === "none") {
    x.style.display = "block";
    var y= document.getElementById("add_AYbutton");
    y.innerHTML="Close";
    y.classList.remove("btn-primary");
    y.classList.add("btn-secondary");
  } else 
  {
    x.style.display = "none";
    var z= document.getElementById("add_AYbutton");
    z.innerHTML="Add New Acedemic Year";
    z.classList.add("btn-primary");
    z.classList.remove("btn-secondary");
  }
}
</script>                        
<!-- add new Acedemic Year modal end -->

<!-- Update Acedemic Year modal start -->
                  <div id="div_update_AY" style="display: none;">
                      <form id="AcademicYear-form2">
                        <div class="form-group col-sm-6">
                          <label for="recipient-name" class="control-label">Department Name</label>
                          <select class="form-control" id="department_update" name="department_update">
                              <option value="">Select Department</option>
                          </select>    
                        </div>
                        
                        <div class="form-group col-sm-6">
                          <label for="message-text" class="control-label">Academic Year</label>
                          <input type="text" class="form-control" id="AcademicYear-update" name="AcademicYear_update">
                        </div>
                
                <center>    
                    <div class="col-sm-12">
                      <button type="button" class="btn btn-default" id="update_close_button" onclick="close_updte()" data-dismiss="modal">Close</button>
                      <button class="btn btn-primary" id="update-AcademicYear">Update</button>
                    </div>
                </center>    
                
                    </form>                    
                  </div>
<script type="text/javascript">
  
function updateShow() 
{
  var a = document.getElementById("div_update_AY");
  var b= document.getElementById("div_add_AY");
  var c= document.getElementById("add_AYform");  
  var d= document.getElementById("add_AYbutton");
  if (a.style.display === "none") {
    b.style.display = "none";
    a.style.display = "block";
    c.style.display = "none";    
  } else 
  {
    c.style.display = "none";    
    a.style.display = "none";
    b.style.display = "block";
    d.classList.add("btn-primary");
    d.innerHTML="Add New Acedemic Year";
  }
}

function close_updte() 
{
    var a = document.getElementById("div_update_AY");
    var b= document.getElementById("div_add_AY");
    var c= document.getElementById("add_AYform");    
    var d= document.getElementById("add_AYbutton");
    a.style.display = "none";
    c.style.display = "none";
    b.style.display = "block";  
    d.classList.add("btn-primary");
    d.innerHTML="Add New Acedemic Year";
}

</script>

<!-- Update Acedemic Year modal end -->

                        <!-- Show Acedemic Year details table -->
                        <div class="row" style="margin-top:15px;">
                          <div class="col-sm-12">
                            <table class="display nowrap cell-border" style="width:100%" id="AcademicYear-table">
                              <thead>
                                <tr>
                                  <th class="text-center">Actions</th>
                                  <th class="text-center">Sr No</th>
                                  <th class="text-center">Department</th>
                                  <th class="text-center">Academic Year</th>
                                </tr>
                              </thead> 
                              <tbody class="text-center">
                                <tr>
                                  <td>
                                    <button type="button "data-value="1" onclick="updateShow()" class="btn btn-success update"><i class="fa fa-pencil"></i></button>
                                    <button type="button" data-value="1" class="btn btn-danger delete"><i class="fa fa-trash"></i></button>
                                  </td>
                                  <td>1</td>
                                  <td>CMPN</td>
                                  <td>2020-2021</td>
                                </tr>
                                <tr>
                                  <td>
                                    <button type="button" data-value="2" onclick="updateShow()" class="btn btn-success update"><i class="fa fa-pencil"></i></button>
                                    <button type="button" data-value="2" class="btn btn-danger delete"><i class="fa fa-trash"></i></button>
                                  </td>
                                  <td>2</td>
                                  <td>IT</td>
                                  <td>2020</td>
                                </tr>
                                <tr>
                                  <td>
                                    <button type="button" data-value="3" onclick="updateShow()" class="btn btn-success update"><i class="fa fa-pencil"></i></button>
                                    <button type="button" data-value="3" class="btn btn-danger delete"><i class="fa fa-trash"></i></button>
                                  </td>
                                  <td>3</td>
                                  <td>EXTC</td>
                                  <td>2021</td>
                                </tr>
                                <tr>
                                  <td>
                                    <button type="button" data-value="4" onclick="updateShow()" class="btn btn-success update"><i class="fa fa-pencil"></i></button>
                                    <button type="button" data-value="4" class="btn btn-danger delete"><i class="fa fa-trash"></i></button>
                                  </td>
                                  <td>4</td>
                                  <td>ETRX</td>
                                  <td>2021</td>
                                </tr>
                                <tr>
                                  <td>
                                    <button type="button" data-value="5" onclick="updateShow()" class="btn btn-success update"><i class="fa fa-pencil"></i></button>
                                    <button type="button" data-value="5" class="btn btn-danger delete"><i class="fa fa-trash"></i></button>
                                  </td>
                                  <td>5</td>
                                  <td>BIOM</td>
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


    var AcademicYearTable = $("#AcademicYear-table").DataTable({
      "scrollX": true,
    });



    // Acedemic Year-form1 validation
    $("#AcademicYear-form1").validate({
      rules:{
        department:{
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
        AcademicYear:{
          required:"Acedemic Year is mandatory."
        }
      }
    });

    $("#add-AcademicYear").click(function(){
      if($("#AcademicYear-form1").valid()){
        alert("valid");
      }
      else{
        alert("invalid");
      }
    });




    // update details
    $(document).on("click", ".update", function(){
      $("#updateAcademicYear").modal("show");
      let id = $(this).attr("data-value");
      console.log(id);
    });

        // Acedemic Year-form2 validation
    $("#AcademicYear-form2").validate({
      rules:{
        department_update:{
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
        AcademicYear_update:{
          required:"Acedemic Year is mandatory.",
        }
      }
    });

    $("#update-AcademicYear").click(function(){
      if($("#AcademicYear-form2").valid()){
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