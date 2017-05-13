<?php
    require_once("inc_head.php");
    require_once("inc_nav.php");
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <form id="outer">
                <fieldset class="fieldSet">
                    <legend id="topLegend">
                        <h1>Create / Edit Relations</h1>
                    </legend>
                    <form action="report.php" method="post">
                        <fieldset class="fieldSet">
                            <legend id="courseLegend">
                                <h2>Course</h2>
                            </legend>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="course">Course Name:</label><br>
                                    <select class="form-control" id="course" name="course">
                                        <option value="web_pub">Web Publishing</option>
                                        <option value="micro_Apps_I">Microcomputer Applications I</option>
                                        <option value="prog_concepts">Programming Concepts/Applications</option>
                                        <option value="comp_prog">Computer Programming</option>
                                        <option value="web_tech">Web Technologies</option>
                                        <option value="micro_apps_II">Microcomputer Applications II</option>
                                    </select>
                                </div><!-- .form-group -->
                            </div><!-- .col-xs-6 -->
                            <div class="clearfix"></div>
                            <input class="btn pull-right" type="button" id="courseSubmit" name="courseSubmit" value="Select Course"/>
                        </fieldset>
                    </form>

                    <form id="relations" action="relations.php" method="post">
                        <fieldset class="fieldSet">
                            <legend id="relationsLegend">
                                <h2>Relations</h2>
                            </legend>
                            <div id="scroll">
                                <table class="table-bordered" id="relationsTable"
                                       summary="This table contains options for course attributes">
                                    <caption>
                                        Legend: (I)-Introduced, (R)-Reinforcment, (P)-Proficient, (A)-Assessed,(M)-More Proficient
                                    </caption>
                                    <thead>
                                    <tr>
                                        <th>Outcomes</th>
                                        <th class="centerHead">I</th>
                                        <th class="centerHead">R</th>
                                        <th class="centerHead">P</th>
                                        <th class="centerHead">A</th>
                                        <th class="centerHead">M</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>Web/Database Application</th>
                                        <td><input type="checkbox" name="webData" value="i"/></td>
                                        <td><input type="checkbox" name="webData" value="r"/></td>
                                        <td><input type="checkbox" name="webData" value="p"/></td>
                                        <td><input type="checkbox" name="webData" value="a"/></td>
                                        <td><input type="checkbox" name="webData" value="m"/></td>
                                    </tr>
                                    <tr>
                                        <th>Office Software Solutions</th>
                                        <td><input type="checkbox" name="officeSoft" value="i"/></td>
                                        <td><input type="checkbox" name="officeSoft" value="r"/></td>
                                        <td><input type="checkbox" name="officeSoft" value="p"/></td>
                                        <td><input type="checkbox" name="officeSoft" value="a"/></td>
                                        <td><input type="checkbox" name="officeSoft" value="m"/></td>
                                    </tr>
                                    <tr>
                                        <th>Object Oriented Programming Language</th>
                                        <td><input type="checkbox" name="objProgLang" value="i"/></td>
                                        <td><input type="checkbox" name="objProgLang" value="r"/></td>
                                        <td><input type="checkbox" name="objProgLang" value="p"/></td>
                                        <td><input type="checkbox" name="objProgLang" value="a"/></td>
                                        <td><input type="checkbox" name="objProgLang" value="m"/></td>
                                    </tr>
                                    <tr>
                                        <th>Hardware/Software Troubleshooting</th>
                                        <td><input type="checkbox" name="hardSoftware" value="i"/></td>
                                        <td><input type="checkbox" name="hardSoftware" value="r"/></td>
                                        <td><input type="checkbox" name="hardSoftware" value="p"/></td>
                                        <td><input type="checkbox" name="hardSoftware" value="a"/></td>
                                        <td><input type="checkbox" name="hardSoftware" value="m"/></td>
                                    </tr>
                                    <tr>
                                        <th>Networking</th>
                                        <td><input type="checkbox" name="networking" value="i"/></td>
                                        <td><input type="checkbox" name="networking" value="r"/></td>
                                        <td><input type="checkbox" name="networking" value="p"/></td>
                                        <td><input type="checkbox" name="networking" value="a"/></td>
                                        <td><input type="checkbox" name="networking" value="m"/></td>
                                    </tr>
                                    <tr>
                                        <th>Data Structures</th>
                                        <td><input type="checkbox" name="dataStruct" value="i"/></td>
                                        <td><input type="checkbox" name="dataStruct" value="r"/></td>
                                        <td><input type="checkbox" name="dataStruct" value="p"/></td>
                                        <td><input type="checkbox" name="dataStruct" value="a"/></td>
                                        <td><input type="checkbox" name="dataStruct" value="m"/></td>
                                    </tr>
                                    <tr>
                                        <th>Data Structures</th>
                                        <td><input type="checkbox" name="assemblyLang" value="i"/></td>
                                        <td><input type="checkbox" name="assemblyLang" value="r"/></td>
                                        <td><input type="checkbox" name="assemblyLang" value="p"/></td>
                                        <td><input type="checkbox" name="assemblyLang" value="a"/></td>
                                        <td><input type="checkbox" name="assemblyLang" value="m"/></td>
                                    </tr>
                                    <tr>
                                        <th>Basic Communication - 1</th>
                                        <td><input type="checkbox" name="basicCom1" value="i"/></td>
                                        <td><input type="checkbox" name="basicCom1" value="r"/></td>
                                        <td><input type="checkbox" name="basicCom1" value="p"/></td>
                                        <td><input type="checkbox" name="basicCom1" value="a"/></td>
                                        <td><input type="checkbox" name="basicCom1" value="m"/></td>
                                    </tr>
                                    <tr>
                                        <th>Basic Communication - 2</th>
                                        <td><input type="checkbox" name="basicCom2" value="i"/></td>
                                        <td><input type="checkbox" name="basicCom2" value="r"/></td>
                                        <td><input type="checkbox" name="basicCom2" value="p"/></td>
                                        <td><input type="checkbox" name="basicCom2" value="a"/></td>
                                        <td><input type="checkbox" name="basicCom2" value="m"/></td>
                                    </tr>
                                    <tr>
                                        <th>Basic Communication - 3</th>
                                        <td><input type="checkbox" name="basicCom3" value="i"/></td>
                                        <td><input type="checkbox" name="basicCom3" value="r"/></td>
                                        <td><input type="checkbox" name="basicCom3" value="p"/></td>
                                        <td><input type="checkbox" name="basicCom3" value="a"/></td>
                                        <td><input type="checkbox" name="basicCom3" value="m"/></td>
                                    </tr>
                                    <tr>
                                        <th>Basic Communication - 4</th>
                                        <td><input type="checkbox" name="basicCom4" value="i"/></td>
                                        <td><input type="checkbox" name="basicCom4" value="r"/></td>
                                        <td><input type="checkbox" name="basicCom4" value="p"/></td>
                                        <td><input type="checkbox" name="basicCom4" value="a"/></td>
                                        <td><input type="checkbox" name="basicCom4" value="m"/></td>
                                    </tr>
                                    <tr>
                                        <th>Basic Communication - 5</th>
                                        <td><input type="checkbox" name="basicCom5" value="i"/></td>
                                        <td><input type="checkbox" name="basicCom5" value="r"/></td>
                                        <td><input type="checkbox" name="basicCom5" value="p"/></td>
                                        <td><input type="checkbox" name="basicCom5" value="a"/></td>
                                        <td><input type="checkbox" name="basicCom5" value="m"/></td>
                                    </tr>
                                    <tr>
                                        <th>Math/Quantitative Reasoning - 1</th>
                                        <td><input type="checkbox" name="mathQuant1" value="i"/></td>
                                        <td><input type="checkbox" name="mathQuant1" value="r"/></td>
                                        <td><input type="checkbox" name="mathQuant1" value="p"/></td>
                                        <td><input type="checkbox" name="mathQuant1" value="a"/></td>
                                        <td><input type="checkbox" name="mathQuant1" value="m"/></td>
                                    </tr>
                                    <tr>
                                        <th>Math/Quantitative Reasoning - 2</th>
                                        <td><input type="checkbox" name="mathQuant2" value="i"/></td>
                                        <td><input type="checkbox" name="mathQuant2" value="r"/></td>
                                        <td><input type="checkbox" name="mathQuant2" value="p"/></td>
                                        <td><input type="checkbox" name="mathQuant2" value="a"/></td>
                                        <td><input type="checkbox" name="mathQuant2" value="m"/></td>
                                    </tr>
                                    <tr>
                                        <th>Math/Quantitative Reasoning - 3</th>
                                        <td><input type="checkbox" name="mathQuant3" value="i"/></td>
                                        <td><input type="checkbox" name="mathQuant3" value="r"/></td>
                                        <td><input type="checkbox" name="mathQuant3" value="p"/></td>
                                        <td><input type="checkbox" name="mathQuant3" value="a"/></td>
                                        <td><input type="checkbox" name="mathQuant3" value="m"/></td>
                                    </tr>
                                    <tr>
                                        <th>Math/Quantitative Reasoning - 4</th>
                                        <td><input type="checkbox" name="mathQuant4" value="i"/></td>
                                        <td><input type="checkbox" name="mathQuant4" value="r"/></td>
                                        <td><input type="checkbox" name="mathQuant4" value="p"/></td>
                                        <td><input type="checkbox" name="mathQuant4" value="a"/></td>
                                        <td><input type="checkbox" name="mathQuant4" value="m"/></td>
                                    </tr>
                                    <tr>
                                        <th>Math/Quantitative Reasoning - 5</th>
                                        <td><input type="checkbox" name="mathQuant5" value="i"/></td>
                                        <td><input type="checkbox" name="mathQuant5" value="r"/></td>
                                        <td><input type="checkbox" name="mathQuant5" value="p"/></td>
                                        <td><input type="checkbox" name="mathQuant5" value="a"/></td>
                                        <td><input type="checkbox" name="mathQuant5" value="m"/></td>
                                    </tr>
                                    <tr>
                                        <th>Social Sciences-1</th>
                                        <td><input type="checkbox" name="socScience1" value="i"/></td>
                                        <td><input type="checkbox" name="socScience1" value="r"/></td>
                                        <td><input type="checkbox" name="socScience1" value="p"/></td>
                                        <td><input type="checkbox" name="socScience1" value="a"/></td>
                                        <td><input type="checkbox" name="socScience1" value="m"/></td>
                                    </tr>
                                    <tr>
                                        <th>Social Sciences-2</th>
                                        <td><input type="checkbox" name="socScience2" value="i"/></td>
                                        <td><input type="checkbox" name="socScience2" value="r"/></td>
                                        <td><input type="checkbox" name="socScience2" value="p"/></td>
                                        <td><input type="checkbox" name="socScience2" value="a"/></td>
                                        <td><input type="checkbox" name="socScience2" value="m"/></td>
                                    </tr>
                                </table>
                            </div><!-- .scroll -->
                            <div class="clearfix"></div>
                            <input class="btn pull-right" type="button" id="updateRelations" name="updateRelations" value="Update Relations"/>
                        </fieldset>
                    </form>

                </fieldset><!-- Outer fieldset -->
            </form><!-- Outer form -->
        </div><!-- .col-xs-8 -->
    </div><!-- .row -->
</div><!-- .container -->
<?php
    require_once("inc_footer.php");
    require_once("inc_login.php");
    require_once("inc_scripts.php");
?>

</body>
</html>