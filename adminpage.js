$(document).ready(function () {

    $.ajax({ url: "adminpage_GetTable.php" }).done(function (html) {
        $("#TABLEBODY").append(html);
    });

    document.getElementById("boka_commit").onclick = (function () {
        var thedata = [];
        var table = document.getElementById("ppl_Table");

        thedata[0] = table.rows[1].cells[0].firstChild.value;
        thedata[1] = table.rows[1].cells[1].firstChild.value;
        thedata[2] = table.rows[1].cells[3].firstChild.value;
        thedata[3] = table.rows[1].cells[4].firstChild.value;

       //thedata = [table.rows[0].cells[0], table.rows[0].cells[1], table.rows[0].cells[2], table.rows[0].cells[3]];
        
        //alert("sad"); // TRIGGERED
        //document.getElementById("boka_commit").innerHTML = (thedata[0] as HTMLTableCellElement).innerText;
        //document.getElementById("boka_commit").innerHTML = thedata[0];
        alert("Commencing database addition attempt.");
        
        $.ajax({
            url: 'adminpage_AddUser.php',
            type: 'POST',
            data: { the_data: thedata }/*,
            success: function (data) {
                console.log(data); // Inspect this in your console
            }*/
        });

        alert("Attempt finished."); // DID NAHT TRIGGUH 


        /*//$.ajax({ url: "adminpage_SetTable.php" }).done(function (html) {
            $("#login").append(html);
        });*/
    });
});