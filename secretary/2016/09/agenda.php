    <?
$short_desc = "DRAFT Agenda";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

function ticket($num) {
    return "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">".$num."</a>";
}

agenda_day_start("Wednesday, September 21, 2016 - Working Groups");
agenda_item(" 9:00am -   10:30am", "Tools / Perf WG");
agenda_item(" 10:30am - 11:00am", "Break");
agenda_item(" 11:00am -  12:30pm", "Hybrid WG");
agenda_item(" 11:00am -  12:30pm", "Tools / Perf WG");
agenda_item(" 12:30pm -   1:30pm", "Lunch");
agenda_item(" 1:30pm -   3:00pm", "Tools / Perf WG");
agenda_item(" 1:30pm -   3:00pm", "Persistence WG");
agenda_item(" 3:00pm -   3:30pm", "Break");
agenda_item(" 3:30pm -   5:00pm", "Tools / Perf WG");
agenda_item(" 3:30pm -   5:00pm", "Persistence WG");
agenda_day_end();

agenda_day_start("Thursday, September 22, 2016 - Working Groups and Plenary");
agenda_item(" 9:00am -   10:30am", "Plenary (see below)");
agenda_item(" 10:30am - 11:00am", "Break");
agenda_item(" 11:00am -  12:30pm", "Plenary (see below)");
agenda_item(" 12:30pm -   1:30pm", "Lunch");
agenda_item(" 1:30pm -   3:00pm", "Plenary (see below)");
agenda_item(" 3:00pm -   3:30pm", "Break");
agenda_item(" 3:30pm -   5:00pm", "Tools / Debugging WG");
agenda_day_end();

agenda_day_start("Friday, September 23, 2016 - Plenary and Working Groups");
agenda_item(" 9:00am -   9:30am", "Votes");
agenda_item("                ", "No \"No Votes\" Vote:");
agenda_item("                ", "<a href=\"https://github.com/mpi-forum/mpi-issues/issues/26\">#26</a>: Deprecate point-to-point send cancel");
agenda_item("                ", "Second Votes:");
agenda_item("                ", "<a href=\"https://github.com/mpi-forum/mpi-issues/issues/26\">#26</a>: Deprecate point-to-point send cancel");
agenda_item("                ", "First Vote:");

agenda_item("","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/52\">#52</a>: Remove info key propagation from MPI_COMM_DUP");
agenda_item("","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/53\">#53</a>: MPI_COMM_DUP_WITH_INFO can be used to explicitly propagate info hints");
agenda_item("","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/11\">#11</a>: Adds communicator info keys and allows info assertions");

agenda_item(" 9:30am -   10:30am", "Plenary (see below)");
agenda_item(" 10:30am - 11:00am", "Break");
agenda_item(" 11:00am -   12:30pm", "Plenary (see below)");
agenda_item(" 12:30pm -   1:30pm", "Lunch");
agenda_item(" 1:30pm -   3:00pm", "RMA WG");
agenda_item(" 3:00pm -   3:30pm", "Break");
agenda_item(" 3:30pm -   5:00pm", "RMA WG");
agenda_day_end();


agenda_plenary_start("Plenary Items to be Discussed",0);
plenary_item("Welcome","Introductions","All",0);
plenary_item("Update","WG status","All WG chairs or their proxies",0);
plenary_item("Change Reading","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/26\">#26</a>: Deprecate point-to-point send cancel","Dan",0);
plenary_item("Reading","Persistent Collectives","Tony",0);
plenary_item("Update","Tools: The MPI_T Event Interface","Marc-Andre",0);
plenary_item("","Towards a New Debugger Interface","Kathryn",0);
agenda_plenary_end();

include_once("$topdir/include/footer.php");
?>
