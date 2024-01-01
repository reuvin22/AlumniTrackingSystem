<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Tracking System</title>
    <link rel="stylesheet" type='text/css' href="./serverSIdeCss/style.php">
</head>
<body>
    <div class="hero" id="hero">
        <div class="introContainer">
            <div class="intro">
                <h1>Alumni Tracking System</h1>
                <span>We're monitoring the employment status of every graduate students in Laguna State Polytechnic University</span>
                <div class="buttons">
                    <button class="form" id="form">Form</button>
                    <a href="./adminLogin.php"><button class="adminLogin">Login</button></a>
                </div>
                <div class="formContainer" id="formContainer">
                    <div class="dataIntro">
                        <h1>Alumni Data</h1>
                    </div>
                    <form action="./php/postData.php" method="post" class="alumniData">
                        <div class="data">
                        <div class="data1">
                            <input type="text" name="fname" id="fname" placeholder="First Name">
                            <input type="text" name="mname" id="mname" placeholder="Middle Name">
                            <input type="text" name="lname" id="lname" placeholder="Last Name"> 
                        </div>
                        <div class="data2">
                            <input type="number" name="studentNumber" id="studentNumber" placeholder="Student Number">
                            <select name="employmentStatus" id="jobStatus">
                                <option value="Employed">Employed</option>
                                <option value="Unemployed">Unemployed</option>
                            </select>
                            <select name="relatedOrNot" id="relatedOrNot">
                                <option value="Related">Related</option>
                                <option value="Not Related">Not Related</option>
                            </select>
                        </div>      
                        <div class="data3">
                            <select name="course" id="course">
                                <optgroup>
                                    <option value="Bachelor of Science in Computer Science">Bachelor of Science in Computer Science</option>
                                    <option value="Bachelor of Science in Information Technology">Bachelor of Science in Information Technology</option>
                                    <option value="Bachelor of Science in Business Administration">Bachelor of Science in Business Administration</option>
                                    <option value="Bachelor of Science in Education">Bachelor of Science in Education</option>
                                    <option value="Bachelor of Science in Agri-Fisheries">Bachelor of Science in Agri-Fisheries</option>
                                    <option value="Bachelor of Science in Accountancy">Bachelor of Science in Accountancy</option>
                                </optgroup>
                            </select>
                            <select name="year" id="year">
                                <option value="2018">2018</option>
                                <option value="2018">2019</option>
                                <option value="2018">2020</option>
                                <option value="2018">2021</option>
                                <option value="2018">2022</option>
                            </select>
                            <input type="text" name="civilStatus" id="civilStatus" placeholder="Civil Status">
                        </div>  
                    </div>
                    <button type="submit" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="./script.js"></script>
</body>
</html>