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
      <h2>Active Batch</h2>
        <div class="right-wrapper pull-right">
          <ol class="breadcrumbs">
            <li>
              <a href="index.php">
                  <i class="fa fa-home"></i>
              </a>
            </li>
            <li><span>Active Batch</span></li>
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
            <h2 class="panel-title">Active Batch</h2>
          </header>
          <div class="panel-body">

<!-- add new Active Batch modal Start-->
                    <div id="div_AD_Add">
                      <div id="ADbutton">
                      <button type="button" class="btn btn-primary" onclick="display_ADForm()" id="add_ADbutton">
                        Add New Active Batch
                      </button>
                      </div>

                      <div id="ADForm" style="display: none">
                            <form method="POST" id="Active-Division-form">
                                
                                <div class="form-group col-sm-6">
                                  <label for="course-id" class="control-label">Department Name</label>
                                  <select id="d-id1" name="d_id1" class="form-control">
                                          <option value="">Select Department</option>
                                          <option>small</option>
                                          <option>medium</option>
                                          <option>large</option>
                                  </select>
                                </div>

                                <div class="form-group col-sm-6">
                                  <label for="academic-year" class="control-label">Academic Year</label>
                                  <select id="a-year1" name="a_year1" class="form-control">
                                          <option value="">Select Academic Year</option>
                                          <option>small</option>
                                          <option>medium</option>
                                          <option>large</option>
                                  </select>
                                </div>

                                <div class="form-group col-sm-6">
                                  <label for="academic-year" class="control-label">Semester</label>
                                  <select id="semester_1" name="semester1" class="form-control">
                                          <option value="">Select Semester</option>
                                          <option>small</option>
                                          <option>medium</option>
                                          <option>large</option>
                                  </select>
                                </div>

                                <div class="form-group col-sm-6">
                                  <label for="semester" class="control-label">Division</label>
                                  <select id="division_1" name="division1" class="form-control">
                                          <option value="">Select Division</option>
                                          <option>small</option>
                                          <option>medium</option>
                                          <option>large</option>
                                  </select>          
                                </div>

                      <center>
                                <div class="form-group col-sm-12">
                                <input type="submit" class="btn btn-primary" id="add-Active-Division1" onclick="myFunction()" value="Next">
                                </div>
                      </center>
                    </form>


                    <form id="Active-Division-form2">
                      <div style="display: none;" id="Nxt_slot">

                                <div class="form-group col-sm-5">
                                  <hr/>
                                </div>

                                <center>
                                <div class="form-group col-sm-2">
                                  <br/>
                                  <label for="semester" class="control-label">For Batch-wise </label>
                                </div>
                              </center>

                                <div class="form-group col-sm-5">
                                  <hr/>
                                </div>

                                <div class="form-group col-sm-1">                        
                                  <br/>
                                  <label for="course-id" class="control-label">Batch 1</label>
                              </div>

                                <div class="form-group col-sm-1">                        
                                  <br/>
                                  <label for="course-id" class="control-label">:</label>
                              </div>

                                <div class="form-group col-sm-5">
                                  <label for="academic-year" class="control-labe">From Roll No</label>
                                  <select id="roll-no1" name="roll_no1" class="form-control">
                                          <option value="">Select Roll No</option>
                                          <option>small</option>
                                          <option>medium</option>
                                          <option>large</option>
                                  </select>
                                </div>

                                <div class="form-group col-sm-5">
                                  <label for="semester" class="control-label">To Roll No</label>
                                  <select id="roll-no2" name="roll_no2" class="form-control">
                                          <option value="">Select Roll No</option>
                                          <option>small</option>
                                          <option>medium</option>
                                          <option>large</option>
                                  </select>          
                                </div>

                                <div class="form-group col-sm-1">                        
                                  <br/>
                                  <label for="course-id" class="control-label">Batch 2</label>
                              </div>

                                <div class="form-group col-sm-1">                        
                                  <br/>
                                  <label for="course-id" class="control-label">:</label>
                              </div>

                                <div class="form-group col-sm-5">
                                  <label for="academic-year" class="control-labe">From Roll No</label>
                                  <select id="roll-no3" name="roll_no3" class="form-control">
                                          <option value="">Select Roll No</option>
                                          <option>small</option>
                                          <option>medium</option>
                                          <option>large</option>
                                  </select>
                                </div>

                                <div class="form-group col-sm-5">
                                  <label for="semester" class="control-label">To Roll No</label>
                                  <select id="roll-no4" name="roll_no4" class="form-control">
                                          <option value="">Select Roll No</option>
                                          <option>small</option>
                                          <option>medium</option>
                                          <option>large</option>
                                  </select>          
                                </div>
                                <div class="form-group col-sm-1">                        
                                  <br/>
                                  <label for="course-id" class="control-label">Batch 3</label>
                              </div>

                                <div class="form-group col-sm-1">                        
                                  <br/>
                                  <label for="course-id" class="control-label">:</label>
                              </div>

                                <div class="form-group col-sm-5">
                                  <label for="academic-year" class="control-labe">From Roll No</label>
                                  <select id="roll-no5" name="roll_no5" class="form-control">
                                          <option value="">Select Roll No</option>
                                          <option>small</option>
                                          <option>medium</option>
                                          <option>large</option>
                                  </select>
                                </div>

                                <div class="form-group col-sm-5">
                                  <label for="semester" class="control-label">To Roll No</label>
                                  <select id="roll-no6" name="roll_no6" class="form-control">
                                          <option value="">Select Roll No</option>
                                          <option>small</option>
                                          <option>medium</option>
                                          <option>large</option>
                                  </select>          
                                </div>

                                <div class="form-group col-sm-4">
                                  <hr/>
                                </div>

                                <center>
                                <div class="form-group col-sm-4">
                                  <br/>
                                  <label for="semester" class="control-label">OR (Single Student only)</label>
                                </div>
                              </center>

                                <div class="form-group col-sm-4">
                                  <hr/>
                                </div>


                                <div class="form-group col-sm-1">
                                  <br/>
                                 <label for="academic-year" class="control-labe">Student</label>
                                </div>

                                <div class="form-group col-sm-1">
                                  <br/>
                                 <label for="academic-year" class="control-labe">:</label>
                                </div>

                                <div class="form-group col-sm-10">
                                  <label for="academic-year" class="control-labe">Roll No</label>
                                  <select id="roll-no7" name="roll_no7" class="form-control">
                                          <option value="">Select Roll No</option>
                                          <option>small</option>
                                          <option>medium</option>
                                          <option>large</option>
                                  </select>
                                </div>


                                <div class="form-group col-sm-2">
                                </div>

                      <center>
                                <div class="form-group col-sm-10">
                              <input type="submit" class="btn btn-primary" id="add-Active-Division2" value="submit">
                                </div>
                      </center>
                      </div>
                    </form>
                    </div>
                  </div>
