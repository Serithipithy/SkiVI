function myFunction(elem) {

    var skill_name = "first_aid";
    var course_title = elem.name;
    var content = course_title.split("~");
    var user_id = content[0];
    course_title = content[1];
    elem.style.display="none";

    var sendMessage = '{ "user_id":' + user_id + ', "skill": "' + skill_name + '", "course":"' + course_title + '" }';

    var obj = JSON.parse(JSON.stringify(sendMessage));

    $.ajax({
        type: 'POST',
        url: "http://localhost:8000/REST_API_USER_INFO/api/post.php",
        data: obj,
        error: function(e) {
            console.log(e);
        },
        dataType: "json",
        contentType: "application/json",
        success: function(e) {
            console.log(e.message);
        }
    });




};