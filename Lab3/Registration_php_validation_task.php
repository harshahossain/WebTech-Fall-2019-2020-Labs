<?php
    $name="";
    $err_name="";

    $username="";
    $err_username="";

    $password="";
    $err_password="";

    $cpassword="";
    $err_cpassword="";

    $email="";
    $err_email="";

    $code="";2
    $err_code="";

    $number="";
    $err_number="";

    $address="";
    $err_address="";

    $city="";
    $err_city="";
     
    $state="";
    $err_state="";

    $postalcode="";
    $err_postalcode="";

    $day="";
    $err_day="";

    $month="";
    $err_month="";
    
    $year="";
    $err_year="";

    $gender="";
    $err_gender="";

    $heard="";
    $err_heard="";

    $bio="";
    $err_bio="";

    $has_error=false;

    if(isset($_POST["register"]))
        {
            if(empty($_POST["name"]))
            {
                $err_name="Name Required";
                $has_error=true;
            }
            elseif (strpos($_POST["name"],"abcd")) {
                $err_name="Consequtive letters cannot be a name";
                $has_error=true;
            }
            else
                {
                  $name=htmlspecialchars($_POST["name"]);  
                }
            if (empty($_POST["username"])) {
                    $err_username="Username Required";
                    $has_error=true;
                }
            elseif (strlen($_POST["username"])<7){
                        $err_username="Username must contain at least 6 charecters";
                        $has_error=true;
                    }
            elseif (strpos($_POST["username"], " ")) {
                                $err_username="Space is not allowed";
                                $has_error=true;
                            }
            else{
                $username=htmlspecialchars($_POST["username"]);
            }
            if (empty($_POST["email"])) {
                $err_email="Email Required";
                $has_error="true";
            }
            elseif (!strpos($_POST["email"], "@")) {
                $err_email="Email must contain '@'!";
                $has_error=true;
            }
            else{
                $email=htmlspecialchars($_POST["email"]);
            }
            if (empty($_POST["password"])) {
                $err_password="Password Required";
                $has_error=true;

            }
            elseif (strlen($_POST["password"])<9) {
                $err_password="Password must contain at least 8 charecters!";
                $has_error=true;
            }
            elseif (!strpos($_POST["password"], "1") || !strpos($_POST["password"], "?")) {
                $err_password="Password must contain at least one special charecter (Ex: 1 or ?) !";
                $has_error=true;
            }
            elseif(!ctype_upper($_POST["password"])||!ctype_lower($_POST["password"])){
                $err_password="Password must have a comibation of uppercase and lowercase charecters!";
                $has_error=true;
            }
            else{
                $password=htmlspecialchars($_POST["password"]);
            }
            if (empty($_POST["cpassword"])) {
                $err_cpassword="This field cannot be empty!";
                $has_error=true;
            }
            elseif(!$_POST["password"]==$_POST["cpassword"]){
                $err_cpassword="Password does not match!";
                $has_error=true;
            }
            else{
                $cpassword=htmlspecialchars($_POST["cpassword"]);
            }
            if (empty($_POST["code"])){
                    $err_code="Phone Code Required!";
                    $has_error=true;
                }
            elseif (!is_numeric($_POST["code"])) {
                        $err_code="Please enter a valid Phone code";
                        $has_error=true;
                    }        
            else{
                $code=htmlspecialchars($_POST["code"]);
            }
            if(empty($_POST["number"]))
            {
                $err_number="Phone Number Required!";
                $has_error=true;
            }
            elseif(!is_numeric($_POST["number"])){
                $err_number="Please enter a valid Phone number";
                $has_error=true;
            }
            else{
                $number=htmlspecialchars($_POST["number"]);
            }
            if(empty($_POST["address"])){
                $err_ = "this field cannot be empty";
                $has_error=true;
            }
            else{
                $address = htmlspecialchars($_POST["address"]);
            }
            if(empty($_POST["city"])){
                $err_city = "this field cannot be empty";
                $has_error=true;
            }
            else{
                $city = htmlspecialchars($_POST["city"]);
            }
            if(empty($_POST["state"])){
                $err_ = "this field cannot be empty";
                $has_error=true;
            }
            else{
                $state = htmlspecialchars($_POST["state"]);
            } 
            if(empty($_POST["postalcode"])){
                $err_postalcode = "this field cannot be empty";
                $has_error=true;
            }
            elseif (!is_numeric($_POST["postalcode"])) {
                $err_postalcode="Please enter a valid Postal/Zip Code";
                $has_error=true;
            }
            else{
                $postalcode = htmlspecialchars($_POST["postalcode"]);
            }
            if(!isset($_POST["day"])){
                $err_day = "this field cannot be empty";
                $has_error=true;
            }
            else{
                $day =$_POST["day"];
            }
            if(!isset($_POST["month"])){
                $err_month = "this field cannot be empty";
                $has_error=true;
            }
            else{
                $month =$_POST["month"];
            }
            if(!isset($_POST["year"])){
                $err_year = "this field cannot be empty";
                $has_error=true;
            }
            else{
                $year = $_POST["year"];
            }
            if(!isset($_POST["gender"])){
                $err_gender="Gender Required";
                $has_error = true;
            }
            else{
                $gender = $_POST["gender"];
            }
            if(!isset($_POST["heard"])){
                $err_gender="Please fill at list one checkbox!";
                $has_error = true;
            }
            else{
                $heard = $_POST["heard"];
            }  
            if(empty($_POST["bio"])){
                $err_bio="Please give a short Bio!";
            }
            if(!has_error){
                echo $name;
            }       

        }




