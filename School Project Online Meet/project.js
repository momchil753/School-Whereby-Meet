let accept_btn = document.getElementsByClassName('accept')[0];
let clear_btn = document.getElementsByClassName('clear')[0];
let teachers = document.getElementById('Teachers');
let main_table = document.getElementsByClassName('Tables')[0];

accept_btn.addEventListener('click', displayTimetable);

function displayTimetable() {
    let teacher_index = teachers.selectedIndex;
    let teacher_name = teachers.options[teacher_index].innerText;
    let teacher_firstname = teacher_name.split(' ')[0];

    let current_timetable = document.getElementsByClassName(teacher_firstname)[0];
    current_timetable.style.display = "table";

    clear_btn.addEventListener('click', () => {
        current_timetable.style.display = "none";
    })
}


