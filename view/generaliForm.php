<?php
include_once(__DIR__ . '/../controller/GeneraliController.php');
?>

<div class="row">
    <div class="col-sm-1"></div>
    <div class="card col-sm-5">
    <div class="card-body">    
        <h3 class="text-center">TELEDOK INSURANCE</h3>
        <form action="" method="post">
            <?php 
            if(isset($_POST['submit'])){
                $fname          = $_POST['fname'];
                $mname          = $_POST['mname'];
                $lname          = $_POST['lname'];
                $suffix         = $_POST['suffix'];
                $date_of_birth  = $_POST['date_of_birth'];
                $gender         = $_POST['gender'];
                $cstatus        = $_POST['cstatus'];
                $effectivity    = $_POST['effectivity'];
                $expiry         = $_POST['expiry'];
                $mobile         = $_POST['mobile'];
                $email          = $_POST['email'];
                $premium        = $_POST['premium'];
                $blname         = $_POST['blname'];
                $bfname         = $_POST['bfname'];
                $bmname         = $_POST['bmname'];
                $relation       = $_POST['relation'];

                include_once(__DIR__ . '/../view/generaliConfirm.php');

            } else { ?>

            <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" placeholder="First Name" name="fname" id="fname" value="Maximo" required="on">
            </div>
            <div class="form-group">
                <label for="mname">Middle Name:</label>
                <input type="text" class="form-control" placeholder="Middle Name" name="mname" id="mname" value="M" required="on">
            </div>
            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" placeholder="Last Name" name="lname" id="lname" value="Olegario" required="on">
            </div>
            <div class="form-group">
                <label for="suffix">Suffix:</label>
                <input type="text" class="form-control" placeholder="Suffix" name="suffix" id="suffix" value="Jr">
            </div>
            <div class="form-group">
                <label for="date_of_birth">Date of Birth:</label>
                <input type="text" class="form-control" placeholder="Date of Birth" name="date_of_birth" id="date_of_birth" value="01/03/1955" required="on">
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select class="form-control" name="gender" id="gender" value="M">
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cstatus">Civil Status:</label>
                <select class="form-control" name="cstatus" id="cstatus" value="MARRIED">
                    <option value="SINGLE">Single</option>
                    <option value="MARRIED">Married</option>
                    <option value="DIVORCED">Divorced</option>
                    <option value="SEPERATED">Seperated</option>
                    <option value="WIDOWED">Widowed</option>
                </select>
            </div>
            <div class="form-group">
                <label for="effectivity">Effectivity:</label>
                <input type="text" class="form-control" placeholder="Effectivity" name="effectivity" id="effectivity" value="07/01/2026" required="on">
            </div>
            <div class="form-group">
                <label for="expiry">Expiry:</label>
                <input type="text" class="form-control" placeholder="Expiry" name="expiry" id="expiry" value="10/31/2026" required="on">
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number:</label>
                <input type="text" class="form-control" placeholder="Mobile Number" name="mobile" id="mobile" value="09178797895" required="on">
            </div>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="text" class="form-control" placeholder="Email" name="email" id="email" value="maiximoolegario@gmail.com" required="on">
            </div>
            <div class="form-group">
                <label for="premium">Premium:</label>
                <input type="text" class="form-control" placeholder="Premium" name="premium" id="premium" value="200" required="on">
            </div>
            <h5 class="text-center">Beneficiary</h5><hr>
            <div class="form-group">
                <label for="blname">Beneficiary Last Name:</label>
                <input type="text" class="form-control" name="blname" id="blname" value="Olegario" required="on">
            </div>
            <div class="form-group">
                <label for="bfname">Beneficiary First Name:</label>
                <input type="text" class="form-control" name="bfname" id="bfname" value="Donna" required="on">
            </div>
            <div class="form-group">
                <label for="bmname">Beneficiary Middle Name:</label>
                <input type="text" class="form-control" name="bmname" id="bmname" value="P" required="on">
            </div>
            <div class="form-group">
                <label for="relation">Relation:</label>
                <select class="form-control" name="relation" id="relation" value="mother">
                    <option value="HUSBAND">Husband</option>
                    <option value="WIFE">Wife</option>
                    <option value="SPOUSE">Spouse</option>
                    <option value="SON">Son</option>
                    <option value="DAUGHTER">Daughter</option>
                    <option value="BROTHER">Brother</option>
                    <option value="FATHER">Father</option>
                    <option value="MOTHER">Mother</option>
                    <option value="SIBLING">Sibling</option>
                    <option value="GRANDCHILD">Granchild</option>
                    <option value="GRANDPARENT">Grandparent</option>
                    <option value="GUARDIAN">Guardian</option>
                </select>
            </div>
            <!-- <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button> -->
            <input type="submit" name="submit" value="Submit">
           <?php } ?>
            
        </form>
    </div>    
    </div>
    <div class="col-sm-6"><br>
    <?php
        if(isset($_POST['confirm'])){

            // $policyno       = '99001506-000'; //dev
            $policyno       = '99001529-SV'; //production
            $refno          = '20080003660';
            $fname          = $_POST['fname'];
            $mname          = $_POST['mname'];
            $lname          = $_POST['lname'];
            $suffix         = $_POST['suffix'];
            $date_of_birth  = $_POST['date_of_birth'];
            $gender         = $_POST['gender'];
            $cstatus        = $_POST['cstatus'];
            $effectivity    = $_POST['effectivity'];
            $expiry         = $_POST['expiry'];
            $mobile         = $_POST['mobile'];
            $email          = $_POST['email'];
            $premium        = $_POST['premium'];
            $blname         = $_POST['blname'];
            $bfname         = $_POST['bfname'];
            $bmname         = $_POST['bmname'];
            $relation       = $_POST['relation'];

            $geneliSave = new GeneraliController();

            $response = $geneliSave->generali_save(
                                                    $policyno,
                                                    $refno,
                                                    $fname,
                                                    $mname,
                                                    $lname,
                                                    $suffix,
                                                    $date_of_birth,
                                                    $gender,
                                                    $cstatus,
                                                    $effectivity,
                                                    $expiry,
                                                    $mobile,
                                                    $email,
                                                    $premium,
                                                    $blname,
                                                    $bfname,
                                                    $bmname,
                                                    $relation
            ); 
            $res = json_decode($response, true);
            $success = $res['success'] ?? null; 
        }
    ?>
        <h3>Details</h3>
        <div class="alert alert-info">
            <strong>API Response : </strong><?php echo $response ."<br>";?>
        </div>
        <div class="alert alert-success">
            <strong>API Success : </strong><?php echo $success; ?>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function(){

        $( "#date_of_birth" ).datepicker({
			changeMonth: true,
			changeYear: true,
			dateFormat: "yy-mm-dd",
			yearRange: "-100:+0",
			onSelect: function( selectedDate ) {
				
				dob = new Date($("#date_of_birth").val());
				var today = new Date();
				var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
				$('#age').val(age);
			}
		});

        $("input[name='submit']").click(function(event){
			var error_free=true;
			var valid_name=true;
			var valid_number=true;

			$('.required').each(function(i, obj){
				if(obj.value === ''){
					error_free = false;
				}
			});
			$('.name').each(function(i, obj){
				if(!validateName(obj.value, true)){
					valid_name = false;
				}
			});

			var age = $('#age').val();
			if (!error_free){
				event.preventDefault(); 
				alert("Incomplete details. Please complete form and try again.");
				return;
			}
			if (!valid_name){
				event.preventDefault(); 
				alert("Invalid name. Please complete form and try again.");
				return;
			}
			if(!validateNumber($('#mobile_phone').val())){
				event.preventDefault(); 
				alert("Invalid mobile number. Only numbers and maximum of 11 characters allowed.");
				return;
			}
			if(!validateOptionalNumber($('#home_phone').val())){
				event.preventDefault(); 
				alert("Invalid home number. Only numbers and maximum of 11 characters allowed.");
				return;
			}
			if(!validateOptionalNumber($('#office_phone').val())){
				event.preventDefault(); 
				alert("Invalid office number. Only numbers and maximum of 11 characters allowed.");
				return;
			}
			if(!validateOptionalNumber($('#office_fax').val())){
				event.preventDefault(); 
				alert("Invalid fax number. Only numbers and maximum of 11 characters allowed.");
				return;
			}
			if( age < 18 || age > 65){
				event.preventDefault();
				alert('Age must be between 18 to 65');
				return;
			}
		});

    });
</script>