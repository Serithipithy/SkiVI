$(document).ready(function() {

    $("#submit").click(function() {

        var skillname = $("#skill_name").val();
        var title = $("#course_title").val();
        //console.log(res);

        if (skillname.localeCompare("skill1") == 0) {
            $.ajax({
                type: 'DELETE',
                url: 'http://localhost:8000/REST_API_FA/api/delete.php?title='+ title,
                error: function(e) {
                    console.log(e);
                },
                dataType: "json",
                contentType: "application/json",
                success: function(e) {
                    console.log(e.message);

                    $("#skill_name").val("");
                    $("#course_title").val("");
                    $("#statusText").html(e.message);
                }
            });
            $.ajax({
                type: 'DELETE',
                url: 'http://localhost:8000/REST_API_USER_INFO/api/delete.php?course='+ title + '&skill=first_aid',
                error: function(e) {
                    console.log(e);
                },
                dataType: "json",
                contentType: "application/json",
                success: function(e) {
                    console.log(e.message);
                }
            });
        }
        if (skillname.localeCompare("skill2") == 0) {
            $.ajax({
                type: 'DELETE',
                url: 'http://localhost:8000/REST_API_ORIGAMI/api/delete.php?title='+ title,
                error: function(e) {
                    console.log(e);
                },
                dataType: "json",
                contentType: "application/json",
                success: function(e) {
                    console.log(e.message);

                    $("#skill_name").val("");
                    $("#course_title").val("");
                    $("#statusText").html(e.message);
                }
            });
            $.ajax({
                type: 'DELETE',
                url: 'http://localhost:8000/REST_API_USER_INFO/api/delete.php?course='+ title + '&skill=origami',
                error: function(e) {
                    console.log(e);
                },
                dataType: "json",
                contentType: "application/json",
                success: function(e) {
                    console.log(e.message);
                }
            });
        }
        if (skillname.localeCompare("skill3") == 0) {
            $.ajax({
                type: 'DELETE',
                url: 'http://localhost:8000/REST_API_SIGN_LNG/api/delete.php?title='+ title,
                error: function(e) {
                    console.log(e);
                },
                dataType: "json",
                contentType: "application/json",
                success: function(e) {
                    console.log(e.message);

                    $("#skill_name").val("");
                    $("#course_title").val("");
                    $("#statusText").html(e.message);
                }
            });
            $.ajax({
                type: 'DELETE',
                url: 'http://localhost:8000/REST_API_USER_INFO/api/delete.php?course='+ title + '&skill=sign_lng',
                error: function(e) {
                    console.log(e);
                },
                dataType: "json",
                contentType: "application/json",
                success: function(e) {
                    console.log(e.message);
                }
            });
        }
    });
});