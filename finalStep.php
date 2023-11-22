<?php
include("finalStepHeader.html");

// Start a session
session_start();

// Echo the passenger's firstname from the appropriate session variable
echo "First Name: " . $_SESSION['passengerFN'] . "<BR>";

// Echo the passenger's surname from the appropriate session variable
echo "Surname: " . $_SESSION['passengerSN'] . "<BR>";

// If the luggage session variable is set
if (isset($_SESSION['luggage'])) {

    // Echo the amount of bags under ten kilos the passenger is bringing
    echo "Bags under 10 kg: " . $_SESSION['subTenKG'] . "<br>";

    // Echo the amount of bags over ten kilos the passenger is bringing
    echo "Bags over 10 kg: " . $_SESSION['overTenKG'] . "<br>";
}

// End if block
?>
</h4></div></div>

<form method="POST" action="confirm.php">
    <div class="form-group">        
        <label class="control-label col-sm-12 text-center">Is the above information correct?</label>
        <div class="checkbox col-sm-12 text-center">
          <label><input type="checkbox" name="confirm">Yes</label>
        </div>
    </div>
   
    <div class="col-sm-12 text-center">
        <button type="submit" class="btn btn-default">Continue</button>
    </div>
</form>