?>
<!DOCTYPE html>
<html>
<head>
    <title>Club Member Registration</title>
</head>
<body>
    
        <hr>
        
        <form action="" method="post">
            <fieldset>
                <legend><h1>Club Member Registration</h1></legend>
                <table>
                    <tr>
                        <td align="right">Name:</td>
                        <td><input type="text" name="name"> <?php echo $err_name;?></td>
                    </tr>
                    <tr>
                        <td align="right">Username:</td>
                        <td><input type="text" name="username"> <?php echo $err_username;?></td>
                    </tr>
                    <tr>
                        <td align="right">Email:</td>
                        <td><input type="text" name="email"> <?php echo $err_email;?></td>
                    </tr>
                    <tr>
                    <td align="right">Password:</td>
                    <td><input type="password" name="password"> <?php echo $err_password;?></td>
                    </tr>
                    <tr>
                        <td align="right">Confirm Password:</td>
                        <td><input type="password" name="cpassword"> <?php echo $err_cpassword;?></td>
                    </tr>
                    <tr>
                        <td align="right">Phone:</td>
                    <td><input type="text" name="code" size="4" placeholder="code"> <?php echo $err_code;?><strong>  -      </strong><input type="text" name="number"size="9" placeholder="Number"> <?php echo $err_number;?></td>
                    </tr>
                    <tr>
                        <td align="right">Address:</td>
                        <td><input type="text" name="address" placeholder="Street Address"> <?php echo $err_address;?> <br>
                            <input type="text" name="city" placeholder="City" size="4"> <?php echo $err_city;?><strong>  -  </strong> <input type="text" name="state" placeholder="State" size="9"> <?php echo $err_state;?><br>
                            <input type="text" name="postalcode" placeholder="Postal/Zip Code"> <?php echo $err_postalcode;?>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">Birth Date:  <?php echo $err_day;
                                                             echo $err_month;
                                                             echo $err_year;
                                                       ?></td>
                        <td><select name="day">
                            <option disabled="disabled" selected="selected">Day</option>
                            <?php
                                for ($i=1; $i <=31 ; $i++) { 
                                    echo "<option>$i</option>";
                                }
                            ?>
                        </select> <select name="month">
                            <option disabled="disabled" selected="selected">Month</option>
                            <?php
                                $a = array("January","February","March","April","June","July","August","September","October","November","December");
                                foreach ($arr as $a) {
                                    echo "<option>$a</option>";
                                 } 
                             ?>
                        </select> <select name="year">
                            <option selected="selected" disabled="disabled">Year</option>
                            <?php
                                for ($i=1950; $i<2017; $i++) { 
                                    echo "<option>$i</option>";
                                } 
                             ?>
                        </select></td>
                    </tr>
                    <tr>
                        <td align="right">Gender:  <?php echo $err_gender;?></td>
                        <td><input type="radio" name="gender" value="male"> Male
                            <input type="radio" name="gender" value="female"> Female
                        </td>
                    </tr>
                    <tr>
                        <td align="right">Where did you hear about us?  <?php echo $err_heard;?></td>
                        <td><input type="checkbox" name="heard[]" value="friend">A Friend or Colleague <br>
                            <input type="checkbox" name="heard[]" value="google">Google <br>
                            <input type="checkbox" name="heard[]" value="blog">Blog Post <br>
                            <input type="checkbox" name="heard[]" value="news">News Article
                        </td>
                    </tr>
                    <tr>
                        <td align="right">Bio  <?php echo $err_bio;?></td>
                        <td><textarea name="bio"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="register" value="Register"></td>
                    </tr>

                </table>
            </fieldset> 
        </form>
    

</body>
</html>
