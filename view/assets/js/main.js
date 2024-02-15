(function () {

    $("#description").on("click", function () {
        if ($("#description_text").css("height") == '0px') {
            $("#description_text").css("height", 'auto')
            $("#description_text").css("overflow", 'initial')
        } else {
            $("#description_text").css("height", '0px')
            $("#description_text").css("overflow", 'hidden')
        }
    });
    $("#especification").on("click", function () {
        if ($("#especification_text").css("height") == '0px') {
            $("#especification_text").css("height", 'auto')
            $("#especification_text").css("overflow", 'initial')
        } else {
            $("#especification_text").css("height", '0px')
            $("#especification_text").css("overflow", 'hidden')
        }
    });

})();