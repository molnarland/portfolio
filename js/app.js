// const result = Number(prompt('?'));

// alert(isNaN(result) ? 'pls számot írj' : result + 50);

//string, bool, number, null, undefined, array, object, NaN


const random = Math.floor((Math.random() * 100) + 1);
const numbers = [random, 5, 6, 7, 123];
let count = 0;

for (let i = 0; i < numbers.length; i++)
{
    count += numbers[i];
}

document.body.append(count);

count = 0;
numbers.forEach(function (number) {
    count += number;
});

document.getElementById('count-id').innerHTML
    = '<b>' + count + '</b>';