<script type="text/javascript">

function myFunction() {
  var x = document.getElementById("Nxt_slot");
  if (x.style.display === "none") {
    x.style.display = "block";
  }
}

function display_ADForm() 
{
  var x = document.getElementById("ADForm");
  var y= document.getElementById("add_ADbutton");
  var z = document.getElementById("Nxt_slot");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.innerHTML="Close";
    y.classList.remove("btn-primary");
    y.classList.add("btn-secondary");
  } else 
  {
    x.style.display = "none";
    z.style.display = "none";
    y.innerHTML="Add New Active Batch";
    y.classList.add("btn-primary");
    y.classList.remove("btn-secondary");
  }
}

</script>                        
<!-- add new Active Batch modal End-->


<!-- Update new Active Batch modal Start-->
                          <div id="div_update_AD" style="display: none;"> 
                            <form method="POST" id="Active-Division-form_2">                                
                                <div class="form-group col-sm-6">
                                  <label for="course-id" class="control-label">Department Name</label>
                                  <select id="d-id1_2" name="d_id1_2" class="form-control">
                                          <option value="">Select Department</option>
                                          <option>small</option>
                                          <option>medium</option>
                                          <option>large</option>
                                  </select>
                                </div>

                                <div class="form-group col-sm-6">
                                  <label for="academic-year" class="control-label">Academic Year</label>
                                  <select id="a-year1_2" name="a_year1_2" class="form-control">
                                          <option value="">Select Academic Year</option>
                                          <option>small</option>
                                          <option>medium</option>
                                          <option>large</option>
                                  </select>
                                </div>

                                <div class="form-group col-sm-6">
                                  <label for="academic-year" class="control-label">Semester</label>
                                  <select id="semester_1_2" name="semester1_2" class="form-control">
                                          <option value="">Select Semester</option>
                                          <option>small</option>
                                          <option>medium</option>
                                          <option>large</option>
                                  </select>
                                </div>

                                <div class="form-group col-sm-6">
                                  <label for="semester" class="control-label">Division</label>
                                  <select id="division_1_2" name="division1_2" class="form-control">
                                          <option value="">Select Division</option>
                                          <option>small</option>
                                          <option>medium</option>
                                          <option>large</option>
                                  </select>          
                                </div>

                      <center>
                                <div class="form-group col-sm-12">
                                <button type="button" class="btn btn-default" onclick="close_updteAD()" data-dismiss="modal" id="Close_button_AD" >Close</button>
                                <input type="submit" class="btn btn-primary" id="add-Active-Division1_2" onclick="myFunction_2()" value="Next">
                                </div>
                      </center>
                    </form>

                    <form id="Active-Division-form2_2">

                      <div style="display: none;" id="Nxt_slot_2">

                                <div class="form-group col-sm-5">
                                  <hr/>
                                </div>

                                <center>
                                <div class="form-group col-sm-2">
                                  <br/>
                                  <label for="semester" class="control-label">For Batch-wise </label>
                                </div>
                              </center>

                                <div class="form-group col-sm-5">
                                  <hr/>
                                </div>

                                <div class="form-group col-sm-1">
                                  <br/>
                                  <label for="academic-year" class="control-label">Batch 1</label>
                                </div>

                                <div class="form-group col-sm-1">
                                  <br/>
                                  <label for="academic-year" class="control-label">:</label>
                                </div>

                                <div class="form-group col-sm-5">
                                  <label for="academic-year" class="control-label">From Roll No</label>
                                  <select id="roll-no1_2" name="roll_no1_2" class="form-control">
                                          <option value="">Select Roll No</option>
                                          <option>small</option>
                                          <option>medium</option>
                                          <option>large</option>
                                  </select>
                                </div>

                                <div class="form-group col-sm-5">
                                  <label for="semester" class="control-label">To Roll No</label>
                                  <select id="roll-no2_2" name="roll_no2_2" class="form-control">
                                          <option value="">Select Roll No</option>
                                          <option>small</option>
                                          <option>medium</option>
                                          <option>large</option>
                                  </select>          
                                </div>

                                <div class="form-group col-sm-1">
                                  <br/>
                                  <label for="academic-year" class="control-label">Batch 2</label>
                                </div>

                                <div class="form-group col-sm-1">
                                  <br/>
                                  <label for="academic-year" class="control-label">:</label>
                                </div>

                                <div class="form-group col-sm-5">
                                  <label for="academic-year" class="control-label">From Roll No</label>
                                  <select id="roll-no3_3" name="roll_no3_3" class="form-control">
                                          <option value="">Select Roll No</option>
                                          <option>small</option>
                                          <option>medium</option>
                                          <option>large</option>
                                  </select>
                                </div>

                                <div class="form-group col-sm-5">
                                  <label for="semester" class="control-label">To Roll No</label>
                                  <select id="roll-no4_4" name="roll_no4_4" class="form-control">
                                          <option value="">Select Roll No</option>
                                          <option>small</option>
                                          <option>medium</option>
                                          <option>large</option>
                                  </select>          
                                </div>

                                <div class="form-group col-sm-1">
                                  <br/>
                                  <label for="academic-year" class="control-label">Batch 3</label>
                                </div>

                                <div class="form-group col-sm-1">
                                  <br/>
                                  <label for="academic-year" class="control-label">:</label>
                                </div>

                                <div class="form-group col-sm-5">
                                  <label for="academic-year" class="control-label">From Roll No</label>
                                  <select id="roll-no5_5" name="roll_no5_5" class="form-control">
                                          <option value="">Select Roll No</option>
                                          <option>small</option>
                                          <option>medium</option>
                                          <option>large</option>
                                  </select>
                                </div>

                                <div class="form-group col-sm-5">
                                  <label for="semester" class="control-label">To Roll No</label>
                                  <select id="roll-no6_6" name="roll_no6_6" class="form-control">
                                          <option value="">Select Roll No</option>
                                          <option>small</option>
                                          <option>medium</option>
                                          <option>large</option>
                                  </select>          
                                </div>


                                <div class="form-group col-sm-4">
                                  <hr/>
                                </div>

                                <center>
                                <div class="form-group col-sm-4">
                                  <br/>
                                  <label for="semester" class="control-label">OR (Single Student only)</label>
                                </div>
                              </center>

                                <div class="form-group col-sm-4">
                                  <hr/>
                                </div>

                                <div class="form-group col-sm-1">
                                  <br/>
                                  <label for="academic-year" class="control-label">Student</label>
                                </div>

                                <div class="form-group col-sm-1">
                                  <br/>
                                  <label for="academic-year" class="control-label">:</label>
                                </div>

                                <div class="form-group col-sm-10">
                                  <label for="academic-year" class="control-label">Roll No</label>
                                  <select id="roll-no1_2" name="roll_no1_2" class="form-control">
                                          <option value="">Select Roll No</option>
                                          <option>small</option>
                                          <option>medium</option>
                                          <option>large</option>
                                  </select>
                                </div>

                                <div class="form-group col-sm-2">
                                </div>

                      <center>
                                <div class="form-group col-sm-10">
                              <button type="button" class="btn btn-default" onclick="close_updteAD()" data-dismiss="modal">Close</button>
                              <input type="submit" class="btn btn-primary" id="add-Active-Division2_2" value="submit">
                                </div>
                      </center>

                      </div>
                    </form>
                  </div>

