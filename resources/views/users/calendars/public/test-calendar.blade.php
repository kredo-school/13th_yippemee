{{-- <!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>test calendar</title>
  <style>
    /* CSSスタイルはこちらで設定 */
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        border: 1px solid #dddddd;
        text-align: center;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }
  </style>
</head>
<body>
<button id="prevMonth">前の月</button>
<button id="nextMonth">次の月</button>
<div id="calendar">
</div>
<table id="weekCalendar">
    <thead>
        <tr>
            <th>日</th>
            <th>月</th>
            <th>火</th>
            <th>水</th>
            <th>木</th>
            <th>金</th>
            <th>土</th>
        </tr>
    </thead>
    <tbody>
        <tr id="weekDays"></tr>
    </tbody>
</table>




<script>
    const calendarEl = document.getElementById('calendar');
    const date = new Date();
    let currentYear = date.getFullYear();
    let currentMonth = date.getMonth();

    let prevMonthBtn = document.getElementById('prevMonth');
    let nextMonthBtn = document.getElementById('nextMonth');

    function generateCalendar(year, month) {
        const firstDayOfMonth = new Date(year, month, 1);
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        const startingDayOfWeek = firstDayOfMonth.getDay();

        let calendarHtml = '<table><thead><tr>';
        for (let i = 0; i < 7; i++) {
            calendarHtml += `<th>${['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'][i]}</th>`;
        }
        calendarHtml += '</tr></thead><tbody><tr>';

        for (let i = 1; i <= daysInMonth + startingDayOfWeek; i++) {
            if (i > startingDayOfWeek) {
                const day = i - startingDayOfWeek;
                calendarHtml += `<td>${day}</td>`;
            } else {
                calendarHtml += '<td></td>';
            }

            if (i % 7 === 0) {
                calendarHtml += '</tr>';
                if (i < daysInMonth + startingDayOfWeek) {
                    calendarHtml += '<tr>';
                }
            }
        }
        calendarHtml += '</tbody></table>';
        calendarEl.innerHTML = calendarHtml;

        events.forEach(event => {
            if (event.date.getFullYear() === year && event.date.getMonth() === month) {
            const dayCell = calendarEl.querySelector(`td[data-date="${event.date.getDate()}"]`);
            dayCell.innerHTML += `<div>${event.title}</div>`;
            }
        });
    }

    prevMonthBtn.addEventListener('click', () => {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        generateCalendar(currentYear, currentMonth);
    });

    nextMonthBtn.addEventListener('click', () => {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        generateCalendar(currentYear, currentMonth);
    });

    const events = [
    {
        date: new Date(currentYear, currentMonth, 5),
        title: 'イベント1',
    },
    {
        date: new Date(currentYear, currentMonth, 15),
        title: 'イベント2',
    },
    ];

</script>

</body>
</html> --}}

