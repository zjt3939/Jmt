$(function () {
 
    var pathname = window.location.pathname;
    if (pathname.indexOf("activity_") != -1) {
        $("#aactivitie").addClass("On");
    }
    else if (pathname=="/") {
        $("#aindex").addClass("On");
    }
    //else if (pathname.indexOf("news_") != -1) {
    //    $("#anews").addClass("On");
    //}
    else if (pathname.indexOf("destination_") != -1 || pathname.indexOf("photos_") != -1 || pathname == "/ViliagePhotos.aspx") {
        $("#adestination").addClass("On");
    }
    else if (pathname.indexOf("strategy_") != -1) {
        $("#astrategy").addClass("On");
    }
    else if (pathname.indexOf("image_") != -1) {
        $("#aimage").addClass("On");
    }
    else if (pathname.indexOf("routes_") != -1) {
        $("#aroutes").addClass("On");
    }
    else if (pathname.indexOf("poverty_") != -1 || pathname.indexOf("newslist_1") != -1 || pathname.indexOf("newslist_2") != -1) {
        $("#apoverty").addClass("On");
    }
    else {
        $("#menu").find('a').each(function () {
            if ($(this).attr("href") == pathname) {
                $(this).addClass("On");
            }
        });
    }

})