<script type="text/javascript">

function myFunction_2() {
  var x = document.getElementById("Nxt_slot_2");
  var y = document.getElementById("Close_button_AD");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
  }
  // else{
  //  x.style.display = "none"; 
  //   y.style.display = "none";
  // }
}

function close_updteAD()
{
  var a = document.getElementById("div_update_AD");
  var b= document.getElementById("div_AD_Add");
  var d= document.getElementById("add_ADbutton");
  var c = document.getElementById("ADForm");
  var e = document.getElementById("Nxt_slot_2");
    d.innerHTML="Add New Active Batch";
    d.classList.add("btn-primary");
    a.style.display = "none";
    c.style.display = "none";
    b.style.display = "block"; 
    e.style.display = "none";     
}

function UpdateAD()
{
  var a = document.getElementById("div_update_AD");
  var b= document.getElementById("div_AD_Add");
  var d= document.getElementById("add_ADbutton");
  var c = document.getElementById("ADForm");
  var e = document.getElementById("Nxt_slot_2");
  var v = document.getElementById("Nxt_slot");
  if (a.style.display === "none") {
    b.style.display = "none";
    a.style.display = "block";
    v.style.display = "none";
  } 
  else 
  {
    d.innerHTML="Add New Active Batch";
    d.classList.add("btn-primary");
    a.style.display = "none";
    c.style.display = "none";
    b.style.display = "block";
    e.style.display = "block";

  }
}

