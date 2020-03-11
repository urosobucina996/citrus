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
            success: function (result) {
                    $("#fname").val("");
                    $("#femail").val("");
                    $("#subject").val("");
            },
            error: function () {
                console.log('Somethin is bad with request.');
            }
        });
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