<?php
require_once("inc_head.php");

?>
<body>
<header>
    <!-- This is where the JCC banner will go -->
    <div id="banner"></div>
    <div class="navbar navbar-default" role="navigation">
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
                    <li id="home" class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                    <li id="report"><a href="report.php">Report</a></li>
                    <li id="create"><a href="create.php">Create</a></li>
                    <li id="relations"><a href="relations.php">Relations</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li id="login"><a href="#login" data-toggle="modal" data-target="#loginModal">Login <i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </div>
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
                <input class="btn pull-right" type="button" name="courseSubmit" value="Generate Report" />
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
                <input class="btn pull-right" type="button" name="programSubmit" value="Generate Report" />
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
                <input class="btn pull-right" type="button" name="generalSubmit" value="Generate Report" />
            </fieldset>
        </form>
    </fieldset>
</form><!-- outer form -->
</div><!-- .container -->
<?php
require_once("inc_footer.php");
require_once("inc_login.php");
require_once("inc_scripts.php");
?>

</body>
</html>