<div class="custom-calendar-wrap custom-calendar-full">
    <div id="calendar" class="fc-calendar-container"></div>
</div>
<script src="bower_components/moment/moment.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="Calendario/js/jquery.calendario.js"></script>
<script type="text/javascript" src="Calendario/js/data.js"></script>
<script>
    function update() {
        $('#clock').html(moment().format('dddd, MMMM DD, YYYY h:mm a'));
        moment.locale('en', {
        });
    }
    setInterval(update, 1000);
</script>
<script type="text/javascript">
    $(function() {

        var cal = $( '#calendar' ).calendario( {
                onDayClick : function( $el, $contentEl, dateProperties ) {
                    for( var key in dateProperties ) {
                        console.log( key + ' = ' + dateProperties[ key ] );
                    }
                },
                caldata : codropsEvents
            } ),
            $month = $( '#custom-month' ).html( cal.getMonthName() ),
            $year = $( '#custom-year' ).html( cal.getYear() );

        $( '#custom-next' ).on( 'click', function() {
            cal.gotoNextMonth( updateMonthYear );
        } );
        $( '#custom-prev' ).on( 'click', function() {
            cal.gotoPreviousMonth( updateMonthYear );
        } );
        $( '#custom-current' ).on( 'click', function() {
            cal.gotoNow( updateMonthYear );
        } );

        function updateMonthYear() {
            $month.html( cal.getMonthName() );
            $year.html( cal.getYear() );
        }
    });
</script>
