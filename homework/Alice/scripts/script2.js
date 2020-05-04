//1st assigment
// Words to display
let words1 = [
    "Krokodilas",
    "Šokoladas",
    "Melagis",
    "Dantis",
    "Miegas",
    "Ratas",
    "Robotas",
    "Daktaras",
    "Antis",
    "Kompotas",
    "Kambarys",
    "Lietus"
];

let _PREVIOUS_ITEM = null;

function randomArrElement(arr) {
    let item = null;

    for (let i = 0; i < arr.length; i++) {
        item = arr[Math.floor(Math.random() * arr.length)];
        if (_PREVIOUS_ITEM != item) {
            _PREVIOUS_ITEM = item;
            break;
        }
    }
    return item;
}
function resetValues(id){
    document.getElementById(id).value="";
}
document.addEventListener('DOMContentLoaded', function(event) {
    let rndvalue=randomArrElement(words1);
    document.getElementById('words1').value = rndvalue.slice(0,-3);
    document.getElementById('words2').value = rndvalue.slice(-3);
    resetValues('words3');
});

document.getElementById("test").addEventListener("click", compareValues);
document.getElementById("new").addEventListener("click", newValues);

function compareValues () {
    let value1 = document.getElementById("words1").value;
    let value2 = document.getElementById("words2").value;
    let value3=document.getElementById("words3").value;

    if (value2 === value3) {
        document.getElementById("succ").innerHTML = "Tu atspėjai, tai "+ value1+ value2+"!";
        document.getElementById("unsucc").innerHTML = "";
        resetValues('words3');
    } else {
        document.getElementById("unsucc").innerHTML = "Deja tai ne šis žodis! Bandyk dar kartą!";
        document.getElementById("succ").innerHTML = "";
    }
}
function newValues () {
    let rndvalue=randomArrElement(words1);
    document.getElementById('words1').value = rndvalue.slice(0,-3);
    document.getElementById('words2').value = rndvalue.slice(-3);
    resetValues('words3');
    document.getElementById("unsucc").innerHTML = "";
    document.getElementById("succ").innerHTML = "";
}
//2nd assigment
let asyl=["MA", "SA","DA","VA","RA","GA","LA","NA","FA"];
let osyl=["DO", "MO", "BO", "RO", "NO", "SO","LO", "GO"];
let isyl=["DI", "MI", "BI", "RI", "NI", "SI", "NI", "LI"];
let esyl=["ME", "SE", "DE", "VE", "RE", "GE", "LE", "NE", "FE"];
let usyl=["MU", "SU", "DU", "VU", "RU", "LU", "NU", "FU"];

let syllables=[asyl, osyl, isyl, esyl, usyl, usyl];



function inputFill () {
    let arr1=randomArrElement(syllables);
    let arr2=randomArrElement(syllables);
    let syl1=randomArrElement(arr1);
    let syl2=randomArrElement(arr1);
    let syl3=randomArrElement(arr1);
    let syl4=randomArrElement(arr2);
    document.getElementById('syllable2').value=syl4;
    let input=[syl1, syl2, syl3, syl4];
    return input;
}
function shuffle(a) {
    var j, x, i;
    for (i = a.length - 1; i > 0; i--) {
        j = Math.floor(Math.random() * (i + 1));
        x = a[i];
        a[i] = a[j];
        a[j] = x;
    }
    return a;
}
document.addEventListener('DOMContentLoaded', function(event) {
    let arr4=inputFill ();
    let arr5=shuffle(arr4);
    document.getElementById('syllable1').value =arr5[0]+", "+arr5[1]+", "+arr5[2]+", "+arr5[3];
   resetValues('syllable3');
});
document.getElementById("test1").addEventListener("click", compareValues1);
document.getElementById("new1").addEventListener("click", newValues1);

function compareValues1 () {
    let value2 = document.getElementById("syllable2").value;
    let value3=document.getElementById("syllable3").value;

    if (value2 === value3) {
        document.getElementById("succ1").innerHTML = "Tu atspėjai, tai "+value2+" skiemuo!";
        document.getElementById("unsucc1").innerHTML = "";
        resetValues('syllable3');
    } else {
        document.getElementById("unsucc1").innerHTML = "Deja tai ne šis skiemuo! Pabandyk dar kartą!";
        document.getElementById("succ1").innerHTML = "";
    }
}
function newValues1 () {
    let arr4=inputFill ();
    let arr5=shuffle(arr4);
    document.getElementById('syllable1').value =arr5[0]+", "+arr5[1]+", "+arr5[2]+", "+arr5[3];
    resetValues('syllable3');
    document.getElementById("unsucc1").innerHTML = "";
    document.getElementById("succ1").innerHTML = "";
}
//3rd assigment missing letter in the word


function mletter (arr) {
//Chooses the random word
    let chars=randomArrElement(arr);
//Splits the word by letters and makes and array
    let chararray= chars.split('');
//Chooses the random letter from the array made
    let cutletter=randomArrElement(chararray);
//Aplies the chosen letter value to hidden input.value
    document.getElementById('letters2').value = cutletter;
//Finds the index of randomly chosen letter in an array
    let index=chararray.indexOf(cutletter,0);
//Cuts out the chosen letter by index found and replaces with "_"
    chararray.splice(index, 1, '_');
//Joins letters back into a word
    let charrayl=chararray.join('');
    return charrayl;
}
document.addEventListener('DOMContentLoaded', function(event) {
    document.getElementById('letters1').value = mletter(words1);
    resetValues('letters3');

})
document.getElementById("test2").addEventListener("click", compareValues2);
document.getElementById("new2").addEventListener("click", newValues2);

function newValues2 () {
    resetValues('letters3');
    document.getElementById('letters1').value = mletter(words1);
    document.getElementById("succ2").innerHTML = "";
    document.getElementById("unsucc2").innerHTML = "";
}


function compareValues2 () {
    let value2 = document.getElementById("letters2").value;
    let value3=document.getElementById("letters3").value;

    if (value2 === value3) {
        document.getElementById("succ2").innerHTML = "Tu atspėjai, tai "+value2+" raidė!";
        document.getElementById("unsucc2").innerHTML = "";
        resetValues('letters3');
    } else {
        document.getElementById("unsucc2").innerHTML = "Deja tai ne ši raidė! Pabandyk dar kartą!";
        document.getElementById("succ2").innerHTML = "";
    }
}