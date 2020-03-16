function Hello() {
    alert ("Hello world!");
}
function upper()
{
    var uc = document.getElementById('input1').value;
    document.getElementById('input1').value = uc.toUpperCase();
}

function lower()
{
    var lc = document.getElementById('input1').value;
    document.getElementById('input1').value = lc.toLowerCase();
}
function fupperc () {
    var flc = document.getElementById('input1').value;
    var result = flc.charAt(0).toUpperCase() + flc.slice(1);
    document.getElementById('input1').value = result;
}
function flower () {
    var llc = document.getElementById('input1').value;
    var result1 = llc.charAt(0).toLowerCase() + llc.slice(1);
    document.getElementById('input1').value = result1;
}

function block() {
    document.getElementById("input3").disabled = true;
}
function unblock() {
    document.getElementById("input3").disabled = false;
}
let myImage = document.querySelector('img');

myImage.onmouseover = function() {
    let mySrc = myImage.getAttribute('src');
    if(mySrc === 'https://i.imgur.com/0DElr0H.jpg') {
        myImage.setAttribute ('src','https://i.imgur.com/PLDVxza.jpg');
    } else {
        myImage.setAttribute ('src','https://i.imgur.com/0DElr0H.jpg');
    }
}
let Regex_Email = new RegExp("(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|\"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\\\[\x01-\x09\x0b\x0c\x0e-\x7f])*\")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\\])");
let Regex_Phone = new RegExp("^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\\s\\./0-9]*$");

function CheckInputsF() {
    let Email_Input = document.getElementById("exampleInputEmail1").value;
    let Phone_Input = document.getElementById("examplePhoneNumber").value;

    let IsEmail = Regex_Email.test(Email_Input);
    let IsPhone = Regex_Phone.test(Phone_Input);

    if (!IsEmail){
        document.getElementById("checkEmail").classList.remove('d-none');
        document.getElementById("exampleInputEmail1").classList.add('border-danger');
    } else {
        document.getElementById("checkEmail").classList.add('d-none');
        document.getElementById("exampleInputEmail1").classList.remove('border-danger');
    }
    if (!IsPhone){
        document.getElementById("checkPhone").classList.remove('d-none');
        document.getElementById("examplePhoneNumber").classList.add('border-danger');
    } else {
        document.getElementById("checkPhone").classList.add('d-none');
        document.getElementById("examplePhoneNumber").classList.remove('border-danger');
    }
    if(IsEmail && IsPhone){alert("Duomenys teisingi.")}

}

function grabF(){
    document.getElementById("mod_text").style.cursor = 'grab';
}
function pointerF(){
    document.getElementById("mod_text").style.cursor = 'pointer';
}

function yellowF(){
    document.getElementById("mod_text").style.color = 'yellow';
}
function blueF(){
    document.getElementById("mod_text").style.color = 'blue';
}

function orangeF(){
    document.getElementById("mod_text").style.borderColor = 'orange';
    document.getElementById("mod_text").style.borderWidth = '3px';
}
function blackF(){
    document.getElementById("mod_text").style.borderColor = 'black';
    document.getElementById("mod_text").style.borderWidth = '3px';
}

function ResetF(){
    // document.getElementById("mod_text").style.cursor = 'default';
    document.getElementById("mod_text").style.removeProperty('cursor');
    document.getElementById("mod_text").style.removeProperty('color');
    document.getElementById("mod_text").style.removeProperty('border-color');
    document.getElementById("mod_text").style.removeProperty('border-width');
}

