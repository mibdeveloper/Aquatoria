window.onload = function () {

    var btnClose = document.getElementById('btnClose').onclick = clouseForm;


    function clouseForm(){

        var form = document.getElementById('shadowForm');
        form.style.display = "none";

    };

    var resBtn = document.getElementById('reservationBtn').onclick = openForm1;

    function openForm1(){


        var scrollHeight = Math.max(
            document.body.scrollHeight, document.documentElement.scrollHeight,
            document.body.offsetHeight, document.documentElement.offsetHeight,
            document.body.clientHeight, document.documentElement.clientHeight
        );

        var form = document.getElementById('shadowForm');

        window.scrollTo(0,0);

        form.style.display = "block";
        form.style.height = scrollHeight.toString() + "px";

    };

    var scrollUp = document.getElementById('button_toUp');

    window.onscroll = function () {
        if (window.pageYOffset > 0) {
            scrollUp.style.display = 'block';
        } else {
            scrollUp.style.display = 'none';
        }
    };
};


(function($) {
    $(function() {

        $('#button_toUpArea').click(function() {
            $('html, body').animate({scrollTop: 0},500);
            return false;
        });

        $(function () {
            $('#datetimepicker2').datetimepicker({pickTime: false, language: 'ru'});
			/*$('#arrivalDate + span .glyphicon-calendar').click(function () {
				$('#arrivalDate').click();
			})*/
			
			
            $("#setMinDate").click(function () {
                $('#datetimepicker2').data("DateTimePicker").setMinDate(new Date("01.01.2015"));
            });
            $("#setMaxDate").click(function () {
                $('#datetimepicker2').data("DateTimePicker").setMaxDate(new Date("01.01.2016"));
            });
            $("#show").click(function () {
                $('#datetimepicker2').data("DateTimePicker").show();
            });
            $("#hide").click(function () {
                $('#datetimepicker2').data("DateTimePicker").hide();
            });
            $("#disable").click(function () {
                $('#datetimepicker2').data("DateTimePicker").disable();
            });
            $("#enable").click(function () {
                $('#datetimepicker2').data("DateTimePicker").enable();
            });
            $("#setDate").click(function () {
                $('#datetimepicker2').data("DateTimePicker").setDate("01/09/2015");
            });
            $("#getDate").click(function () {
                alert($('#datetimepicker2').data("DateTimePicker").getDate());
            });
        });

        $(function () {
            $('#datetimepicker3').datetimepicker({pickTime: false, language: 'ru'});
            $("#setMinDate").click(function () {
                $('#datetimepicker3').data("DateTimePicker").setMinDate(new Date("01.01.2015"));
            });
            $("#setMaxDate").click(function () {
                $('#datetimepicker3').data("DateTimePicker").setMaxDate(new Date("01.01.2016"));
            });
            $("#show").click(function () {
                $('#datetimepicker3').data("DateTimePicker").show();
            });
            $("#hide").click(function () {
                $('#datetimepicker3').data("DateTimePicker").hide();
            });
            $("#disable").click(function () {
                $('#datetimepicker3').data("DateTimePicker").disable();
            });
            $("#enable").click(function () {
                $('#datetimepicker3').data("DateTimePicker").enable();
            });
            $("#setDate").click(function () {
                $('#datetimepicker3').data("DateTimePicker").setDate("01/09/2015");
            });
            $("#getDate").click(function () {
                alert($('#datetimepicker3').data("DateTimePicker").getDate());
            });
        });


        $(function () {
            $('#datetimepicker4').datetimepicker({pickTime: false, language: 'ru'});
            $("#setMinDate").click(function () {
                $('#datetimepicker4').data("DateTimePicker").setMinDate(new Date("01.01.2015"));
            });
            $("#setMaxDate").click(function () {
                $('#datetimepicker4').data("DateTimePicker").setMaxDate(new Date("01.01.2016"));
            });
            $("#show").click(function () {
                $('#datetimepicker4').data("DateTimePicker").show();
            });
            $("#hide").click(function () {
                $('#datetimepicker4').data("DateTimePicker").hide();
            });
            $("#disable").click(function () {
                $('#datetimepicker4').data("DateTimePicker").disable();
            });
            $("#enable").click(function () {
                $('#datetimepicker4').data("DateTimePicker").enable();
            });
            $("#setDate").click(function () {
                $('#datetimepicker4').data("DateTimePicker").setDate("01/09/2015");
            });
            $("#getDate").click(function () {
                alert($('#datetimepicker4').data("DateTimePicker").getDate());
            });
        });

        $(function () {
            $('#datetimepicker5').datetimepicker({pickTime: false, language: 'ru'});
            $("#setMinDate").click(function () {
                $('#datetimepicker5').data("DateTimePicker").setMinDate(new Date("01.01.2015"));
            });
            $("#setMaxDate").click(function () {
                $('#datetimepicker5').data("DateTimePicker").setMaxDate(new Date("01.01.2016"));
            });
            $("#show").click(function () {
                $('#datetimepicker5').data("DateTimePicker").show();
            });
            $("#hide").click(function () {
                $('#datetimepicker5').data("DateTimePicker").hide();
            });
            $("#disable").click(function () {
                $('#datetimepicker5').data("DateTimePicker").disable();
            });
            $("#enable").click(function () {
                $('#datetimepicker5').data("DateTimePicker").enable();
            });
            $("#setDate").click(function () {
                $('#datetimepicker5').data("DateTimePicker").setDate("01/09/2015");
            });
            $("#getDate").click(function () {
                alert($('#datetimepicker5').data("DateTimePicker").getDate());
            });
        });
		
		
		/*
		 Radchenko VV =======================================================
		
		*/
		
		$(function () {
            $('#datetimepicker6').datetimepicker({pickTime: false, language: 'ru'});
            $("#setMinDate").click(function () {
                $('#datetimepicker6').data("DateTimePicker").setMinDate(new Date("01.01.2015"));
            });
            $("#setMaxDate").click(function () {
                $('#datetimepicker6').data("DateTimePicker").setMaxDate(new Date("01.01.2016"));
            });
            $("#show").click(function () {
                $('#datetimepicker6').data("DateTimePicker").show();
            });
            $("#hide").click(function () {
                $('#datetimepicker6').data("DateTimePicker").hide();
            });
            $("#disable").click(function () {
                $('#datetimepicker6').data("DateTimePicker").disable();
            });
            $("#enable").click(function () {
                $('#datetimepicker6').data("DateTimePicker").enable();
            });
            $("#setDate").click(function () {
                $('#datetimepicker6').data("DateTimePicker").setDate("01/09/2015");
            });
            $("#getDate").click(function () {
                alert($('#datetimepicker6').data("DateTimePicker").getDate());
            });
        });
		
		
		/*
		  END     Radchenko VV =======================================================
		
		*/

    })
})(jQuery)
