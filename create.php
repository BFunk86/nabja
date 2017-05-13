<?php
    require_once("inc_head.php");
    require_once("inc_nav.php");
    require_once("inc_scripts.php");
?>
<div class="container">

            <form id="outer" action="" method="get">
                <fieldset class="fieldSet">
                    <legend id="topLegend">
                        <h1>Create/Edit Student Learning Outcomes</h1>
                    </legend>
                    <ul class="nav nav-tabs">
                        <li role="presentation" class="active"><a href="#course" data-toggle="tab">Course</a></li>
                        <li role="presentation"><a href="#program" data-toggle="tab">Program</a></li>
                        <li role="presentation"><a href="#genEd" data-toggle="tab">General Education</a></li>
                    </ul>


                    <div class="tab-content">

                        <!-- Course Ed Form -->
                        <div id="course" class="tab-pane active">
                            <div class="row">
                                <div class="col-xs-12">
                                    <form action="create.php"  id="courseForm" method="post">
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
                                                <label for="courseSLO">Student Learning Outcome</label>
                                                <textarea class="form-control" name="courseSLO" rows="2"
                                                          id="courseSLO"></textarea>
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
                                        <input type="submit" name="submitCourse" class="btn pull-right"
                                               value="Create Student Learning Outcome"/>
                                    </form>
                                </div><!-- .col-xs-12 -->
                            </div><!-- .row -->
                        </div><!--  #course .tab-pane -->


                        <!-- Create Program Form -->
                        <div id="program" class="tab-pane">
                            <div class="row">
                                <div class="col-xs-12">
                                    <form action="create.php" id="programForm" method="post">
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <label for="pName">Program Name:</label>
                                                <input type="text" class="form-control" id="pName" name="pName"
                                                       placeholder="Enter Program Name">
                                            </div><!-- .form-group -->
                                        </div><!-- .col-xs-6  -->
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <label for="cCode">Curriculum Code:</label>
                                                <input class="form-control" type="text" name="cCode" id="cCode"
                                                       placeholder="Enter Curriculum Code">
                                            </div><!-- .form-group -->
                                        </div><!-- .col-xs-6  -->
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="pDescription">Program Description:</label
                                                <textarea class="form-control" name="pDescription" id="pDescription"
                                                          rows="4"></textarea>
                                            </div><!-- .form-group -->
                                        </div><!-- .col-xs-12 -->
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="pSLO">Student Learning Outcome</label>
                                                <textarea class="form-control" id="pSLO" name="pSLO"
                                                          rows="4"></textarea>
                                            </div><!-- .form-group -->
                                        </div><!-- .col-xs-12 -->
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="editProgramSLO">Edit Student Learning Outcomes:</label>
                                                <select class="form-control" name="editProgramSLO" id="editProgramSLO"
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
                                            </div><!-- .form-group -->
                                        </div><!-- .col-xs-12  -->
                                        <input type="submit" name="submitProgram" class="btn pull-right"
                                               value="Create Student Learning Outcome"/>
                                    </form>
                                </div><!-- .col-xs-12 -->
                            </div><!-- .row -->
                        </div><!-- #program .tab-pane -->


                        <!-- Create Gen Ed Form -->
                        <div id="genEd" class="tab-pane">
                            <div class="row">
                                <div class="col-xs-12">
                                    <form action="create.php" id="genEdForm" method="post">
                                        <div class="col-xs-5">
                                            <div class="form-group">
                                                <label for="genName">Course Name:</label>
                                                <input class="form-control" id="genName" type="text" name="genName"
                                                       placeholder="Enter Course Name">
                                            </div><!-- .form-group -->
                                        </div><!-- .col-xs-5 -->
                                        <div class="col-xs-2">
                                            <div class="form-group">
                                                <label for="genAbbrev">Abbreviation:</label>
                                                <select class="form-control" size="1" name="genAbbrev" id="genAbbrev">
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
                                                <label for="genNumber">Course Number:</label>
                                                <input class="form-control" id="genNumber" name="genNumber" type="text"
                                                       placeholder="Enter Course Number">
                                            </div><!-- .form-group -->
                                        </div><!-- .col-xs-5 -->
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <label for="genPre">Prerequisites:</label>
                                                <select class="form-control" name="genPre" size="3" id="genPre"
                                                        multiple>
                                                    <option>Web Publishing</option>
                                                    <option>Web Technologies</option>
                                                    <option>Computer Programming</option>
                                                    <option>Web Programming</option>
                                                    <option>O5</option>
                                                    <option>O6</option>
                                                    <option>O7</option>
                                                </select>
                                            </div><!-- .form-group -->
                                        </div><!-- .col-xs-6 -->
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <label for="genCore">Corequisites:</label>
                                                <select class="form-control" name="genCore" size="3" id="cCore"
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
                                        </div><!-- .col-xs-6 -->
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="slo">Student Learning Outcome</label>
                                                <textarea class="form-control" name="genSLO" rows="2"
                                                          id="genSLO"></textarea>
                                            </div><!-- .form-group -->
                                        </div><!-- .col-xs-12 -->
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="editGenSLO">Edit Student Learning Outcomes:</label>
                                                <select class="form-control" name="editGenSLO" size="4" id="editGenSLO"
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
                                        <input type="submit" class="btn pull-right" name="genSubmit"
                                               value="Create Student Learning Outcome"/>
                                    </form>
                                </div><!-- .col-xs-12 -->
                            </div><!-- .row -->
                        </div><!-- #genEd .tab-pane -->

                    </div><!-- .tab-content -->


                </fieldset><!-- Outer Fieldset -->
            </form><!-- outer form -->

</div><!-- .container -->

<?php
    require_once("inc_footer.php");
    require_once("inc_login.php");
?>

</body>
</html>