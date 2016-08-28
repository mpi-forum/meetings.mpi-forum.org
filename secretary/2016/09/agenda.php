    <?
$short_desc = "DRAFT Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

function ticket($num) {
    return "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">".$num."</a>";
}

agenda_day_start("Wednesday, September 21, 2016 - Working Groups");
agenda_item(" 9:00am -   11:00am", "WG");
agenda_item(" 11:00am - 11:30am", "Break");
agenda_item(" 11:30am -   1:00pm", "WG");
agenda_item(" 1:00pm -   2:00pm", "Lunch");
agenda_item(" 2:00pm -   3:00pm", "Tools WG");
agenda_item(" 3:00pm -   3:30pm", "Break");
agenda_item(" 3:30pm -   5:30pm", "Tools WG");
agenda_day_end();

agenda_day_start("Thursday, September 22, 2016 - Working Groups and Plenary");
agenda_item(" 9:00am -   11:00am", "Hybrid WG");
agenda_item(" 9:00am -   11:00am", "Persistance WG");
agenda_item(" 11:00am - 11:30am", "Break");
agenda_item(" 11:30am -   1:00pm", "Persistance WG");
agenda_item(" 11:30am -   1:00pm", "RMA WG");
agenda_item(" 1:00pm -   2:00pm", "Lunch");
agenda_item(" 2:00pm -   3:00pm", "Plenary (see below)");
agenda_item(" 3:00pm -   3:30pm", "Break");
agenda_item(" 3:30pm -   5:30pm", "Plenary (see below)");
agenda_day_end();

agenda_day_start("Friday, September 23, 2016 - Plenary and Working Groups");
agenda_item(" 9:00am -   9:30am", "Votes (see below)");
agenda_item(" 9:30am -   11:00am", "Plenary (see below)");
agenda_item(" 11:00am - 11:30am", "Break");
agenda_item(" 11:30am -   1:00pm", "Plenary (see below)");
agenda_item(" 1:00pm -   2:00pm", "Lunch");
agenda_item(" 2:00pm -   3:00pm", "WG");
agenda_item(" 3:00pm -   3:30pm", "Break");
agenda_item(" 3:30pm -   5:30pm", "WG");
agenda_day_end();


agenda_plenary_start("Plenary Items to be Discussed",0);
plenary_item("Update","WG status","All WG chairs or their proxies",0);
plenary_item("","Persistence Plenary","Tony",0);
agenda_plenary_end();

include_once("$topdir/include/footer.php");
?>
