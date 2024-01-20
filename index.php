<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Tracking System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-slate-500 to-blue-500">
    <div class="h-screen grid place-content-center" id="hero">
        <div class="flex justify-center items-center h-full w-screen">
            <div class="flex justify-center items-center w-1/2">
                <div class="grid gap-2">
                    <h1 class="text-4xl font-bold text-center text-white">Alumni Tracking System</h1>
                    <span class="text-2xl text-center text-white">We're monitoring the employment status of every graduate students in Laguna State Polytechnic University</span>
                    <div class="w-full flex justify-center items-center gap-x-10 mt-5">
                        <button class="border-2 py-2 px-8 rounded-lg text-white hover:bg-blue-500 font-bold" id="form">Form</button>
                        <a href="./adminLogin.php"><button class="border-2 py-2 px-8 rounded-lg hover:bg-blue-500 font-bold text-white">Login</button></a>
                    </div>
            </div>
                <div class="hidden absolute border-2 border-blue-500 rounded-2xl px-20 py-10 bg-blue-500 grid place-content-center w-11/12" id="formContainer">
                    <img src="./images/xWhite.png" alt="Close" id="closebtn" class="h-7 w-10 ml-[100%] cursor-pointer">
                    <h1 class="text-center text-4xl font-bold text-white mb-5">Alumni Data</h1>
                    <form action="./php/postData.php" method="post" class="">
                        <div class="grid grid-cols-3 gap-x-3 gap-y-5 max-[640px]:grid-cols-1">
                            <input type="text" name="fname" id="fname" placeholder="First Name" class="h-10 px-5">
                            <input type="text" name="mname" id="mname" placeholder="Middle Name" class="pl-5">
                            <input type="text" name="lname" id="lname" placeholder="Last Name" class="pl-5"> 
                            <select name="course" id="course" class="h-10 px-4">
                                <optgroup>
                                    <option value="Bachelor of Science in Computer Science">Bachelor of Science in Computer Science</option>
                                    <option value="Bachelor of Science in Information Technology">Bachelor of Science in Information Technology</option>
                                    <option value="Bachelor of Science in Business Administration">Bachelor of Science in Business Administration</option>
                                    <option value="Bachelor of Science in Education">Bachelor of Science in Education</option>
                                    <option value="Bachelor of Science in Agri-Fisheries">Bachelor of Science in Agri-Fisheries</option>
                                    <option value="Bachelor of Science in Accountancy">Bachelor of Science in Accountancy</option>
                                </optgroup>
                            </select>
                            <select name="year" id="year" class="px-4">
                                <option value="2018">2018</option>
                                <option value="2018">2019</option>
                                <option value="2018">2020</option>
                                <option value="2018">2021</option>
                                <option value="2018">2022</option>
                            </select>
                            <input type="text" name="civilStatus" id="civilStatus" placeholder="Civil Status" class="px-4">
                            <input type="number" name="studentNumber" id="studentNumber" placeholder="Student Number" class="h-10 px-4">
                            <select name="employmentStatus" id="jobStatus" class="px-4">
                                <option value="Employed">Employed</option>
                                <option value="Unemployed">Unemployed</option>
                            </select>
                            <select name="relatedOrNot" id="relatedOrNot" class="px-4">
                                <option value="Related">Related</option>
                                <option value="Not Related">Not Related</option>
                            </select>
                            <select name="gender" id="gender" class="h-10 px-4">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select> 
                    </div>
                    <div class="grid place-content-center">
                        <button type="submit" name="submit" class="mt-7 border-2 w-60 h-10 rounded-lg font-bold text-white hover:bg-blue-800">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        const formButton = document.getElementById('form');
        const formContainer = document.getElementById('formContainer');
        const closebtn = document.getElementById('closebtn');
        const body = document.body;
    
        formButton.addEventListener('click', function() {
            formContainer.style.display = 'block';
        });
    
        closebtn.addEventListener('click', function() {
            formContainer.style.display = 'none';
        });
    </script>
</body>
</html>