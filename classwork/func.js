function capitalizeFirstLetter(string, first) {
    return string.slice(0,first) + string.charAt(first).toUpperCase() + string.slice(first+1);
}
function isLetter(str) {
    return str.toLowerCase() !== str.toUpperCase();
}

function toTitleCase(str, d = '') {

    let words = str.split(d);

    for (let i in words) {
//let add_first = false;
        f = 0;

        for (j = 0; j < words[i].length; j++) {
            if (isLetter(words[i].charAt(j)) === true) {
//add_first = words[i].charAt(j);
                f = j;
                break;
            }
        }

        words[i] = capitalizeFirstLetter(words[i], f);

//if (add_first) {
// words[i] = add_first + words[i];
//}
    }

    return words.join(d);
}

let str = 'Lorem ipsum dolor sit amet,    consectetur adipisicing elit,\n\tsed do eiusmod';

let str_u = toTitleCase(str, ',');
console.log(str);
console.log(str_u);

//Parašykite funkciją, kuri grąžina skaičiaus kvadratą. Skaičius perduodamas kaip parametras.
function squareIt(number) {
    return Math.pow(number,2);
}
console.log(squareIt(5));

// Parašykite funkciją, kuri grąžina dviejų skaičių sumą. Skaičiai perduodami funkcijos parametrus.
function sumNumbers(number1, number2) {
    return number1+number2;

}
console.log(sumNumbers(10, 10));

// Parašykite funkciją, kuri iš antro parametro atima pirmą ir padalija iš trečio.
function calcNumbers(number1, number2, number3) {
    return (number2-number1)/number3;
}
console.log(calcNumbers(9, 18, 3));

// Parašykite funkciją, kuri priima kaip parametrą skaičių nuo 1 iki 7, o grąžina savaitės dieną lietuvių kalba.
function dayOfWeekAsString(dayIndex) {
    dayIndex=dayIndex-1;
    return ["Pirmadienis", "Antradienis", "Treciadienis", "Ketvirtadienis", "Penktadienis", "Sestadienis", "Sekmadienis"][dayIndex];
}
console.log(dayOfWeekAsString(1));
