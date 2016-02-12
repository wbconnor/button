
/*
 * Some more awesome sauce by Brent Connor
 * 20160204
 */

document.getElementById("button").addEventListener("click", btn_clicked);

function btn_clicked() {

    var button = document.getElementById("button_name").innerHTML;

    // location.protocol + location.host +

    var data_file = "/click/" + button,
        http_request = new XMLHttpRequest();

    console.log(data_file);

    try{
        // Opera 8.0+, Firefox, Chrome, Safari
        http_request = new XMLHttpRequest();
    }catch (e){
        // Internet Explorer Browsers
        try{
            http_request = new ActiveXObject("Msxml2.XMLHTTP");

        }catch (e) {

            try{
                http_request = new ActiveXObject("Microsoft.XMLHTTP");
            }catch (e){
                // Something went wrong
                alert("Your browser broke!");
                return false;
            }

        }
    }

    http_request.onreadystatechange = function(){

        if (http_request.readyState == 4  ){
            // Javascript function JSON.parse to parse JSON data
            var jsonObj = JSON.parse(http_request.responseText);

            var clicks = jsonObj.clicks;

            console.log('clicks = ' + clicks);

            // jsonObj variable now contains the data structure and can
            // be accessed as jsonObj.name and jsonObj.country.
            document.getElementById("clicks").innerHTML = clicks;
        }
    }

    http_request.open("GET", data_file, true);
    http_request.send();
}

