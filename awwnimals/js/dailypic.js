var date = new Date();
var day = date.getDay();
var picurl;
switch (day)
{
    case 1: picurl = "http://i.imgur.com/AEyr2Bx.jpg";
        break;
    case 2: picurl = "http://i.imgur.com/hgBnYLn.jpg";
        break;
    case 3: picurl = "http://i.imgur.com/3BRyx9Y.jpg";
        break;
    case 4: picurl = "http://i.imgur.com/oW7FkJ0.png";
        break;
    case 5: picurl = "http://i.imgur.com/oW7FkJ0.png";
        break;
    case 6: picurl = "http://i.imgur.com/oW7FkJ0.png";
        break;
    default:picurl = "http://i.imgur.com/3NA1yyI.png";
        break;
}
var picture = document.createElement("IMG");
picture.setAttribute("src", picurl);
picture.setAttribute("width", "175");
picture.setAttribute("height", "175");
picture.setAttribute("alt", "Here's a cute animal");
var dailypicdiv = document.getElementById("dailypic");
dailypicdiv.appendChild(picture);