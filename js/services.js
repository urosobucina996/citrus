function submitForm() {
    var name = document.getElementById("fname").value;
    var email = document.getElementById("femail").value;
    var subject = document.getElementById("subject").value;
    if(name != '' && email != '' && subject != ''){
        $.ajax({
            url: "services/ajax-services.php",
            method:"POST",
            data: {name: name, email: email,subject:subject},   
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