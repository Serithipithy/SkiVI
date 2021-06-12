$(document).ready(function() {

    $("#submit").click(function() {

        var skillname = $("#skill_name").val();
        var title = $("#course_title").val();
        var link = $("#link").val();
        var text = $("#text").val();
        var string = link;
        var res = string.match(/(http(s)?:\/\/.)?(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/g);
        console.log(res);
        if (res !== null) {
            var sendMessage = '{ "title":"' + title + '", "link": "' + link + '", "text":"' + text + '" }';
        } else {
            link = "";
            var sendMessage = '{ "title":"' + title + '", "link": "' + link + '", "text":"' + text + '" }';
        }
        var obj = JSON.parse(JSON.stringify(sendMessage));
        console.log(obj);
        if (skillname.localeCompare("skill1") == 0) {
            $.ajax({
                type: 'PUT',
                url: "http://localhost:8000/REST_API_FA/api/put.php",
                data: obj,
                error: function(e) {
                    console.log(e);
                },
                dataType: "json",
                contentType: "application/json",
                success: function(e) {
                    console.log(e.message);

                    $("#skill_name").val("");
                    $("#title").val("");
                    $("#link").val("");
                    $("#text").val("");
                    $("#statusText").html(e.message);
                }
            });
        }
        if (skillname.localeCompare("skill2") == 0) {
            $.ajax({
                type: 'PUT',
                url: "http://localhost:8000/REST_API_ORIGAMI/api/put.php",
                data: obj,
                error: function(e) {
                    console.log(e);
                },
                dataType: "json",
                contentType: "application/json",
                success: function(e) {
                    console.log(e.message);

                    $("#skill_name").val("");
                    $("#title").val("");
                    $("#link").val("");
                    $("#text").val("");
                    $("#statusText").html(e.message);
                }
            });
        }
        if (skillname.localeCompare("skill3") == 0) {
            $.ajax({
                type: 'PUT',
                url: "http://localhost:8000/REST_API_SIGN_LNG/api/put.php",
                data: obj,
                error: function(e) {
                    console.log(e);
                },
                dataType: "json",
                contentType: "application/json",
                success: function(e) {
                    console.log(e.message);

                    $("#skill_name").val("");
                    $("#title").val("");
                    $("#link").val("");
                    $("#text").val("");
                    $("#statusText").html(e.message);
                }
            });
        }
    });
});