</script>
<!-- Update new Active Division modal End-->

                        <!-- Show department details table -->
                        <div class="row" style="margin-top:15px;">
                          <div class="col-sm-12">
                            <table class="display nowrap cell-border" style="width:100%" id="faculty-table">
                              <thead>
                                <tr>
                                  <th class="text-center">Actions</th>
                                  <th class="text-center">Sr No</th>
                                  <th class="text-center">Department ID</th>
                                  <th class="text-center">Acedamic Year</th>
                                  <th class="text-center">Semester</th>
                                  <th class="text-center">Division</th>
                                  <th class="text-center">Batch</th>
                                  <th class="text-center">Roll No</th>
                                </tr>
                              </thead> 
                              <tbody class="text-center">
                                <tr>
                                  <td>
                                    <button type="button" data-value="1" onclick="UpdateAD()" class="btn btn-success update"><i class="fa fa-pencil"></i></button>
                                    <button type="button" data-value="1" class="btn btn-danger delete"><i class="fa fa-trash"></i></button>
                                  </td>
                                  <td>1</td>
                                  <td>CMPN</td>
                                  <td>2019-20</td>
                                  <td>II</td>
                                  <td>B</td>
                                  <td>A</td>
                                  <td>18102C2059</td>
                                </tr>
                                <tr>
                                  <td>
                                    <button type="button" data-value="1" onclick="UpdateAD()" class="btn btn-success update"><i class="fa fa-pencil"></i></button>
                                    <button type="button" data-value="1" class="btn btn-danger delete"><i class="fa fa-trash"></i></button>
                                  </td>
                                  <td>2</td>
                                  <td>CMPN</td>
                                  <td>2019-20</td>
                                  <td>II</td>
                                  <td>B</td>
                                  <td>A</td>
                                  <td>18102C2059</td>
                                </tr>
                                <tr>
                                  <td>
                                    <button type="button" data-value="1" onclick="UpdateAD()" class="btn btn-success update"><i class="fa fa-pencil"></i></button>
                                    <button type="button" data-value="1" class="btn btn-danger delete"><i class="fa fa-trash"></i></button>
                                  </td>
                                  <td>3</td>
                                  <td>CMPN</td>
                                  <td>2020-21</td>
                                  <td>II</td>
                                  <td>B</td>
                                  <td>A</td>
                                  <td>18102C2059</td>
                                </tr>
                                <tr>
                                  <td>
                                    <button type="button" data-value="1" onclick="UpdateAD()" class="btn btn-success update"><i class="fa fa-pencil"></i></button>
                                    <button type="button" data-value="1" class="btn btn-danger delete"><i class="fa fa-trash"></i></button>
                                  </td>
                                  <td>4</td>
                                  <td>CMPN</td>
                                  <td>2019-20</td>
                                  <td>II</td>
                                  <td>B</td>
                                  <td>A</td>
                                  <td>18102C2059</td>
                                </tr>


                                <tr>
                                  <td>
                                    <button type="button" data-value="1" onclick="UpdateAD()" class="btn btn-success update"><i class="fa fa-pencil"></i></button>
                                    <button type="button" data-value="1" class="btn btn-danger delete"><i class="fa fa-trash"></i></button>
                                  </td>
                                  <td>5</td>
                                  <td>CMPN</td>
                                  <td>2019-20</td>
                                  <td>II</td>
                                  <td>B</td>
                                  <td>A</td>
                                  <td>18102C2059</td>
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


    var departmentTable = $("#faculty-table").DataTable({
      "scrollX": true,
    });


    $("#Active-Division-form").validate({
      rules:{
        d_id1:{
          required:true,
        },
        a_year1:{
          required:true,
        },
        semester1:{
          required:true,
        },
        division1:{
          required:true,
        }
      },
      messages:{
        d_id1:{
          required:"Please select Department."
        },
        a_year1:{
          required:"Please Select Academic Year."
        },
        semester1:{
          required:"Please Select Semester."
        },
        division1:{
          required:"Please Select Division."
        }
      }
    });

    $("#add-Active-Division1").click(function(){
      if($("#Active-Division-form").valid()){
        alert("valid");
      }
      else{
        alert("invalid");
      }
    });



    $("#Active-Division-form2").validate({
      rules:{
        roll_no1:{
          required:true,
        },
        roll_no2:{
          required:true,
        },
        roll_no3:{
          required:true,
        },
        roll_no4:{
          required:true,
        },
        roll_no5:{
          required:true,
        },
        roll_no6:{
          required:true,
        }
      },
      messages:{
        roll_no1:{
          required:"Please Select Roll No"
        },
        roll_no2:{
          required:"Please Select Roll No"
        },
        roll_no3:{
          required:"Please Select Roll No"
        },
        roll_no4:{
          required:"Please Select Roll No"
        },
        roll_no5:{
          required:"Please Select Roll No"
        },
        roll_no6:{
          required:"Please Select Roll No"
        }
      }
    });

    $("#add-Active-Division2").click(function(){
      if($("#Active-Division-form2").valid()){
        alert("valid");
      }
      else{
        alert("invalid");
      }
    });

