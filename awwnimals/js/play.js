/**
 * Created by Harold on 12/6/2016.
 */

var area = document.getElementById("area");

var animal =  $('input[name="favAnimal"]:checked').val();

var play = document.getElementById("playButton");
var feed = document.getElementById("feedButton");
var clean = document.getElementById("cleanButton");

play.onclick = function() {
    if (animal == "dog")
    {
        area.innerHTML = "<img src = 'images/dogs/pinecone.jpg' width='300' height='168' >";
    }
};
