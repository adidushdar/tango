(function newProjectModule() {

    $(document).ready(function() {
        var projectNameField = $("[name='projectName']");
        projectNameField.on("blur", function(event) {
            var event = event || window.event;
            var projectNameJsonObj = {};
            projectNameJsonObj[event.target.name] = event.target.value;
            $.ajax({
                    method: "POST",
                    url: "/server/newProjectForm/validation.php",
                    data: projectNameJsonObj,
                    dataType: "json",
                    contentType: 'application/json'
                })
                .done(function(msg) {
                    alert("Data Saved: " + msg);
                });
        });
    });

})();