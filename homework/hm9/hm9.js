//Sukurkite masyvą a, b, c. Parodykite masyvą naudodami console.log funkciją.
// Naudodamiesi ankstesnės užduoties masyvu, parodykite pirmojo, antrojo ir trečiojo elementų turinį.
let letters=["a", "b", "c"];
console.log (letters);
console.log(letters[0]);
console.log(letters[1]);
console.log(letters[2]);
// Sukurkite masyvą a, b, c, d ir naudodami jį parodykite eilutė a + b, c + d.
let letters1=["a", "b", "c", "d"];
console.log(letters1[0]+'+'+letters1[1]+', '+letters1[2]+'+'+ letters1[3]);
// Sukurkite masyvą su elementais 2, 5, 3, 9. Pirmąjį masyvo elementą padauginkite iš antrojo, o trečiąjį elementą iš ketvirtojo. Sudėkite rezultatus, priskirkite kintamąjam. Parodykite šio kintamojo reikšmę.
let numbers=[2, 5, 3, 9];
let calculation1=(numbers[0]*numbers[1])+(numbers[2]*numbers[3]);
console.log(calculation1);
// Objektai (asociaciniai masyvai)
// Sukurkite objektą a = 1, b = 2, c = 3. Parodykite elemento c reikšmę dviem būdais: per skliaustelius ir kaip objekto savybę.
let object1= {
    a:1,
    b:2,
    c:3
}
console.log(object1['c']);
console.log(object1.c);
// Sukurkite objektą su savaitės dienomis. Raktai jame turėtų būti dienų skaičiai nuo savaitės pradžios (pirmadienis - pirmasis ir t.t.). Parodykite dabartinę savaitės dieną.
let weekdays= {
    1:"Monday",
    2:"Tuesday",
    3:"Wednesday",
    4:"Thursday",
    5:"Friday",
    6:"Saturday",
    7:"Sunday"
}
console.log(weekdays['4']);
// Sukurkite kintamjį day kuriame saugomas savaitės dienos numeris. Atspausdinkite savaitės dieną naudojant sita kintamajį.
let day = new Date();
let weekday = new Array(7);
weekday[0] = "Sunday";
weekday[1] = "Monday";
weekday[2] = "Tuesday";
weekday[3] = "Wednesday";
weekday[4] = "Thursday";
weekday[5] = "Friday";
weekday[6] = "Saturday";

let n = weekday[day.getDay()];
console.log(n);
// Daugialypiai masyvai
// Yra pateiktas masyvas [[1, 2, 3], [4, 5, 6], [7,8,9]]. Parodykite skaičių 4 iš šio masyvo.
let array1=[[1, 2, 3], [4, 5, 6], [7,8,9]];
console.log(array1[1][0]);
// Duotas objektas {js: ['jQuery', 'Angular'], php: 'hello', css: 'world'}. Parodykite žodį jQuery.
object2={js: ['jQuery', 'Angular'], php: 'hello', css: 'world'};
console.log(object2.js[0]);
// Sukurkite dvimatį masyvą. Pirmieji du raktai yra lt ir en. Raktai turi savaitės dienų vardų masyvus lietuviškai ir angliškai. Naudodamiesi šiuo masyvu, pirmadienį parodykite lietuvių kalba, o trečiadienį - anglų kalba.
let en;
let lt;
let week={en:["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"], lt:["Pirmadienis", "Antradienis", "Treciadienis", "Ketvirtadienis", "Penktadienis", "Sestadienis", "Sekmadienis"]};
console.log(week.lt[0]);
console.log(week.en[3]);
// Sukurkite kintamjį lang (reikšmės lt arba en) ir naudojant lang ir day parodykite dieną (edited)
var lang=[en,lt];
let m = week.en[day.getDay()];
console.log(m);

