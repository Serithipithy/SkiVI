$(document).ready(function() {

    $("#submit").click(function() {

        var skillname = $("#skill_name").val();
        var title = $("#title").val();
        var string = $("#link").val();
        var text = $("#text").val();
        var link = string.replace(/"/g, "'");
        console.log(link);
        var sendMessage = '{ "title":"' + title + '", "link": "' + link + '", "text":"' + text + '" }';
        // if (link !== null) {
        //     var sendMessage = '{ "title":"' + title + '", "link": "' + link + '", "text":"' + text + '" }';
        // } else {
        //     link = "";
        //     var sendMessage = '{ "title":"' + title + '", "link": "' + link + '", "text":"' + text + '" }';
        // }
        var obj = JSON.parse(JSON.stringify(sendMessage));

        if (skillname.localeCompare("skill1") == 0) {
            $.ajax({
                type: 'POST',
                url: "http://localhost:8000/REST_API_FA/api/post.php",
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
                type: 'POST',
                url: "http://localhost:8000/REST_API_ORIGAMI/api/post.php",
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
                type: 'POST',
                url: "http://localhost:8000/REST_API_SIGN_LNG/api/post.php",
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