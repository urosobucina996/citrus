function submitForm() {
    var name = document.getElementById("fname").value;
    var email = document.getElementById("femail").value;
    var subject = document.getElementById("subject").value;
    var today = new Date();
    var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    if(name != '' && email != '' && subject != ''){
        $.ajax({
            url: "services/ajax-services.php",
            method:"POST",
            data: {function:'comment',name: name, email: email,subject:subject,date:date+' '+time},   
            success: function (response) {
                    if(response == "Ok"){
                        $("#fname").val("");
                        $("#femail").val("");
                        $("#subject").val("");
                        $("#fname").css("border-color", "green");
                        $("#femail").css("border-color", "green");
                        $("#subject").css("border-color", "green");
                    }else{
                        $("#fname").css("border-color", "red");
                        $("#femail").css("border-color", "red");
                        $("#subject").css("border-color", "red"); 
                    }
            },
            error: function() {
                alert("Error!");
            }
        });
    }else{
        $("#fname").css("border-color", "red");
        $("#femail").css("border-color", "red");
        $("#subject").css("border-color", "red");
    }
}

function aproveComment(id) {
        $.ajax({
            url: "services/ajax-services.php",
            method:"POST",
            data: {function:'approve',id: id},   
            success: function (result) {
                    location.reload();
            },
            error: function () {
                console.log('Somethin is bad with request.');
            }
        });    
}