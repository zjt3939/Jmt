function addLoadEvent(func) {
    var oldonload = window.onload;
    if (typeof window.onload != 'function') {
        window.onload = func;
    } else {
        window.onload = function () {
            oldonload();
            func();
        }
    }
}

function moveElement(elementID, final_x, final_y, interval) {
    var elem = $(elementID);
    if (!elem.position().left) {

        elem.position().left = "0px";
    }
    if (!elem.position().top) {
        elem.position().top = "0px";
    }
    var xpos = parseInt(elem.position().left);
    var ypos = parseInt(elem.position().top);
    if (xpos == final_x && ypos == final_y) {
        return true;
    }
    if (xpos < final_x) {
        var dist = Math.ceil((final_x - xpos) / 10);
        xpos = xpos + dist;
    }
    if (xpos > final_x) {
        var dist = Math.ceil((xpos - final_x) / 10);
        xpos = xpos - dist;
    }
    if (ypos < final_y) {
        var dist = Math.ceil((final_y - ypos) / 10);
        ypos = ypos + dist;
    }
    if (ypos > final_y) {
        var dist = Math.ceil((ypos - final_y) / 10);
        ypos = ypos - dist;
    }
    elem.position().left = xpos + "px";
    elem.position().top = ypos + "px";
    var repeat = "moveElement('" + elementID + "'," + final_x + "," + final_y + "," + interval + ")";
    elem.animate({ top: final_y }, interval);
}

function classNormal(iFocusBtnID, iFocusTxID) {
    var iFocusBtns = $(iFocusBtnID).find('li');
    var iFocusTxs = $(iFocusTxID).find('li');
    for (var i = 0; i < iFocusBtns.length; i++) {
        iFocusBtns[i].className = 'normal';
        iFocusTxs[i].className = 'normal';
    }
}

function classCurrent(iFocusBtnID, iFocusTxID, n) {
    var iFocusBtns = $(iFocusBtnID).find('li');
    var iFocusTxs = $(iFocusTxID).find('li');
    iFocusBtns[n].className = 'current';
    iFocusTxs[n].className = 'current';
}

function iFocusChange() {
    if (!$('#ifocus2')) return false;
    $('#ifocus2').onmouseover = function () { atuokey = true };
    $('#ifocus2').onmouseout = function () { atuokey = false };
    var iFocusBtns = $('#ifocus_btn2').find('li');
    var listLength = iFocusBtns.length;
    iFocusBtns[0].onmouseover = function () {
        moveElement('#ifocus_piclist2', 0, 0, 5);
        classNormal('#ifocus_btn2', '#ifocus_tx2');
        classCurrent('#ifocus_btn2', '#ifocus_tx2', 0);
    }
    if (listLength >= 2) {
        iFocusBtns[1].onmouseover = function () {
            moveElement('#ifocus_piclist2', 0, -400, 5);
            classNormal('#ifocus_btn2', '#ifocus_tx2');
            classCurrent('#ifocus_btn2', '#ifocus_tx2', 1);
        }
    }
    if (listLength >= 3) {
        iFocusBtns[2].onmouseover = function () {
            moveElement('#ifocus_piclist2', 0, -800, 5);
            classNormal('#ifocus_btn2', '#ifocus_tx2');
            classCurrent('#ifocus_btn2', '#ifocus_tx2', 2);
        }
    }
    if (listLength >= 4) {
        iFocusBtns[3].onmouseover = function () {
            moveElement('#ifocus_piclist2', 0, -1200, 5);
            classNormal('#ifocus_btn2', '#ifocus_tx2');
            classCurrent('#ifocus_btn2', '#ifocus_tx2', 3);
        }
    }
    if (listLength >= 4) {
        iFocusBtns[4].onmouseover = function () {
            moveElement('#ifocus_piclist2', 0, -1600, 5);
            classNormal('#ifocus_btn2', '#ifocus_tx2');
            classCurrent('#ifocus_btn2', '#ifocus_tx2', 4);
        }
    }
}

setInterval('autoiFocus()', 5000);
var atuokey = false;
function autoiFocus() {
    if (!$('#ifocus2')) return false;
    if (atuokey) return false;
    var focusBtnList = $('#ifocus_btn2').find('li');
    var listLength = focusBtnList.length;
    for (var i = 0; i < listLength; i++) {
        if (focusBtnList[i].className == 'current') var currentNum = i;
    }
    if (currentNum == 0 && listLength != 1) {
        moveElement('#ifocus_piclist2', 0, -400, 5);
        classNormal('#ifocus_btn2', '#ifocus_tx2');
        classCurrent('#ifocus_btn2', '#ifocus_tx2', 1);
    }
    if (currentNum == 1 && listLength != 2) {
        moveElement('#ifocus_piclist2', 0, -800, 5);
        classNormal('#ifocus_btn2', '#ifocus_tx2');
        classCurrent('#ifocus_btn2', '#ifocus_tx2', 2);
    }
    if (currentNum == 2 && listLength != 3) {
        moveElement('#ifocus_piclist2', 0, -1200, 5);
        classNormal('#ifocus_btn2', '#ifocus_tx2');
        classCurrent('#ifocus_btn2', '#ifocus_tx2', 3);
    }
    if (currentNum == 3 && listLength != 4) {
        moveElement('#ifocus_piclist2', 0, -1600, 5);
        classNormal('#ifocus_btn2', '#ifocus_tx2');
        classCurrent('#ifocus_btn2', '#ifocus_tx2', 4);
    }
    if (currentNum == 4) {
        moveElement('#ifocus_piclist2', 0, 0, 5);
        classNormal('#ifocus_btn2', '#ifocus_tx2');
        classCurrent('#ifocus_btn2', '#ifocus_tx2', 0);
    }
    if (currentNum == 1 && listLength == 2) {
        moveElement('#ifocus_piclist2', 0, 0, 5);
        classNormal('#ifocus_btn2', '#ifocus_tx2');
        classCurrent('#ifocus_btn2', '#ifocus_tx2', 0);
    }
    if (currentNum == 2 && listLength == 3) {
        moveElement('#ifocus_piclist2', 0, 0, 5);
        classNormal('#ifocus_btn2', '#ifocus_tx2');
        classCurrent('#ifocus_btn2', '#ifocus_tx2', 0);
    }
    if (currentNum == 3 && listLength == 4) {
        moveElement('#ifocus_piclist2', 0, 0, 5);
        classNormal('#ifocus_btn2', '#ifocus_tx2');
        classCurrent('#ifocus_btn2', '#ifocus_tx2', 0);
    }
}
addLoadEvent(iFocusChange);