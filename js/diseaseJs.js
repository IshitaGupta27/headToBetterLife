$(document).ready(function () {

    var cutCount = 2;

    $("#description p").each(function (i) {
        i++;
        if (i == cutCount) {
            $(this).append(' <a href="javascript:void(1)" onclick="$(\'#description p\').show(); $(this).hide()"><span style = "color : brown;">...Read more</span></b>')
        }
        if (i > cutCount) {
            $(this).hide();
        }
    });

    var cutCount2 = 2;
    $("#helping-someone-with-disorder p").each(function (i) {
        i++;
        if (i == cutCount) {
            $(this).append(' <a href="javascript:void(1)" onclick="$(\'#helping-someone-with-disorder p\').show(); $(this).hide()"><span style = "color : brown;">...Read more</span></b>')
        }
        if (i > cutCount) {
            $(this).hide();
        }
    });

});


