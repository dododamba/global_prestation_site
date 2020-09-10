let daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', "Thursday", "Friday", "Saturday", "Sunday"];

function displayDate(date) {
    let current_datetime = new Date(date);
    month = (current_datetime.getMonth() + 1) > 9 ? (current_datetime.getMonth() +1 ) : "0" + (current_datetime.getMonth() +1) ;
    day = current_datetime.getDate() > 9 ? current_datetime.getDate() : "0" + current_datetime.getDate() ;
    return day + "." + month + "." + current_datetime.getFullYear()
}

function prettyTime(time) {
    var times = time.split(':', 3);
    return times[0] + ':' + times[1];
}

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}

function getChevron(value, absence) {

    if ((value === '-') || parseFloat(value) == 0) {
        return '<i class="mdi mdi-minus ml-1 text-warning"></i>'
    } else {
        if (parseFloat(value) < 0) {
            return absence ? '<i class="mdi mdi-chevron-up ml-1 text-success"></i>' : '<i class="mdi mdi-chevron-down ml-1 text-danger"></i>';
        } else {
            return absence ? '<i class="mdi mdi-chevron-down ml-1 text-danger"></i>' : '<i class="mdi mdi-chevron-up ml-1 text-success"></i>';
        }
    }
}


function getWeekConstaintDate(date) {
    let week = []

    for (let i = 1; i <= 7; i++) {
        let first = date.getDate() - date.getDay() + i
        let day = new Date(date.setDate(first)).toISOString().slice(0, 10)
        week.push(day)
    }
    return week;
}

function generatePassedWeeks(numberOfWeek) {
    weeks = [] ;
    let jour = new Date() ;

    for (let i = 0 ; i <= numberOfWeek ; i ++) {
        weeks[i] = getWeekConstaintDate(new Date(jour));
        jour.setDate(jour.getDate() - 7 ) ; // a week ago
    }
    return weeks;
}

function getDayOfNumber(number) {
    return daysOfWeek[number];
}