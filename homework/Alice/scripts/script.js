//1st page assigment


// Words to display
let words = [
    "Krokodilas",
    "Šokoladas",
    "Mašina",
    "Dantis",
    "Miegas",
    "Lapė",
    "Ratas",
    "Robotas",
    "Mokykla",
    "Morka",
    "Daktaras"
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

document.addEventListener('DOMContentLoaded', function(event) {
    document.getElementById('words').value = randomArrElement(words);
});

document.getElementById("test").addEventListener("click", compareValues);
document.getElementById("new").addEventListener("click", newValues);

const increase = [80, 160, 240, 320, 400, 480, 560, 640, 720];

function resetValues(id){
    document.getElementById(id).value="";
}

function compareValues () {
    let value1 = document.getElementById("words").value;
    let value2 = document.getElementById("answer").value;

        if (value1 === value2) {
            document.getElementById("unsucc0").innerHTML = "";
            document.getElementById("image").style.height = increase.shift() + 'px';
            document.getElementById("succ0").innerHTML = "Tu atspėjai!";
            newValues ();


            if (increase.length === 0) {
                document.getElementById("inputs").style.display="none";
                document.getElementById("link").style.display="block";
            }
    } else {
            document.getElementById("unsucc0").innerHTML = "Deja neatspėjai. Bandyk dar!";
            document.getElementById("succ0").innerHTML = "";
        }
}

function newValues () {
    document.getElementById('words').value = randomArrElement(words);
    resetValues("answer");
}

