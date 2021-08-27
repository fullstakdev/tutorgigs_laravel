"use strict";

var KTCalendarBasic = function() {

    return {
        //main function to initiate the module
        init: function() {
            var todayDate = moment().startOf('day');
            var YM = todayDate.format('YYYY-MM');
            var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
            var TODAY = todayDate.format('YYYY-MM-DD');
            var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

            var calendarEl = document.getElementById('kt_calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid', 'list' ],
                themeSystem: 'bootstrap',

                isRTL: KTUtil.isRTL(),

                header: {
                    left: 'prev,next today',
                    center: 'title'
                },

                height: 800,
                contentHeight: 780,
                aspectRatio: 3,  // see: https://fullcalendar.io/docs/aspectRatio

                nowIndicator: true,
                now: TODAY + 'T09:25:00', // just for demo

                views: {
                    dayGridMonth: { buttonText: 'month' },
                    timeGridWeek: { buttonText: 'week' },
                    timeGridDay: { buttonText: 'day' }
                },

                defaultView: 'dayGridMonth',
                defaultDate: TODAY,

                editable: true,
                eventLimit: true, // allow "more" link when too many events
                navLinks: true,
                events: [
                   
                    {
                        title: '<a href="cal_ses_details" style="color:#fff">02:00 am - CST</a><i class="flaticon-eye" style="color:#fff;margin-left:5px;font-size:13px" onclick="session_details(6658)"></i>',
                        start: YM + '-02',
                        description: 'Job Assigned, Lesson:5.4B Math General',
                       
                        className: "fc-event-success fc-event-solid-success"
                    },
                    {
                        title: '02:00 am - CST<i class="flaticon-eye" style="color:#fff;margin-left:5px;font-size:13px" onclick="session_details(6658)"></i>',
                        start: YM + '-02',
                        description: 'Job Assigned, Lesson:5.4B Math General',
                       
                        className: "fc-event-warning fc-event-solid-warning"
                    },
                    
                   {
                        title: '02:00 am - CST<i class="flaticon-eye" style="color:#fff;margin-left:5px;font-size:13px" onclick="session_details(6658)"></i>',
                        start: YM + '-12',
                        description: 'Job Assigned, Lesson:5.4B Math General',
                       
                        className: "fc-event-warning fc-event-solid-warning"
                    },
                    {
                        id: 999,
                       title: '<a href="" style="color:#fff">02:00 am - CST</a><i class="flaticon-eye" style="color:#fff;margin-left:5px;font-size:13px" onclick="session_details(6658)"></i>',
                        start: YM + '-09T16:00:00',
                        description: 'Lorem ipsum dolor sit ncididunt ut labore',
                        className: "fc-event-danger"
                    },
                   
                     {
                        title: '<a href="" style="color:#fff">02:00 am - CST</a><i class="flaticon-eye" style="color:#fff;margin-left:5px;font-size:13px" onclick="session_details(6658)"></i>',
                        start: TOMORROW,
                        description: 'Job Assigned, Lesson:5.4B Math General',
                       
                        className: "fc-event-success fc-event-solid-success"
                    },
                     
                   
                ],

                eventRender: function(info) {
                    var element = $(info.el);
 element.find('span.fc-title').html(element.find('span.fc-title').text());
                    if (info.event.extendedProps && info.event.extendedProps.description) {
                        if (element.hasClass('fc-day-grid-event')) {
                            element.data('content', info.event.extendedProps.description);
                            element.data('placement', 'top');
                            KTApp.initPopover(element);
                        } else if (element.hasClass('fc-time-grid-event')) {
                            element.find('.fc-title').append('<div class="fc-description">' + info.event.extendedProps.description + '</div>');
                        } else if (element.find('.fc-list-item-title').lenght !== 0) {
                            element.find('.fc-list-item-title').append('<div class="fc-description">' + info.event.extendedProps.description + '</div>');
                        }
                    }
                }
            });

            calendar.render();
        }
    };
}();

jQuery(document).ready(function() {
    KTCalendarBasic.init();
});
