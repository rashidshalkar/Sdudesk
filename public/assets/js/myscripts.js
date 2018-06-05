function setColor() {
    var x = document.getElementById("news");
    var y = document.getElementById("circle");
    var z= document.getElementById('line1')
    x.style.color = '#66DDA2';
    y.style.backgroundColor = '#2E3D4C';
        y.style.animationDuration='0.7s';
    y.style.animationName='circle';
    z.style.backgroundColor= '#66DDA2';
}
function returnColor() {
    var x = document.getElementById("news");
    var y = document.getElementById("circle");
    var z= document.getElementById('line1')
    x.style.color = '#2E3D4C';
    y.style.animation='none';
    y.style.backgroundColor = '#F8F8F8';
    z.style.backgroundColor= '#2E3D4C';
}
function change(){
    var x = document.getElementById("romb");
    var y = document.getElementById("lostFound");
    var z= document.getElementById('line2');
    x.style.backgroundImage="url('images/rect.png')";
    x.style.animation='0.5s ';
    x.style.animationName='romb';
    y.style.animation='lost';
    y.style.animationDuration='0.5s';
    y.style.color = '#66DDA2';
    z.style.backgroundColor= '#66DDA2';
    z.style.animation='lost';
    z.style.animationDuration='0.5s';
}
function returnState(){
    var x = document.getElementById("romb");
    var y = document.getElementById("lostFound");
    var z= document.getElementById('line2');
    x.style.backgroundImage="none";
    x.style.animation='none';
    y.style.animation='none';
    z.style.animation='none';
    y.style.color = '#2E3D4C';
    z.style.backgroundColor= '#2E3D4C';

}
function changeTriangle(){
    var x = document.getElementById("triangle");
    var y = document.getElementById("market");
    var z= document.getElementById('line3');
    x.style.backgroundImage="url('images/triangle.png')";
    x.style.animation='1s normal';
    x.style.animationName='triangle';
    y.style.color = '#66DDA2';
    z.style.backgroundColor= '#66DDA2';
}
function returnTriangle(){
    var x = document.getElementById("triangle");
    var y = document.getElementById("market");
    var z= document.getElementById('line3');
    x.style.backgroundImage="none";
    x.style.animation='none';
    y.style.color = '#2E3D4C';
    z.style.backgroundColor= '#2E3D4C';
}