<div class="monthly-calendar">
    <div class="w-100 calendar-button text-center">
        <h1 id="monthName" class="text-center"></h1>
        <div class="pre-next-button justify-content-center">
            <button class="me-4 border-0 bg-white" id="prevMonth"><i class="fa fa-chevron-left fw-bold" style="color: #253c5c;"></i></button>
            <button class="ms-4 border-0 bg-white" id="nextMonth"><i class="fa fa-chevron-right" style="color: #253c5c;"></i></button>
        </div>
    </div>
    <table id="weekCalendar">
        <thead>
            <tr>
                <th>Sun</th>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
            </tr>
        </thead>
        <tbody>
            <tr id="weekDays">
                <a href="#" class="button-to-list text-decoration-none"></a>
            </tr>
        </tbody>
    </table>

    <script>
        const calendarEl = document.getElementById('weekCalendar');
        const date = new Date();
        let currentYear = date.getFullYear();
        let currentMonth = date.getMonth();

        let prevMonthBtn = document.getElementById('prevMonth');
        let nextMonthBtn = document.getElementById('nextMonth');

        function generateCalendar(year, month) {
            const monthNames = [
                'January', 'February', 'March', 'April', 'May', 'June',
                'July', 'August', 'September', 'October', 'November', 'December'
            ];
            const monthName = monthNames[month];

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

            const monthNameElement = document.getElementById('monthName');
            monthNameElement.textContent = monthName;

            calendarEl.innerHTML = calendarHtml;
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

        generateCalendar(currentYear, currentMonth);
    </script>
</div>




