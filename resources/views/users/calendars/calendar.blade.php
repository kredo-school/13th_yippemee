<div class="monthly-calendar">
    <div class="w-100 calendar-button text-center">
        <div class="currentMonthYear">
            <h1 id="monthName" class="text-center"></h1>
            <h1 id="yearName" class="text-center"></h1>
        </div>
        <div class="prev-next-button justify-content-center">
            <button class="me-4 border-0 bg-white" id="prevMonth"><i class="fa fa-chevron-left fw-bold"
                    style="color: #253c5c;"></i></button>
            <button class="ms-4 border-0 bg-white" id="nextMonth"><i class="fa fa-chevron-right"
                    style="color: #253c5c;"></i></button>
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
                <a href="#" id="selectedDate" class="button-to-list text-decoration-none"></a>
            </tr>
        </tbody>
    </table>

    <script>
        const calendarEl = document.getElementById('weekCalendar');
        // get date,year,and month
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
                // if (i > startingDayOfWeek) {
                //     const day = i - startingDayOfWeek;
                //     calendarHtml += `<td>${day}</td>`;
                // } else {
                //     calendarHtml += '<td></td>';
                // }
                // 1111
                if (i > startingDayOfWeek) {
                    const day = i - startingDayOfWeek;

                    // Add a click event to each day to handle date selection
                    calendarHtml += `<td><a href="#" class="selectable-date text-decoration-none" style="color:#253c5c;" data-date="${year}-${month + 1}-${day}">${day}</a></td>`;
                } else {
                    calendarHtml += '<td></td>';
                }
                // 11111

                if (i % 7 === 0) {
                    calendarHtml += '</tr>';
                    if (i < daysInMonth + startingDayOfWeek) {
                        calendarHtml += '<tr>';
                    }
                }


                if (i === daysInMonth + startingDayOfWeek && i % 7 !== 0) {
                    const remainingCells = 7 - (i % 7);
                    for (let j = 0; j < remainingCells; j++) {
                        calendarHtml += '<td></td>';
                    }
                    calendarHtml += '</tr>';
                }
            }
            calendarHtml += '</tbody></table>';

            // To dynamically generate a calendar on the page,
            // allowing the user to navigate to the previous or next month.
            const monthNameElement = document.getElementById('monthName');
            monthNameElement.textContent = monthName;
            calendarEl.innerHTML = calendarHtml;

            // year
            const yearNameElement = document.getElementById('yearName');
            yearNameElement.textContent = `${currentYear}`;

            //add click event to the anchor 1111
            const selectableDates = document.querySelectorAll('.selectable-date');
            selectableDates.forEach((dateElement) => {
                dateElement.addEventListener('click', handleDateSelection);
            });
            //1111

        }
        function handleDateSelection(event) {
            event.preventDefault();
            const selectedDate = event.target.dataset.date;
            const formattedDate = formatDate(selectedDate);
            // Get the current page URL or use a data attribute on the anchor elements to indicate the page type
            const currentPage = window.location.pathname;


            let targetUrl;
            if (currentPage.includes('/private/calendar')) { //ADD ID later
                targetUrl = `/private/calendar/${formattedDate}/show/{group_id}`;
            } else {
                targetUrl = `/plan/public/${formattedDate}/show`;
            }

            window.location.href = targetUrl;
        }

        function formatDate(selectedDate) {
            const dateObj = new Date(selectedDate);
            const year = dateObj.getFullYear();
            const month = (dateObj.getMonth() + 1).toString().padStart(2, '0');
            const day = dateObj.getDate().toString().padStart(2, '0');
            return `${year}${month}${day}`;
        }

        // by click these button, display different month's calendar
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
