var date = new Date();
var day = date.getDay();
var picurl;
switch (day)
{
    case 1:
        picurl = "http://i.imgur.com/Ab0sfV9.jpg";
        break;
    case 2:
        picurl = "http://i.imgur.com/FajKcfN.jpg";
        break;
    case 3:
        picurl = "http://i.imgur.com/SysJ9MG.png";
        break;
    case 4:
        picurl = "http://i.imgur.com/lsOdV73.jpg";
        break;
    case 5:
        picurl = "http://i.imgur.com/3O6Ntil.jpg";
        break;
    case 6:
        picurl = "http://i.imgur.com/PYb9hWh.jpg";
        break;
    default:
        picurl = "http://i.imgur.com/dCXKhZn.png";
        break;
}
var picture = document.createElement("IMG");
picture.setAttribute("src", picurl);
picture.setAttribute("width", "200");
picture.setAttribute("height", "200");
picture.setAttribute("alt", "Here's a cute animal");
var dailypicdiv = document.getElementById("dailypic");
dailypicdiv.innerHTML += "<br> <br>";
dailypicdiv.appendChild(picture);