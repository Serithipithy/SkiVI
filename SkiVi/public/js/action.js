$(document).ready(function() {
    $("#submit").click(function() {
        var skillname = $("#skill_name").val();
        var title = $("#title").val();
        var link = $("#link").val();
        var text = $("#text").val();
        if (skillname.localeCompare("skill1") == 0) {
            $.post("http://localhost:8000/REST_API_FA/api/post.php", {
                    title: title,
                    link: link,
                    text: text
                },
                function($data) {
                    alert("Data:" + $data);
                });
        }
        if (skillname.localeCompare("skill2") == 0) {
            $.post("http://localhost:8000/REST_API_ORIGAMI/api/post.php", {
                    title: title,
                    link: link,
                    text: text
                },
                function($data) {
                    alert("Data:" + $data);
                });
        }
        if (skillname.localeCompare("skill3") == 0) {
            $.post("http://localhost:8000/REST_API_SIGN_LNG/api/post.php", {
                    title: title,
                    link: link,
                    text: text
                },
                function($data) {
                    alert("Data:" + $data);
                });
        }

    });
});