function choosenSkill() {
    var select = document.getElementById("course_title");
    var length = select.options.length;
    for (i = length - 1; i > 0; i--) {
        select.options[i] = null;
    }
    var skillname = $("#skill_name").val();
    updateOpt(skillname);
}

function updateOpt(skill) {
    console.log(skill);
    if (skill.localeCompare("skill1") == 0) {
        $.ajax({
            url: "http://localhost:8000/REST_API_FA/api/get.php",
            type: 'GET',
            error: function(e) {
                console.log(e);
            },
            dataType: "json",
            contentType: "application/json",
            success: function(res) {
                var select = document.getElementById("course_title");
                //console.log(res.data[0]);
                var lenght = res.data.length;
                console.log(lenght);
                for (var i = 0; i < lenght; i++) {
                    console.log("in for");
                    var option = document.createElement("option");
                    option.value = res.data[i]['title'];
                    option.text = res.data[i]['title'];
                    console.log(option.text);
                    select.appendChild(option);
                }
            }
        });
    }
    if (skill.localeCompare("skill2") == 0) {
        $.ajax({
            url: "http://localhost:8000/REST_API_ORIGAMI/api/get.php",
            type: 'GET',
            error: function(e) {
                console.log(e);
            },
            dataType: "json",
            contentType: "application/json",
            success: function(res) {
                var select = document.getElementById("course_title");
                //console.log(res.data[0]);
                var lenght = res.data.length;
                console.log(lenght);
                for (var i = 0; i < lenght; i++) {
                    console.log("in for");
                    var option = document.createElement("option");
                    option.value = res.data[i]['title'];
                    option.text = res.data[i]['title'];
                    console.log(option.text);
                    select.appendChild(option);
                }
            }
        });
    }
    if (skill.localeCompare("skill3") == 0) {
        $.ajax({
            url: "http://localhost:8000/REST_API_SIGN_LNG/api/get.php",
            type: 'GET',
            error: function(e) {
                console.log(e);
            },
            dataType: "json",
            contentType: "application/json",
            success: function(res) {
                var select = document.getElementById("course_title");
                //console.log(res.data[0]);
                var lenght = res.data.length;
                console.log(lenght);
                for (var i = 0; i < lenght; i++) {
                    console.log("in for");
                    var option = document.createElement("option");
                    option.value = res.data[i]['title'];
                    option.text = res.data[i]['title'];
                    console.log(option.text);
                    select.appendChild(option);
                }
            }
        });
    }

}