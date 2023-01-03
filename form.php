
<?php
include 'top.php';

$dataIsGood = false;
$totalChecked = 0;
$message = '';

$firstName='';
$lastName='';
$email = '';
$radFishing = "Lures";

$large = false;
$small = false;
$peacock = false;
$sturgeon = false;

function getData($field){
    if (!isset($_POST[$field])){
        $data = "";
    }
    else{
        $data = trim($_POST[$field]);
        $data = htmlspecialchars($data);
    }
    return $data;
}
function verifyAlphaNum($testString) {
    // Check for letters, numbers and dash, period, space and single quote only.
    // added & ; and # as a single quote sanitized with html entities will have 
    // this in it bob's will be come bob's
    return (preg_match ("/^([[:alnum:]]|-|\.| |\'|&|;|#)+$/", $testString));
}
?>
    <main>
        <section>
            <figure class="formImg"> <img src="images2/types-of-fish.png" alt="Images of different fresh water fish">
            <figcaption>Some of the many fresh water fish</figcaption></figure>
            <h2>Whats your favorite freshwater fish?</h2>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == 'POST'){

                $firstName=getData('txtFirstName');
                $lastName=getData('txtLastName');
                $email = getData('txtEmail');

                $radFishing = getData('radFishing');

                $large = (int)getData('chkLargeMouth');
                $small = (int)getData('chkSmalleMouth');
                $peacock = (int)getData('chkPeacock');
                $sturgeon = (int)getData('chkSturgeon');

                //validate 
                $dataIsGood = true;

                if($firstName == ''){
                    print '<p class="mistake">Please enter your first name.</p>';
                    $dataIsGood = false;
                }
                if($lastName == ''){
                    print '<p class="mistake">Please enter your last name.</p>';
                    $dataIsGood = false;
                }
                if($email == ''){
                    print '<p class="mistake">Please enter your email address.</p>';
                    $dataIsGood = false;
                }
                elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    print '<p class="mistake">Your email address contains invalid characters</p>';
                    $dataIsGood = false;
                }

                if($radFishing != "Lures" AND $radFishing != "Live Bait" AND $radFishing != "Soft Plastics"){
                    print '<p class="mistake">Please select lure preference.</p>';
                    $dataIsGood = false;
                }
                
                $totalChecked = 0;

                if($large != 1) $large = 0;
                $totalChecked += $large;
                if($small != 1) $small = 0;
                $totalChecked += $small;
                if($peacock != 1) $peacock = 0;
                $totalChecked += $peacock;
                if($sturgeon != 1) $sturgeon = 0;
                $totalChecked += $sturgeon;

                if($totalChecked == 0){
                    print '<p class="mistake">Please choose at least one fish.</p>';
                    $dataIsGood = false;
                }

                //save data
                if($dataIsGood){
                    try{
                        $sql = 'INSERT INTO tblFishSurvey (fldFirstName, fldLastName, fldEmail, fldRad, fldLarge, fldSmall, fldPeacock, fldSturgeon)
                        VALUES (?,?,?,?,?,?,?,?)';
                        $statement = $pdo->prepare($sql);
                        $data = array($firstName, $lastName, $email, $radFishing, $large, $small, $peacock, $sturgeon);
                    
                        if($statement->execute($data)){
                            $message = '<h2>Thank you!</h2>';
                            $message .= '<p>Your submission was successful.</p>';
                        }
                        else{
                            $message = '<p>Submission unsuccessful.</p>';
                            $dataIsGood = false;
                        }
                    }
                    catch(PDOException $e){
                        $message = '<p>Submission unsuccessful.</p>';
                        $dataIsGood = false;
                    }
                }
                
            }
            ?>
            <form action ="#" method="POST">
            <fieldset>
                <legend>Contact Information</legend>
                <p>
                    <label for="txtFirstName">First Name</label>
                    <input type="text" name="txtFirstName" placeholder="Enter your first name" id="txtFirstName"
                    value="<?php print $firstName; ?>">
                </p>
                <p>
                    <label for="txtLastName">Last Name</label>
                    <input type="text" name="txtLastName" placeholder="Enter your last name" id="txtLastName"
                    value="<?php print $lastName; ?>">
                </p>
                <p>
                    <label for="txtEmail">Email</label>
                    <input type="email" name="txtEmail" maxlength="30" placeholder="Enter your email" id="txtEmail" 
                    onfocus="this.select()" value="<?php print $email; ?>" required>
                </p>
            </fieldset>

            <fieldset>
                <legend>Favorite Fishing Method</legend>
                
                    <input type="radio" name="radFishing" value="Lures" id="radLure" required
                    <?php if($radFishing == "Lures") print 'checked'; ?>>
                    <label for="radLure">Lures</label>

                    <input type="radio" name="radFishing" value="Live Bait" id="radBait" required
                    <?php if($radFishing == "Live Bait") print 'checked'; ?>>
                    <label for="radBait">Live Bait</label>

                    <input type="radio" name="radFishing" value="Soft Plastics" id="radSoft"
                    required
                    <?php if($radFishing == "Soft Plastics") print 'checked'; ?>>
                    <label for="radSoft">Softies</label>
                
            </fieldset>

            <fieldset>
                <legend>What are your favorite fish? (choose at least one)</legend>
                
                    <input type="checkbox" name="chkLargeMouth" id="chkLargeMouth" value="1"
                    <?php if($large) print 'checked'?>>
                    <label for="chkLargeMouth">LargeMouth Bass</label><br>

                    <input type="checkbox" name="chkSmalleMouth" id="chkSmallMouth" value="1"
                    <?php if($small) print 'checked'?>>
                    <label for="chkSmallMouth">Small Mouth Bass</label><br>
                    
                    <input type="checkbox" name="chkPeacock" id="chkPeacock" value="1"
                    <?php if($peacock) print 'checked'?>>
                    <label for="chkPeacock">Peacock Bass</label><br>

                    <input type="checkbox" name="chkSturgeon" id="chkSturgeon" value="1"
                    <?php if($sturgeon) print 'checked'?>>
                    <label for="chkSturgeon">Sturgeon</label><br>

            </fieldset>
            <h4>Submit Here</h4>
                <p>
                    <input type="submit" value="Submit">
                </p>
            </form>
        </section>
        <section>
            <h4>Good Job</h4>
            <?php
                print '<h2>' . $message . '</h2>';
                print '<p>Post Array:</p><pre>';
                print_r($_POST);
                print '</pre>';
            ?>
        </section>
    </main>
    <?php
    include 'footer.php';
    ?>
