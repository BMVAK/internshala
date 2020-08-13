<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
     <title>internshala</title>
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div>
     <?php
       


     ?>   
</div>

<div>
     <form action="registration.php" method="post">
          <div class="container">
               
               <div class="row">
                    <div class="col-sm-3">
                         <h1>INTERNSHALA</h1>
                         
                         <hr class="mb-3">
                         <label for="fname"><b>Name</b></label>
                         <input class="form-control" id="fname" type="text" name="fname" required>

                         <label for="email"><b>Email Address</b></label>
                         <input class="form-control" id="email"  type="email" name="email" required>

                         <label for="phonenumber"><b>Phone Number</b></label>
                         <input class="form-control" id="phonenumber"  type="Number" name="phonenumber" required>

                         <label for="dob"><b>date of birth</b></label>
                         <input class="form-control" id="dob"  type="date" name="dob" required>

                         <label for="pincode"><b>pincode</b></label>
                         <input class="form-control" id="pincode"  type="Number" name="pincode" required>
                         <hr class="mb-3">
                         <input class="btn btn-primary" type="submit" id="register" name="create" value="submit">
                    </div>
               </div>
          </div>
     </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
     $(function(){
          $('#register').click(function(e){

               var valid = this.form.checkValidity();

               if(valid){


               var fname        = $('#fname').val();
               var email        = $('#email').val();
               var phonenumber  = $('#phonenumber').val();
               var dob          = $('#dob').val();
               var pincode      = $('#pincode').val();
               

                    e.preventDefault(); 

                    $.ajax({
                         type: 'POST',
                         url: 'process.php',
                         data: {fname: fname,email: email,phonenumber: phonenumber,dob: dob,pincode: pincode},
                         success: function(data){
                         Swal.fire({
                                        'title': 'Successful',
                                        'text': data,
                                        'type': 'success'
                                        })
                                   
                         },
                         error: function(data){
                              Swal.fire({
                                        'title': 'Errors',
                                        'text': 'There were errors while saving the data.',
                                        'type': 'error'
                                        })
                         }
                    });

                    
               }else{
                    
               }

               



          });       

          
     });
     
</script>
</body>
</html>