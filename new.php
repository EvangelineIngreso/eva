<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEW REGISTRATION PAGE</title> 
    <link rel="stylesheet" href="regi.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    <div class = "info">

            <div class = "form-header">
                <h1><center> NEW EMPLOYEE </center> <h1>
            </div>
                    <span> Personal Info </span>

                    <div class = "personal" >
                        
                            <div class="drag-area">
                                <header>Drag & Drop to Upload File</header>
                                <span>OR</span>
                                <button>Browse File</button>
                                <input type="file" hidden>
                            </div>
                <form>
                                <div class = "ab">
                                    <div class = "first" style="float: left;">
                                        <label for = "fname"> First Name </label> <br>
                                        <input type = "text" id = "fname" name = "fname" class = "p_info"> 
                                    </div>
                                    <div class = "middle" style="display:inline-block; margin-left:5%;">
                                        <label for = "mname"> Middle Name </label> <br>
                                        <input type = "text" id = "mname" name = "mname" class = "p_info">
                                    </div>
                                    <div class = "last" style="display:inline-block; margin-left:5%;">
                                        <label for = "lname"> Last Name </label> <br>
                                        <input type = "text" id = "lname" name = "lname" class = "p_info">
                                    </div>
                                    <div class = "ext" style="display:inline-block; margin-left:5%;">
                                        <label for = "suffix"> Suffix</label> <br>
                                        <input type = "text" id = "suffix" name = "suffix" class = "p_info">
                                    </div>
                                </div>

                                    <br>

                                <div class = "cd">
                                    <div class = "birth" style="float: left;">
                                        <label for = "birthdate"> Date of Birth </label><br>
                                        <input type="date" id="birthdate" name="birthdate" max="1979-12-31">
                                    </div>
                                    <div class = "sex" style="display:inline-block; margin-left:15%;">
                                        <label for = "gender"> Gender </label><br>
                                        <select id="gender" name="gender">
                                            <option value="">---Select One---</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <div class = "nation" style="display:inline-block; margin-left:9%;">
                                        <label for = "nationality"> Nationality </label><br>
                                        <select id="nationality" name="nationality">
                                            <option value="Filipino">Filipino</option>
                                            <option value="Korean">Korean</option>
                                            <option value="Thai">Thai</option>
                                            <option value="Chinese">Chinese </option>
                                        </select>
                                    </div>
                                    <div class = "status" style="display:inline-block; margin-left:10%;">
                                        <label for = "c_status"> Civil Status </label><br>
                                        <select id="c_status" name="c_status" style="width: 167%;">
                                            <option value="">---Select One---</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                        </select>
                                    </div>

                                </div>

                                <hr>

                                <div class = "ef">
                                    <div style="float: left;">
                                        <label for = "department"> Department </label><br>
                                        <input type = "text" id = "department" name = "department" style="width: 206%;">
                                    </div>
                                </div>
                                <div style="display:inline-block; margin-left:16%;">
                                    <label for = "designation"> Designation </label><br>
                                    <input type = "text" designation = "department" name = "department" style="width: 132%;">
                                </div>
                                <div style="display:inline-block; margin-left:6%;">
                                    <label for = "qualified"> Qualified Dept. Status </label><br>
                                    <select id="qualified" name="qualified" style="width: 124%;">
                                            <option value="">---Select One---</option>
                                            
                                    </select>
                                </div>
                                <br> <br>
                                <div class = "gh">
                                    <div style="float: left;">
                                        <label for = "emp_status"> Employee Status </label><br>
                                        <input type = "text" id = "emp_status" name = "emp_status" style="width: 183%;">
                                    </div>
                                    <div style="display:inline-block; margin-left:21%;">
                                        <label for = "paydate"> Paydate </label><br>
                                        <input type="date" id="paydate" name="paydate" max="1979-12-31">
                                    </div>
                                    <div style="display:inline-block; margin-left:3%;">
                                        <label for = "emp_no"> Employee Number </label><br>
                                        <input type = "text" id = "emp_no" name = "emp_no" style="width: 185%;">
                                    </div>
                                </div>
                    </div>
                        <br>
                    <span> Contact Info </span>

                        <div class = "contact">

                            
                            <div style="float: left;margin-left: 4%;">
                                <label for = "c_no">Contact No. </label><br>
                                <input type = "text" id = "c_no" name = "c_no" style="width: 350%;">
                            </div>
                            <div style="display: inline-block;margin-left: 34%;">
                                <label for = "email"> Email </label><br>
                                <input type = "text" id = "email" name = "email" style="width: 381%;">
                            </div>
                                <br><br>
                            <div style="float: left;margin-left: 4%;">
                                <label for = "other"> Other (Social Media) </label><br>
                                <select id="other" name="other">
                                            <option value="">---Select One---</option>
                                            <option value="Facebook">Facebook</option>
                                            <option value="Twitter">Twitter</option>
                                </select>
                            </div>
                            <div style="display: inline-block;margin-left: 36%;">
                                <label for = "socmed_id"> Social Media Account ID / No.</label> <br>
                                <input type = "text" id = "socmed_id" name = "socmed_id" style="width: 303%;">
                            </div>
                        </div>
                        <br>

                    <span> Address </span>
                        <div class ="address">

                            <div style="margin-left: 4%;">
                                <label for = "line1"> Address Line 1 </label><br>
                                <input type = "text" id = "line1" name = "line1" style="width: 96%;"><br> <br>
            
                                <label for = "line2"> Address Line 2 </label><br>
                                <input type = "text" id = "line2" name = "line2" style="width: 96%;">
                            </div><br>
                            <div  style="float:left; margin-left: 4%;">
                                <label for = "city"> City / Municipality </label><br>
                                <input type = "text" id = "city" name = "city" style=" width: 349%;">
                            </div>
                            <div style="display: inline-block;margin-left:34%">
                                <label for = "state"> State / Province </label><br>
                                <input type = " text" id = "state" name = "state" style="width: 378%;">
                            </div>
                            <br><br>
                            <div style="float:left; margin-left: 4%;">
                                <label for ="country"> Country </label><br>
                                <select id="country" name="country" style=" width: 608%;">
                                    <option value="">Philippines</option>
                                    <option value="">South Korea</option>
                                    <option value="">Thailand</option>
                                    <option value="">China</option>
                                    <option value="">Japan</option>
                                </select>
                            </div>
                            <div style="display: inline-block;margin-left:39%">
                                <label for = "zip"> Zip Code </label><br>
                                <input type = "text" id = "zip" name = "zip">
                            </div>
                        </div>
                        <br>
                </form>
                    <button type = "button" id = "save" name = "save" class = "bttn"> Save </button>
                    <button type = "button" id = "cancel" name = "cancel" class = "bttn"> Cancel </button>

            <script src="js/save.js"></script> 

</body>
</html>
