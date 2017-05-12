/**
 * Created by Brandon Young
 */

// Add the active class to the current nav menu
var path = window.location.pathname;

console.log(path);

switch (path) {
    case "/nabja2/report.php":
        $("#report").addClass("active");
        break;
    case "/nabja2/create.php":
        $("#create").addClass("active");
    case "/nabja2/relations.php":
        $("#relations").addClass("active");
    default:
        $("#index").addClass("active");
}
