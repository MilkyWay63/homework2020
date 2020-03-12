let time = prompt('What is time?');

if (time < 12) {
    alert('rytas');
} else if (time >= 12 && time <= 17) {
        alert('diena');
} else if (time >=18 && time <= 21) {
    alert('vakaras')
} else if (time >=22) {
    alert('naktis');
} else {
    alert('Klaida');
}