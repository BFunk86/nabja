<!DOCTYPE html>
<html lang="en">
<head>
    <!--
       CSC 2410 Web Programming
       Chapter 2 Lab
       Part 1: Even and Odd Numbers

       Author: Brandon Young
       Date: 5/11/2017

       Filename: index.html.php
    -->
    <meta charset="UTF-8">
    <title>NABJA Project</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/style.css">
   <!-- Icons -->
    <script src="https://use.fontawesome.com/e75e0e1464.js"></script>

</head>
<body>
<header>
    <!-- This is where the JCC banner will go -->
    <div id="banner"></div>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand visible-xs" href="#">JCC</a>
            </div>
            <div class="collapse navbar-collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="report.html">Report</a></li>
                    <li><a  class="active" href="create.html">Create</a></li>
                    <li><a href="relations.html">Relations</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li id="login"><a href="#login">Login <i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</header>
<div class="container">
<form id="outer">
    <fieldset class="fieldSet">
        <legend id="topLegend">
            <h1>Course Learning Outcomes</h1>
        </legend>
        <form action="report.php" method="post">
            <fieldset class="fieldSet">
                <legend id="courseLegend">
                    <h2>Course</h2></legend>
                <label for="course">Course Name:</label><br>
                <select id="course" size="6" multiple>
                    <option value="web_pub">Web Publishing</option>
                    <option value="micro_Apps_I">Microcomputer Applications I</option>
                    <option value="prog_concepts">Programming Concepts/Applications</option>
                    <option value="comp_prog">Computer Programming</option>
                    <option value="web_tech">Web Technologies</option>
                    <option value="micro_apps_II">Microcomputer Applications II</option>
                </select>
                <br><br>
                <input class="submitButton" type="button" name="courseSubmit" value="Generate Report" />
            </fieldset>
        </form>
        <form>
            <fieldset class="fieldSet">
                <legend id="programLegend">
                    <h2>Program</h2>
                </legend>
                <label for="program">Program Name:</label>
                <select name="program" id="program">
                    <option value="cs">Computer Science</option>
                    <option value="it">Information Technology</option>
                    <option value="cis">Computer Information Systems</option>
                </select>
                <br><br>
                <input class="submitButton" type="button" name="programSubmit" value="Generate Report" />
            </fieldset>
        </form>
        <form>
            <fieldset class="fieldSet">
                <legend id="genEdLegend">
                    <h2>General Education</h2></legend>
                <label for="genEd">General Education Name:</label>
                <select name="genEd" id="genEd">
                    <option value="math">Mathematics/Quantitive Reasoning</option>
                    <option value="am_history">American History</option>
                    <option value="arts">The Arts</option>
                </select>
                <br><br>
                <input class="submitButton" type="button" name="generalSubmit" value="Generate Report" />
            </fieldset>
        </form>
    </fieldset>
</form></div>
</body>
</html>