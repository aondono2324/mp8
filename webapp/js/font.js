document.getElementById("petit").addEventListener("click", petit);
document.getElementById("mitja").addEventListener("click", mitja);
document.getElementById("gran").addEventListener("click", gran);

var midafont = 1.5;

function petit(){
    midafont = midafont - 0.5;
    document.getElementsByClassName("text").style.fontSize = midafont+"rem";
};

function mitja(){
    document.getElementsByClassName("text").style.fontSize = midafont+"rem";

};

function gran(){
    midafont = midafont + 0.5;
    document.getElementsByClassName("text").style.fontSize = midafont+"rem";

};