// Upate AD Start
    $("#Active-Division-form_2").validate({
      rules:{
        d_id1_2:{
          required:true,
        },
        a_year1_2:{
          required:true,
        },
        semester1_2:{
          required:true,
        },
        division1_2:{
          required:true,
        }
      },
      messages:{
        d_id1_2:{
          required:"Please select Department."
        },
        a_year1_2:{
          required:"Please Select Academic Year."
        },
        semester1_2:{
          required:"Please Select Semester."
        },
        division1_2:{
          required:"Please Select Division."
        }
      }
    });

    $("#add-Active-Division1_2").click(function(){
      if($("#Active-Division-form_2").valid()){
        alert("valid");
      }
      else{
        alert("invalid");
      }
    });



    $("#Active-Division-form2_2").validate({
      rules:{
        roll_no1_2:{
          required:true,
        },
        roll_no6_6:{
          required:true,
        },
        roll_no3_3:{
          required:true,
        },
        roll_no4_4:{
          required:true,
        },
        roll_no5_5:{
          required:true,
        },
        roll_no2_2:{
          required:true,
        }
      },
      messages:{
        roll_no1_2:{
          required:"Please Select Roll No"
        },
        roll_no3_3:{
          required:"Please Select Roll No"
        },
        roll_no4_4:{
          required:"Please Select Roll No"
        },
        roll_no5_5:{
          required:"Please Select Roll No"
        },
        roll_no6_6:{
          required:"Please Select Roll No"
        },

        roll_no2_2:{
          required:"Please Select Roll No"
        }
      }
    });

    $("#add-Active-Division2_2").click(function(){
      if($("#Active-Division-form2_2").valid()){
        alert("valid");
      }
      else{
        alert("invalid");
      }
    });
// Update AD End



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