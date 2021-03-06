$(document).ready(function () {

    $.ajax({ url: "adminpage_GetTable.php" }).done(function (html) {
        $("#TABLEBODY").append(html);
    });
			$( document ).ajaxComplete(function( event, xhr, settings ) {
		  if ( settings.url === "adminpage_AddUser.php"  | settings.url ==="adminpage_DeleteUser.php") {
		window.location.reload(true); // when done.
		  }
		});

    document.getElementById("save_changes").onclick = (function () {
        var thedata = [];
        var table = document.getElementById("ppl_Table");

        thedata[0] = table.rows[1].cells[0].firstChild.value;
        thedata[1] = table.rows[1].cells[1].firstChild.value;
        //thedata[2] = table.rows[1].cells[2].innerText;
        thedata[3] = table.rows[1].cells[3].firstChild.value;
        $.ajax({ url: "adminpage_GetNextLagenNr.php" }).done(function (html) {

            thedata[2] = html.trim();

            files = document.getElementById("the_image").files;

            if (files && files[0]) {

                var FR = new FileReader();

                FR.onload = function (event) {
                    thedata[4] = event.target.result;

                    if (thedata[0] != "")
					{
                        $.ajax({
                            url: 'adminpage_AddUser.php',
                            type: 'POST',
                            data: { the_data: thedata },
                            success: function (data) {
                                console.log(data);
                            }
                        });
					}
                };

                FR.readAsDataURL(files[0]).done;
            }
        });
		
		location.reload(false);

    });


    document.getElementById("delete").onclick = (function () {
        user_action_remove(document.getElementById("lagenNrTXTB").value);
		location.reload(false);
    });

    function user_action_remove(lagenNr) {
        $.ajax({
            url: 'adminpage_DeleteUser.php',
            type: 'POST',
            data: { the_data: lagenNr },
            success: function (data) {
                console.log(data);
            }
        });

    };
});