/*
* Full calender - Page
*/
$(function() {

  /* initialize the external events
  -----------------------------------------------------------------*/
  $('#external-events .fc-event').each(function() {

    // store data so the calendar knows to render an event upon drop
    $(this).data('event', {
      title: $.trim($(this).text()), // use the element's text as the event title
      stick: true, // maintain when user navigates (see docs on the renderEvent method)
      color: '#00bcd4'
    });

    // make the event draggable using jQuery UI
    $(this).draggable({
      zIndex: 999,
      revert: true, // will cause the event to go back to its
      revertDuration: 0 //  original position after the drag
    });

  });


  /* initialize the calendar
  -----------------------------------------------------------------*/
  $('#calendar').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,basicWeek,basicDay'
    },
    defaultDate: '2015-05-12',
    editable: true,
    droppable: true, // this allows things to be dropped onto the calendar
    eventLimit: true, // allow "more" link when too many events
    events: [{
        title: 'Habitación 12',
        start: '2015-05-01',
        color: '#9c27b0'
      },
      {
        title: 'Habitación 3',
        start: '2015-05-07',
        end: '2015-05-10',
        color: '#e91e63'
      },
      {
        id: 999,
        title: 'Habitación 2',
        start: '2015-05-09T16:00:00',
        color: '#ff1744'
      },
      {
        id: 999,
        title: 'Habitación 5',
        start: '2015-05-16T16:00:00',
        color: '#aa00ff'
      },
      {
        title: 'Habitación 17',
        start: '2015-05-3',
        end: '2015-05-5',
        color: '#01579b'
      },
      {
        title: 'Habitación 2',
        start: '2015-05-12T10:30:00',
        end: '2015-05-12T12:30:00',
        color: '#2196f3'
      },
      {
        title: 'Habitación 1',
        start: '2015-05-12T12:00:00',
        color: '#ff5722'
      },
      {
        title: 'Habitación 14',
        start: '2015-05-12T14:30:00',
        color: '#4caf50'
      },
      {
        title: 'Habitación 11',
        start: '2015-05-12T17:30:00',
        color: '#03a9f4'
      },
      {
        title: 'Habtiación 9',
        start: '2015-05-12T20:00:00',
        color: '#009688'
      },
      {
        title: 'Habitación 13',
        start: '2015-05-13T07:00:00',
        color: '#00bcd4'
      }
    ]
  });

});