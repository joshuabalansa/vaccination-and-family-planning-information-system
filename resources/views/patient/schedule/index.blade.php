<x-app-layout>
    <h2>Your Schedules</h2><br />

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                selectable: true,
                events: [{
                        title: 'Vaccination',
                        start: new Date()
                    },
                    {
                        title: 'Appointment',
                        start: new Date()
                    }
                ]
            });
            calendar.render();
        });
    </script>
    <div style="width: 50rem;" id='calendar'></div>
</x-app-layout>
