const maleBtn = document.getElementById('maleBtn');
const femaleBtn = document.getElementById('femaleBtn');
const students = document.querySelectorAll('.student');

maleBtn.addEventListener('click', function() {
    students.forEach(function(s) {
        const gender = s.getAttribute('data-gender');
        if (gender === 'male') {
            s.style.backgroundColor = 'skyblue'; // голубой для мальчиков
        } else {
            s.style.backgroundColor = 'lightgray'; // к исходному цвету
        }
    });
});


femaleBtn.addEventListener('click', function() {
    students.forEach(function(s) {
        const gender = s.getAttribute('data-gender');
        if (gender === 'female') {
            s.style.backgroundColor = 'pink'; // розовый для девочек
        } else {
            s.style.backgroundColor = 'lightgray';
        }
    });
});