document.getElementById ('slsquare').addEventListener('click', squareSelection);
document.getElementById ('sloval').addEventListener('click', ovalSelection);
document.getElementById ('sltriangle').addEventListener('click', triangleSelection);
document.getElementById ('slcircle').addEventListener('click', circleSelection);
document.getElementById ('sltrapezoid').addEventListener('click', trapezoidSelection);

function squareSelection() {
    document.getElementById('square').style.display = 'block';
    document.getElementById('oval').style.display = 'none';
    document.getElementById('triangle').style.display = 'none';
    document.getElementById('circle').style.display = 'none';
    document.getElementById('trapezoid').style.display = 'none';
    stopMove();
}
function ovalSelection() {
    document.getElementById('square').style.display = 'none';
    document.getElementById('oval').style.display = 'block';
    document.getElementById('triangle').style.display = 'none';
    document.getElementById('circle').style.display = 'none';
    document.getElementById('trapezoid').style.display = 'none'
    stopMove();

}
function triangleSelection() {
    document.getElementById('square').style.display = 'none';
    document.getElementById('oval').style.display = 'none';
    document.getElementById('triangle').style.display = 'block';
    document.getElementById('circle').style.display = 'none';
    document.getElementById('trapezoid').style.display = 'none';
    stopMove();
}
function circleSelection() {
    document.getElementById('square').style.display = 'none';
    document.getElementById('oval').style.display = 'none';
    document.getElementById('triangle').style.display = 'none';
    document.getElementById('circle').style.display = 'block';
    document.getElementById('trapezoid').style.display = 'none';
    stopMove();
}
function trapezoidSelection() {
    document.getElementById('square').style.display = 'none';
    document.getElementById('oval').style.display = 'none';
    document.getElementById('triangle').style.display = 'none';
    document.getElementById('circle').style.display = 'none';
    document.getElementById('trapezoid').style.display = 'block';
    stopMove();
}
document.getElementById ('startgo').addEventListener('click', startMove);
document.getElementById ('stopend').addEventListener('click', stopMove);

let element = document.getElementById('square');
let element1 = document.getElementById('oval');
let element2 = document.getElementById('circle');
let element3 = document.getElementById('trapezoid');
let element4 = document.getElementById('triangle');

function startMove () {
    element.classList.add("animate");
    element1.classList.add("animate");
    element2.classList.add("animate");
    element3.classList.add("animate");
    element4.classList.add("animate");
}
function stopMove () {
    element.classList.remove("animate");
    element1.classList.remove("animate");
    element2.classList.remove("animate");
    element3.classList.remove("animate");
    element4.classList.remove("animate");
}