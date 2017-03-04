// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

function clearSelections() {
    //Clear all existing selections
    var allRadio = document.getElementsByTagName("input");
    for (var i=0; i < allRadio.length; i++)
    {
        if (allRadio[i].type == "radio") allRadio[i].checked = "false";
    }

    //Reset button state
    var allLabel = document.getElementsByTagName("label");
    for (var c=0; c < allLabel.length; c++)
    {
        if (allLabel[c].className == "btn btn-primary active") allLabel[c].className = "btn btn-primary";
    }
}

function setStudent() {
    clearSelections();
    //Traffic - High
    document.getElementById('inputTrafHigh').checked = "true";
    document.getElementById('labelTrafHigh').className += " active";
    //Housing - Low
    document.getElementById('inputHouseLow').checked = "true";
    document.getElementById('labelHouseLow').className += " active";
    //Walkability - High
    document.getElementById('inputWalkHigh').checked = "true";
    document.getElementById('labelWalkHigh').className += " active";
    //NV Crime - High
    document.getElementById('inputNVCHigh').checked = "true";
    document.getElementById('labelNVCHigh').className += " active";
    //Rent - Low
    document.getElementById('inputRentLow').checked = "true";
    document.getElementById('labelRentLow').className += " active";
    //V Crime - High
    document.getElementById('inputVCHigh').checked = "true";
    document.getElementById('labelVCHigh').className += " active";
}

/*TABLEAU: LOAD VIZZES*/

//Traffic


//Housing

//Walk Score

//Nonviolent Crime

//Rent

//Violent Crime
