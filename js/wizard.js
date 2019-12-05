$(function(){
    $('.icon-type-img-select').hide();
    $('.icon-type-img-select').toggleClass('icon-type-img-select');
    $('.actions a[href$=\'#next\']').attr("href", "#disableNext");

    window.selectedDays = [];
    var selectedHours = [];
    window.selectedGoals = [];
    window.selectedFoods = [];
    window.selectedActivities = [];
    window.selectedAllergys=[];

    $("#wizard").steps({
        headerTag: "h4",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        transitionEffectSpeed: 500,
        onStepChanging: function (event, currentIndex, newIndex) {
            if (newIndex === 1) {
                $('.steps ul').addClass('step-2');
            } else {
                $('.steps ul').removeClass('step-2');
            }

            if (newIndex === 2) {
                $('.steps ul').addClass('step-3');
            } else {
                $('.steps ul').removeClass('step-3');
            }

            if (newIndex === 3) {
                $('.steps ul').addClass('step-4');
            } else {
                $('.steps ul').removeClass('step-4');
            }

            if (newIndex === 4) {
                $('.steps ul').addClass('step-5');
            } else {
                $('.steps ul').removeClass('step-5');
            }
            return true;
        },
        labels: {
            finish: "Finish",
            next: "Next",
            previous: "Previous"
        }
    });
    // Custom Steps Jquery Steps
    $('.wizard > .steps li a').click(function () {
        $(this).parent().addClass('checked');
        $(this).parent().prevAll().addClass('checked');
        $(this).parent().nextAll().removeClass('checked');
    });
    // Custom Button Jquery Steps
    $('.forward').click(function () {
        $("#wizard").steps('next');
    })
    $('.backward').click(function () {
        $("#wizard").steps('previous');
    })
//select dayspreffer
    $(".button-checked").click(function (event) {
        $("#" + this.id).toggleClass("button-is-checked");

        if ($(this).hasClass("button-is-checked")) {
            window.selectedDays.push(this.value);
        } else {
            window.selectedDays.pop(this.value);
        }
    });

    // Checkbox
    $('.checkbox-circle label').click(function () {
        $('.checkbox-circle label').removeClass('active');
        $(this).addClass('active');
    });
//add and remove favorite food 
    $('.type-img').click(function (event) {
        $(this).toggleClass('type-img-select');
        $('#' + this.id + '-icon').toggleClass('icon-type-img-select');
        $('#' + this.id + '-icon').toggle();

        if (!$(this).hasClass("type-img-select")) {
            window.selectedFoods.pop($(this).attr("value"));
        //$('#' + this.id + '-icon').unbind(clickOnCheckIcon);

        } else {
            window.selectedFoods.push($(this).attr("value"));
        }
        //$('#' + this.id + '-icon').click(clickOnCheckIcon);

        if (window.selectedFoods.length) {
            $('.actions a[href$=\'#disableNext\']').removeClass('disableNextStep');
            $('.actions a[href$=\'#disableNext\']').attr("href", "#next");

        } else {
            $('.actions a[href$=\'#next\']').addClass('disableNextStep');
            $('.actions a[href$=\'#next\']').attr("href", "#disableNext");
        }
    });

        $('.activity-img').click(function (event) {
            $(this).toggleClass('activity-img-select');
            $('#' + this.id + '-icon').toggleClass('icon-type-img-select');
            $('#' + this.id + '-icon').toggle();
    
            if (!$(this).hasClass("activity-img-select")) {
                window.selectedActivities.pop($(this).attr("value"));
            //$('#' + this.id + '-icon').unbind(clickOnCheckIcon);
    
            } else {
                window.selectedActivities.push($(this).attr("value"));
            //$('#' + this.id + '-icon').click(clickOnCheckIcon);
    
            }

        if (window.selectedActivities.length) {
            $('.actions a[href$=\'#disableNext\']').removeClass('disableNextStep');
            $('.actions a[href$=\'#disableNext\']').attr("href", "#next");

        } else {
            $('.actions a[href$=\'#next\']').addClass('disableNextStep');
            $('.actions a[href$=\'#next\']').attr("href", "#disableNext");
        }
    });

    function clickOnCheckIcon(event) {
        $('#' + this.previousElementSibling.id).toggleClass('type-img-select');
        $('#' + this.id).toggleClass('icon-type-img-select');
        $('#' + this.id).toggle();
    };

    function removeHours(event) {
        $(this).parent().remove();
    };

//add and remove hour preffer
    $('#addicon').click(function (event) {
        var options="<option value='00:00' selected>12.00 AM</option><option value='00:30'>12.30 AM</option><option value='01:00'>01.00 AM</option><option value='01:30'>01.30 AM</option><option value='02:00'>02.00 AM</option><option value='02:30'>02.30 AM</option><option value='03:00'>03.00 AM</option><option value='03:30'>03.30 AM</option><option value='04:00'>04.00 AM</option><option value='04:30'>04.30 AM</option><option value='05:00'>05.00 AM</option><option value='05:30'>05.30 AM</option><option value='06:00'>06.00 AM</option><option value='06:30'>06.30 AM</option><option value='07:00'>07.00 AM</option><option value='07:30'>07.30 AM</option><option value='08:00'>08.00 AM</option><option value='08:30'>08.30 AM</option><option value='09:00'>09.00 AM</option><option value='09:30'>09.30 AM</option><option value='10:00'>10.00 AM</option><option value='10:30'>10.30 AM</option><option value='11:00'>11.00 AM</option><option value='11:30'>11.30 AM</option><option value='12:00'>12.00 PM</option><option value='12:30'>12.30 PM</option><option value='13:00'>01.00 PM</option><option value='13:30'>01.30 PM</option><option value='14:00'>02.00 PM</option><option value='14:30'>02.30 PM</option><option value='15:00'>03.00 PM</option><option value='15:30'>03.30 PM</option><option value='16:00'>04.00 PM</option><option value='16:30'>04.30 PM</option><option value='17:00'>05.00 PM</option><option value='17:30'>05.30 PM</option><option value='18:00'>06.00 PM</option><option value='18:30'>06.30 PM</option><option value='19:00'>07.00 PM</option><option value='19:30'>07.30 PM</option><option value='20:00'>08.00 PM</option><option value='20:30'>08.30 PM</option><option value='21:00'>09.00 PM</option><option value='21:30'>09.30 PM</option><option value='22:00'>10.00 PM</option><option value='22:30'>10.30 PM</option><option value='23:00'>11.00 PM</option><option value='23:30'>11.30 PM</option>";
        var div = document.createElement("div");
        var startTime = document.createElement("select");
        startTime.name = "startTime1";
        startTime.innerHTML = options;
        var p = document.createElement("p");
        p.innerHTML = "<p> - </p>";
        var endTime = document.createElement("select");
        endTime.name="endTime1";
        endTime.innerHTML = options;
        var removeIcon = document.createElement("i");
        removeIcon.class="fas fa-minus-circle remove-hours";
        
        $("#hoursPreferations").append(div);
        div.append(startTime);
        div.append(p);
        div.append(endTime);
        div.append(removeIcon);

        removeIcon.click(function () {
            div.remove();
        });
    });


    //error event
 $('#next').click(function(event){
  if('#selectedGoal'!=null){
    document.getElementById("#next").disabled = "false";
  }
  //  document.getElementById("didntCheckGoals").open();
 });

 // add or remove goal item from array if it wa checked or unchecked
 $('.custom-control-input').change(function (event) {
        if (this.checked) {
            window.selectedGoals.push(this.value);
        } else {
            window.selectedGoals.pop(this.value);
        }

        if (window.selectedGoals.length) {
            $('.actions a[href$=\'#disableNext\']').removeClass('disableNextStep');
            $('.actions a[href$=\'#disableNext\']').attr("href", "#next");

        } else {
            $('.actions a[href$=\'#next\']').addClass('disableNextStep');
            $('.actions a[href$=\'#next\']').attr("href", "#disableNext");
        }
    });
    
});