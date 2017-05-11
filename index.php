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
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand visible-xs" href="#">JCC</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="report.html">Report</a></li>
                    <li><a href="create.html">Create</a></li>
                    <li><a href="relations.html">Relations</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li id="login"><a href="#login" data-toggle="modal" data-target="#loginModal">Login <i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
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
                    <h2>Course</h2>
                </legend>
                <div class="row">
                    <div class="col-xs-4">
                        <div class="form-group">
                            <label for="course">Course Name:</label><br>
                            <select id="course" class="form-control" size="6" multiple>
                                <option value="web_pub">Web Publishing</option>
                                <option value="micro_Apps_I">Microcomputer Applications I</option>
                                <option value="prog_concepts">Programming Concepts/Applications</option>
                                <option value="comp_prog">Computer Programming</option>
                                <option value="web_tech">Web Technologies</option>
                                <option value="micro_apps_II">Microcomputer Applications II</option>
                            </select>
                        </div><!-- .form-group -->
                    </div><!-- col-xs-4 -->
                </div><!-- .row -->
                <input class="btn" type="button" name="courseSubmit" value="Generate Report" />
            </fieldset>
        </form>
        <form action="report.php" method="post">
            <fieldset class="fieldSet">
                <legend id="programLegend">
                    <h2>Program</h2>
                </legend>
                <div class="row">
                    <div class="col-xs-4">
                        <div class="form-group">
                            <label for="program">Program Name:</label>
                            <select name="program" id="program" class="form-control">
                                <option value="cs">Computer Science</option>
                                <option value="it">Information Technology</option>
                                <option value="cis">Computer Information Systems</option>
                            </select>
                        </div>
                    </div>
                </div>
                <input class="btn" type="button" name="programSubmit" value="Generate Report" />
            </fieldset>
        </form>
        <form action="report.php" method="post">
            <fieldset class="fieldSet">
                <legend id="genEdLegend">
                    <h2>General Education</h2>
                </legend>
                <div class="row">
                    <div class="col-xs-4">
                        <div class="form-group">
                            <label for="genEd">General Education Name:</label>
                            <select name="genEd" id="genEd" class="form-control">
                                <option value="math">Mathematics/Quantitive Reasoning</option>
                                <option value="am_history">American History</option>
                                <option value="arts">The Arts</option>
                            </select>
                        </div>
                    </div>
                </div>
                <input class="btn" type="button" name="generalSubmit" value="Generate Report" />
            </fieldset>
        </form>
    </fieldset>
</form><!-- outer form -->
</div><!-- .container -->
<div class="container" id="footer">
    <p>SUNY Jamestown Community College - 525 Falconer Street, Jamestown, NY</p>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="loginModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Faculty Login</h4>
            </div>
            <div class="modal-body">
                <form action="login" method="post">
                    <div class="form-group">
                        <label for="uName">User Name:</label>
                        <input type="text" class="form-control" id="uName" name="uName">
                    </div>
                    <div class="form-group">
                        <label for="passwd">Password:</label>
                        <input type="password" class="form-control" id="passwd" name="passwd">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn">Login</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</body>
</html>