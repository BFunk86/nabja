<div class="container" id="footer">
    <p>SUNY Jamestown Community College - 525 Falconer Street, Jamestown, NY</p>
</div>
<script src="js/script.js">
    var path = window.location.pathname;

    console.log(path);

    switch (path) {
        case "/nabja2/report.php":
            $('#report').addClass('active');
            break;
        case "/nabja2/create.php":
            $('#create').addClass('active');
            break;
        case "/nabja2/relations.php":
            $('#relations').addClass('active');
            break;
        default:
            $('#home').addClass('active');
            break;
    }
</script>