//Masyvu funkcijos
// Duoti du masyvai: 1, 2, 3 ir 4, 5, 6. Sujunkite juos.
let array3=[1, 2, 3];
let array4=[4, 5, 6];
let array5= array3.concat(array4);
console.log(array5[5]);
// Duotas masyvas 1, 2, 3. Iš jo padarykite masyvą 3, 2, 1.
array3.reverse();
console.log(array3[0]);
// Duotas masyvas 1, 2, 3. Pridėkite elementus 4, 5, 6 į galą ir -1, -2, -3 į priekį.
let array6=[1, 2, 3];
array6.push(4, 5, 6);
array6.unshift(-1, -2, -3);
console.log(array6[0]);
// Duotas masyvas html, css, js. Parodykite pirmąjį ir paskutinį elementus.
let array7=['html', 'css', 'js'];
console.log(array7[0]+', '+ array7[2]);
// Duotas masyvas 3, 4, 1, 2, 7. Surūšiuokite jį.
let array8=[3, 4, 1, 2, 7];
array8.sort();
// Duotas masyvas 1, 2, 3, 4, 5. Konvertuokite masyvą į 1, 2, 3.
let array9=[1, 2, 3, 4, 5];
array9.splice(3,2);
console.log(array9);
// Duotas masyvas [1, 2, 3, 4, 5]. Konvertuokite masyvą į [1, 4, 5].
let array10=[1, 2, 3, 4, 5];
array10.splice(1, 2);
console.log(array10);
// For ir While
// Atspausdinkite skaičių stulpelį nuo 1 iki 100.
var points = new Array(100);
for (var i = 0; i < 100; i++) {
    points[i] = i + 1;
}
for (var i = 0; i < points.length; i++) {
    console.log(points[i]);
}
// Atspausdinkite skaičių stulpelį nuo 11 iki 33.
var points1 = new Array(33);
for (var i = 0; i < 33; i++) {
    points1[i] = i + 1;
}
for (var i = 0; i < points1.length; i++) {
    console.log(points1[i]);
}
// Atspausdinkite stulpelį su lyginiais skaičiais nuo 0 iki 100.
for (var i = 2; i < 100; i += 2) {
    console.log(i)
}
//Naudodami ciklą parodykite sumą nuo 1 iki 100.
var nums=new Array(100);
var total=0;
for (var i = 0; i < 100; i++) {
    total += i;
}
console.log(total);
//Duotas masyvas su elementais [1, 2, 3, 4, 5]. Parodykite visus masyvo elementus ekrane.
array11=[1, 2, 3, 4, 5];
for (i = 0; i < array11.length; i++) {
    document.write(i +1+", ");
}
//Duotas masyvas su elementais [1, 2, 3, 4, 5]. Parodykite šio masyvo elementų sumą.
var total1=0;
for (var i = 0; i < array11.length; i++) {
    total1 += +array11[1];
}
console.log(total1);
//Duotas objektas green: žalia, red: raudona, blue: mėlyna. Parodykite šio objekto raktus ir elementus.
const array12={
    green: 'žalia',
    red: 'raudona',
    blue: 'mėlyna'
}
for (const property in array12) {
    console.log(`${property}: ${array12[property]}`);
}

// Duotas objektas su raktais Mantas, Paulius, Mindaugas su reikšmėm 200, 300, 300. Parodykite eilutes tokiu formatu: Mantas - 200 EU atlyginimas.
const array13={
    Mantas: 200,
    Paulius: 300,
    Mindaugas: 300
}
for (const property in array13) {
    console.log(`${property}-atlyginimas ${array13[property]}`)
}
// Duotas masyvas su elementais 2, 5, 9, 15, 0, 4. Naudodami for ir if parodykite masyvo elementus kurie yra daugiau nei 3, bet mažiau nei 10
const array14=[2, 5, 9, 15, 0, 4];
for (const element of array14) {
    if(element<10 && element>3) {
        console.log(element);
    }
}
// Duotas masyvas su skaičiais. Skaičiai gali būti teigiami ir neigiami. Raskite teigiamų masyvo skaičių sumą.
let array15=[-1, 3, -5, 6, -7];
let sum1=0;
for(i=0; i<array15.length; i++) {
    if(i>0) {
        sum1 +=i;
    }
}
console.log(sum1-1);

// Duotas masyvas su elementais [1, 2, 3, 4, 5]. Parodykite visus šio masyvo elementus pasinaudoję ciklais for, while
let f=0;
while (array11 [f]){
    console.log(array11[f]);
    f++;
}
// Duotas masyvas su elementais [2, 3, 4, 5]. Parodykite šio masyvo elementų produktą (daugyba), naudokite for ciklą.
let array16=[2, 3, 4, 5];
let product=1;
for (let g=0; g<array16.length; g++) {
    product *=array16[g];
}
console.log(product);
// Duotas objektas su raktais Vilnius, Riga, Talinas ir reikšmėm Lietuva, Latvija, Estija. Parodykite eilutes tokiu formatu: Vilnius yra Lietuva naudodami for-in ciklą;
const array17={
    Vilnius: 'Lietuva',
    Ryga: 'Latvija',
    Talinas: 'Estija'
}
for (const property in array17) {
    console.log(`${property} yra ${array17[property]}`)
}
