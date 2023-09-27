@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">スケジュール</div>
            <section>
                <p>最終アクセス日時:<span id="time"></span></p>
            </section>
            <div class="card-body">
                <div id="calendar"></div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <style>
        .fc-col-header-cell-cushion,
        .fc-daygrid-day-number {
            color: #333;
            text-decoration: none;
        }
        .fc-col-header-cell.fc-day-sat {
            background-color: #cce3f6;
        }
        .fc-col-header-cell.fc-day-sun {
            background-color: #f4d0df;
        }
    </style>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
    <script>
        'use strict';
        
        const now = new Date();
        const year = now.getFullYear();
        const month = now.getMonth();
        const date = now.getDate();
        const hour = now.getHours();
        const min = now.getMinutes();
        
        const output = `${year}/${month + 1}/${date} ${hour}:${min}`;
        document.getElementById('time').textContent = output;
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    
        document.addEventListener('DOMContentLoaded', function() {
            const events = @json($events);
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: events,
                locale: 'ja',  //日本語に
                height: '400px',
                width: '500px', // 幅を600pxに設定
                firstDay: 1,
                headerToolbar: {
                    left: "dayGridMonth,timeGridWeek,timeGridDay,listWeek",
                    center: "title",
                    right: "today prev,next"
                },
                buttonText: {
                    today: '今月',
                    month: '月',
                    week: '周',
                    day: '日',
                    list: 'リスト',
                },
                noEventsContent: 'スケジュールはありません',
                fixedWeekCount: false,  //6週目を表示する場合は「true」に設定
                showNonCurrentDates: false,  //当月以外はグレー表示
                //initialDate: '2023-09-01',   //初期表示する年月を指定する
                eventMouseEnter(info) {
                    $(info.el).popover({
                        title: info.event.title,
                        content: info.event.extendedProps.description,
                        trigger: 'hover',
                        placement: 'top',
                        container: 'body',
                        html: true
                    });
                },
                editable: true,
                eventDrop: function(info) {
                    updateEvent(info);
                },
                eventResize: function(info) {
                    updateEvent(info);
                },
            });
            calendar.render();
        });
        function updateEvent(info){
            const id = info.event.id;
            const start = info.event.start.toLocaleString('ja-JP');
            const end = info.event.end.toLocaleString('ja-JP');
          
            $.ajax({
                url: '/calendars/' + id + '/updateByCalendar',
                type: 'PUT',
                data: {
                    id: info.event.id,
                    start_date: start,
                    end_date: end,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if(response.success) {
                        console.log('Event Updated');
                    } else {
                        alert('Error occurred');
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('AJAX error: ' + textStatus + ' - ' + errorThrown);
                }
            });
        }
    </script>
@endsection
