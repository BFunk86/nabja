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
                    <li id="home"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                    <li id="report" class="active"><a href="report.php">Report</a></li>
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
                <h1>Report</h1>
            </legend>
            <div id="scroll1">
                <table class="table-bordered" id="reportTable">
                    <thead>
                        <tr id="head">
                            <th nowrap><p class="thead" bgcolor="#00693c">Course ID</p></th>
                            <th><p class="thead" bgcolor="#00693c">Course Name</p></th>
                            <th><p class="thead" bgcolor="#00693c">Student Learning Outcomes</p></th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>CSC 1530</td>
                        <td>Web Publishing</td>
                        <td>1. Perform usability testing<br />
                            2. Demonstrate an understanding of usability and accessibility
                            concepts<br />
                            3. Demonstrate an understanding of HTML and XHTML by web page with
                            tables, frames, forms, cascading style sheets, JavaScript and
                            multimedia<br />
                            4. Implement different types of CSS rules
                        </td>
                    </tr>

                    <tr>
                        <td>CSC 1560</td>
                        <td>Microcomputer Applications I</td>
                        <td>1. Create a professional-looking text document, spreadsheet,
                            database report, database form, and electronic presentation<br />
                            2. Perform a Mail Merge in Microsoft Word<br />
                            3. Use formulas and functions appropriate for various spreadsheets<br />
                            4. Display an understanding of database design<br />
                            5. Integrate the Office applications into one document
                        </td>
                    </tr>

                    <tr>
                        <td>CSC 1570</td>
                        <td>Programming Concepts and Applications</td>
                        <td>1. Write an algorithm that will solve a computer problem<br />
                            2. Understand the basic syntax of a programming language so that
                            they can use that language to solve problems<br />
                            3. Demonstrate the ability to design and write structured programs<br />
                            4. Demonstrate the ability to debug a program<br />
                            5. Analyze a problem and craft an appropriate algorithmic solution
                        </td>
                    </tr>

                    <tr>
                        <td>CSC 1760</td>
                        <td>Microcomputer Applications II</td>
                        <td>1. Design a user-friendly database application<br />
                            2. Analyze data in a spreadsheet via one of the built-in analysis
                            tools<br />
                            3. Demonstrate the ability to successfully import and export data
                            between different applications
                        </td>
                    </tr>

                    <tr>
                        <td>CSC 2540</td>
                        <td>Introduction to Systems Analysis</td>
                        <td>1. Design interview questions and paper questionnaires to gather
                            information concerning project requirements<br />
                            2. Plan a project using network diagrams, Gantt charts, and project
                            management software<br />
                            3. Use data flow diagrams to model user information requirements<br />
                            4. Create a basic system model through data flow diagrams and
                            entity-relationship diagrams<br />
                            5. Design input and output screens and reports
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div id="pdf" class="pull-right">
                <a href="pdf.php"><img id="pdf-icon" src="media/pdf-icon.png"> Generate PDF</a>
            </div>
        </fieldset>
    </form>
</div><!-- .container -->
<?php
    require_once("inc_footer.php");
    require_once("inc_login.php");
    require_once("inc_scripts.php");
?>

</body>
</html>
