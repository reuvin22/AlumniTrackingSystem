<?php
header('Content-type: text/css');

echo "
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif;
    }
    .form-container {
        width: 100%;
        height: 100vh;
        display: grid;
        place-items: center;
    }
    form {
        display: grid;
        border: 1px solid black;
        height: 300px;
        width: 400px;
        padding: 30px 60px;
        border-radius: 20px;
    }
    form > input {
        height: 30px;
        width: 100%;
        font-size: 20px;
        padding: 4% 5%;
    }
    label {
        margin-top: 10%;
    }
    form > button {
        cursor: pointer;
        height: 40px;
        margin-top: 20px;
        border-radius: 10px;
        border: none;
        background-color: blue;
        color: white;
        font-weight: bold;
    }
    form > legend {
        font-size: 30px;
        font-weight: bold;
    }
    .nav-container {
        border: 1px solid black;
        width: 220px;
        height: 100vh;
        background-color: rgb(4,55,106);
    }
    .navbar {
        display: grid;
        gap: 50px;
        margin-left: 15%;
        margin-top: 100%;
        place-items: center;
    }
    .navbar > h1 {
        color: white;
        font-size: 35px;
    }
    .navbar > .links {
        text-decoration: none;
        font-weight: bold;
        color: white;
        font-size: 20px
    }
    .navImage {
        display:flex;
        justify-content: center;
        align-items: center;
    }
    .logo{
        max-height: 30px;
        max-width: 70px;
        cursor: pointer;
    }
    .navImage > .logo {
        margin-right: 10%;
    }
    .navImage {
        margin-left: -19%;
    }
    .navImage1 > .logo {
        max-height: 30px;
        max-width: 70px;
        cursor: pointer;
    }
    .navImage2 {
        display:flex;
        justify-content: center;
        align-items: center;
    }
    .navImage2 > img{
        max-height: 40px;
        max-width: 70px;
    }
    .navImage1 > a, .navImage > a, .navImage2 > a{
        text-decoration: none;
        font-size: 20px;
        font-weight: bold;
        color: white;
    }
    .contentContainer {
        display: grid;
        width: 84.3%;
        height: 100vh;
        margin-left: 200px;
        position:absolute;
        top: 0;
    }
    .record {
        width: 100%;
        height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 7%;
        gap: 20px;
    }
    .cards {
        height: 130px;
        width: 30%;
        box-shadow: 2px 1px 20px -5px rgba(0,0,0,0.75);
        border-radius: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgb(4,180,215);
    }
    .count > span, .count > h1 {
        color: white;
    }
    .image > img {
        max-width: 150px;
        min-width: 60px;
        max-height: 70px;
        min-height: 60px;
        margin-right: 30px;
    }
    .count > span {
        font-size: 20px;
        font-weight: bold;
    }
    .charts {
        height: 500px;
        margin-top: -2%;
        display: flex;
        justify-content: center;
        gap: 30px;
    }
    .chart1 {
        height: 70%;
        width: 60%;
        box-shadow: 2px 1px 20px -5px rgba(0,0,0,0.75);
        padding: 0px 30px;
        border-radius: 20px;
    }

    .chart2 {
        height: 70%;
        width: 30%;
        box-shadow: 2px 1px 20px -5px rgba(0,0,0,0.75);
        padding: 0px 30px;
        border-radius: 20px;
        display: flex;
        justify-content: center;
    }
    #employmentStatus {
        height: 200px;
        width: 100%;
        margin-top: 3%;
    }
    #genderStatus {
        margin-top: 10%;
    }
    .container {
        display: flex;
    }
    .content {
        width: 83%;
        height: 100vh;
    }
    .content {
        display: grid;
        place-items: center;
    }
    .tableContainer {
        display: grid;
        place-items: center;
        margin-top: -30%;
        width: 95%;

    }
    .titleTable {
        display: flex;
        justify-content: center;
        margin-top: 20px;
        font-size: 30px;
        font-weight: bold;
    }
    .tableContent {
        width: 90%;
        height: 550px;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }
    .buttonsCrud {
        display: grid;
        place-items: center;
        gap: 6px
    }
    .buttonsCrud > button {
        height: 30px;
        width: 50px;
        cursor: pointer;
    }
    .update {
        background-color: green;
        color: white;
        border: none;
    }
    .delete {
        background-color: red;
        color: white;
        border: none;
    }
    @media only screen and (max-width: 700px) {
        .nav-container {
            width: 100px;
        }
        .navbar > .links {
            display: none;
        }
        .contentContainer {
            margin-left: 110px;
            width: 75%;
            display: grid;
        }
        .record {
            display: grid;
            width: 100%;
            height: 450px;
            gap: 0%;
        }
        .cards {
            width: 320px;
        }
        .charts {
            display: grid;
            margin-top: 10%;
            width: 100%;
            place-items: center;
        }
        .chart1 {
            width: 350px;
            height: 100%;
        }
        .chart2 {
            width: 80%;
            height: 100%;
        }
        .navImage1 > .links, .navImage > .links, .navImage2 > .links{
            display: none;
        }
        .navImage1 > .links, .navImage > .links, .navImage2 > .links{
            display: none;
        }
        .navImage1:hover, .navImage:hover, .navImage2:hover{
            background-color: pink;
            cursor: pointer;
            transition: 0.3s;
            padding: 20px;
            margin-left: 10%;
            border-radius: 20px;
        }
        .navbar {
            margin-left: -20%;
        }
        .nav-container {
            height: 130vh;
        }
        .navbar > h1 {
            display: none;
        }
        .navImage {
            margin-left: 0%;
            margin-right: 0%;
        }
    }
"

?>