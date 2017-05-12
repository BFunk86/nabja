<?php
    require_once("inc_head.php");
    require_once("inc_nav.php");
    require_once("inc_scripts.php");
?>
<div class="container">
    <div class="row">
        <div class="col-xs-10">
            <form id="outer">
                <fieldset class="fieldSet">
                    <legend id="topLegend">
                        <h1>Create/Edit Student Learning Outcomes</h1>
                    </legend>
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#course" data-toggle="tab">Course</a></li>
                        <li><a href="#program" data-toggle="tab">Program</a></li>
                        <li><a href="#genEd" data-toggle="tab">General Education</a></li>
                    </ul>


                    <div class="tab-content">
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- Course Ed Form -->
                                <div id="course" class="tab-pane active">
                                    <form action="create.php" method="post">
                                        <p>This is where the create course slo stuff goes</p>
                                        <div class="col-xs-5">
                                            <div class="form-group">
                                                <label for="cName">Course Name:</label>
                                                <input class="form-control" id="cName" type="text" name="cName"
                                                       placeholder="Enter Course Name">
                                            </div><!-- .form-group -->
                                        </div><!-- .col-xs-5 -->
                                        <div class="col-xs-2">
                                            <div class="form-group">
                                                <label for="cAbbrev">Abbreviation:</label>
                                                <select class="form-control" size="1" name="cAbbrev" id="cAbbrev">
                                                    <option value="CSC">CSC</option>
                                                    <option value="CIT">CIT</option>
                                                    <option value="IT">IT</option>
                                                    <option value="Option 4">O5</option>
                                                    <option value="Option 5">O6</option>
                                                    <option value="Option 6">O7</option>
                                                </select>
                                            </div><!-- .form-group -->
                                        </div><!-- .col-xs-2 -->
                                        <div class="col-xs-5">
                                            <div class="form-group">
                                                <label for="cNumber">Course Number:</label>
                                                <input class="form-control" id="cNumber" name="cNumber" type="text"
                                                       placeholder="Enter Course Number">
                                            </div><!-- .form-group -->
                                        </div><!-- .col-xs-5 -->
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <label for="cPre">Prerequisites:</label>
                                                <select class="form-control" name="cPre" size="3" id="cPre" multiple>
                                                    <option> Web Publishing</option>
                                                    <option> Web Technologies</option>
                                                    <option> Computer Programming</option>
                                                    <option> Web Programming</option>
                                                    <option> O5</option>
                                                    <option> O6</option>
                                                    <option> O7</option>
                                                </select>
                                            </div><!-- .form-group -->
                                        </div><!-- .col-xs-6 -->
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <label for="cCore">Corequisites:</label>
                                                <select class="form-control" name="cCore" size="3" id="cCore" multiple>
                                                    <option> Web Publishing</option>
                                                    <option> Web Technologies</option>
                                                    <option> Computer Programming</option>
                                                    <option> O4</option>
                                                    <option> O5</option>
                                                    <option> O6</option>
                                                    <option> O7</option>
                                                </select>
                                            </div><!-- .form-group -->
                                        </div><!-- .col-xs-6 -->
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="slo">Student Learning Outcome</label>
                                                <textarea class="form-control" name="slo" rows="2" id="slo"></textarea>
                                            </div><!-- .form-group -->
                                        </div><!-- .col-xs-12 -->
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="editCourseSLO">Edit Student Learning Outcomes:</label>
                                                <select class="form-control" name="editCourseSLO" size="4"
                                                        id="editCourseSLO"
                                                        multiple>
                                                    <option>Web Publishing</option>
                                                    <option>Web Technologies</option>
                                                    <option>Computer Programming</option>
                                                    <option>O4</option>
                                                    <option>O5</option>
                                                    <option>O6</option>
                                                    <option>O7</option>
                                                </select>
                                            </div><!-- .form-group -->
                                        </div><!-- .col-xs-12 -->
                                        <input type="submit" name="submitCourse" class="pull-right"
                                               value="Create Student Learning Outcome"/>
                                    </form>
                                </div><!-- end of creating new course slo -->
                            </div><!-- .col-xs-12 -->
                        </div><!-- .row -->
                        <div class="row">

                            <!-- Program Gen Ed Form -->
                            <div id="program" class="tab-pane">
                                <p>This is where the create prorgam slo stuff goes</p>
                                <div class="form-group">
                                    <span>Program Name:</span>
                                    <input type="text" value="Input New Program Name">
                                </div>
                                <div class="rightContainer">
                                    <span>Curriculum Code:</span>
                                    <br>
                                    <input type="text" value="Input Curriculum Code">
                                    </br>
                                </div>
                                <div class="PLContainer">
                                    <span>Program Description:</span
                                    <textarea rows="4" cols="45"></textarea>
                                    <br>
                                    <br>
                                </div>
                                <div class="PLContainer">
                                    <span>Student Learning Outcome</span>
                                    <BR>
                                    <textarea rows="4" cols="45"></textarea>
                                    <br>
                                    <br>
                                </div>
                                <div class="PLContainer">
                                    <BR>
                                    <span>Edit Student Learning Outcomes:</span>
                                    <select style="width:600px;height:150px;line-height:3em;overflow:scroll;"
                                            name="Morefruit"
                                            size="4" multiple>
                                        <option>Web Publishing</option>
                                        <option>Web Technologies</option>
                                        <option>Computer Programming</option>
                                        <option>O4</option>
                                        <option>O5</option>
                                        <option>O6</option>
                                        <option>O7</option>
                                        <option>O8</option>
                                        <option>O9</option>
                                        <option>O10</option>
                                        <option>O11</option
                                    </select>
                                </div>
                                <input type="submit" value="Create Student Learning Outcome"/>
                            </div><!-- end of creating new program slo -->
                        </div><!-- .row program slo -->

                        <!-- Create Gen Ed Form -->
                        <div id="genEd" class="tab-pane">
                            <p>This is where the create gen ed slo stuff goes</p>
                            <div>
                                <span>Course Name:</span>

                                <input type="text" value="Input New Course Name">
                            </div>
                            <div class="middleContainer"><span>Student Learning Outcome</span>

                                <textarea rows="5" cols="75"></textarea>

                            </div>
                            <div>
                                <span>Edit Student Learning Outcomes:</span>
                                <select style="width:600px;height:150px;line-height:3em;overflow:scroll;"
                                        name="Morefruit"
                                        size="4" multiple>
                                    <option>Web Publishing</option>
                                    <option>Web Technologies</option>
                                    <option>Computer Programming</option>
                                    <option>O4</option>
                                    <option>O5</option>
                                    <option>O6</option>
                                    <option>O7</option>
                                    <option>O8</option>
                                    <option>O9</option>
                                    <option>O10</option>
                                    <option>O11</option>
                                </select>
                                <input type="submit" value="Create Student Learning Outcome"/>
                            </div>
                        </div><!-- end of creating new gen ed slo -->
                    </div><!-- .tab-content -->

                </fieldset><!-- Outer Fieldset -->
            </form><!-- outer form -->
        </div><!-- .col-xs-10 -->
    </div><!-- .row -->
</div><!-- .container -->
<?php
    require_once("inc_footer.php");
    require_once("inc_login.php");
?>

</body>
</html>