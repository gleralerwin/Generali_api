<div class="container mt-4">
  <table class="table table-bordered">
    <thead class="thead-light text-center">
      <tr>
        <th colspan="6">Details</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <th colspan="1">First Name: </th>
            <td colspan="6"><?php echo $fname; ?><input type="hidden" name="fname" value="<?php echo $fname;?>"></td>
        </tr>
        <tr>
            <th colspan="1">Middle Initial:</th>
            <td colspan="6"><?php echo $mname; ?><input type="hidden" name="mname" value="<?php echo $mname;?>"></td>
        </tr>  
        <tr>
            <th colspan="1">Last Name:</th>
            <td colspan="6"><?php echo $lname; ?><input type="hidden" name="lname" value="<?php echo $lname;?>"></td>
        </tr>  
        <tr>  
            <th colspan="1">Suffix:</th>
            <td colspan="6"><?php echo $suffix; ?><input type="hidden" name="suffix" value="<?php echo $suffix; ?>"></td>
        </tr>
        <tr> 
            <th colspan="1">Date of Birth</th>
            <td colspan="6"><?php echo $date_of_birth; ?><input type="hidden" name="date_of_birth" value="<?php echo $date_of_birth;?>"></td>
        </tr>
        <tr>
            <th colspan="1">Gender</th>
            <td colspan="6"><?php echo $gender; ?><input type="hidden" name="gender" value="<?php echo $gender;?>"></td>
        </tr>
        <tr>
            <th colspan="1">Civil Status</th>
            <td colspan="6"><?php echo $cstatus; ?><input type="hidden" name="cstatus" value="<?php echo $cstatus;?>"></td>
        </tr>
        <tr>
            <th colspan="1">Effectivity</th>
            <td colspan="6"><?php echo $effectivity; ?><input type="hidden" name="effectivity" value="<?php echo $effectivity;?>"></td>
        </tr>
        <tr>
            <th colspan="1">Expiry</th>
            <td colspan="6"><?php echo $expiry; ?><input type="hidden" name="expiry" value="<?php echo $expiry;?>"></td>
        </tr>
        <tr>
            <th colspan="1">Mobile Phone:</th>
            <td colspan="6"><?php echo $mobile; ?><input type="hidden" name="mobile" value="<?php echo $mobile;?>"></td>
        </tr>
         <tr>
            <th colspan="1">Email Address:</th>
            <td colspan="6"><?php echo $email; ?><input type="hidden" name="email" value="<?php echo $email;?>"></td>
        </tr>
        <tr>
            <th colspan="1">Premium</th>
            <td colspan="6"><?php echo $premium; ?><input type="hidden" name="premium" value="<?php echo $premium;?>"></td>
        </tr>
    </tbody>

    <thead class="thead-light text-center">
      <tr>
        <th colspan="4">Beneficiary</th>
      </tr>
    </thead>
    <tbody>
    <tr>
        <th colspan="1">Beneficiary Last Name</th>
        <td colspan="6"><?php echo $blname; ?><input type="hidden" name="blname" value="<?php echo $blname;?>"></td>
    </tr>
    <tr>
        <th colspan="1">Beneficiary First Name</th>
        <td colspan="6"><?php echo $bfname; ?><input type="hidden" name="bfname" value="<?php echo $bfname;?>"></td>
    </tr>
    <tr>
        <th colspan="1">Beneficiary Middle Name</th>
        <td colspan="6"><?php echo $bmname; ?><input type="hidden" name="bmname" value="<?php echo $bmname;?>"></td>
    </tr>
    </tr>
        <th colspan="1">Relation</th>
        <td colspan="6"><?php echo $relation; ?><input type="hidden" name="relation" value="<?php echo $relation;?>"></td>
    </tr>
    </tbody>
  </table>

  <div class="text-right">
    <button class="btn btn-secondary">Cancel</button>
    <button class="btn btn-primary" name="confirm" id="confirm">Confirm</button>
  </div>
</div>