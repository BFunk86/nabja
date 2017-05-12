<?php
require_once("inc_head.php");
require_once("inc_nav.php");
?>
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
<?php
require_once("inc_footer.php");
require_once("inc_login.php");
require_once("inc_scripts.php");
?>

</body>
</html>