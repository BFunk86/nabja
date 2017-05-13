/**
 * Created by Brandon Young
 */


$(document).ready(function(){
    /*
    var path = window.location.pathname;
    // Add the active class to the current nav menu
    switch (path) {
        case "/report.php":
            $("#report").addClass("active");
            break;
        case "/create.php":
            $("#create").addClass("active");
            break;
        case "/relations.php":
            $("#relations").addClass("active");
            break;
        default:
            $("#home").addClass("active");
    } // end switch
    */

    // Close login modal when create user clicked
    $("#createUser").click(function() {
        $("#loginModal").modal('hide');
    });
});