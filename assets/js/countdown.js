(function() {
    var endDate = "August 18, 2017 09:30:00 GMT+0530";

    function zeroPad(number) {
        return ("0" + number).slice(-2);
    }

    function getRemainingTime(deadline) {
        var t       = Date.parse(deadline) - Date.parse(new Date());
        var seconds = Math.floor((t / 1000) % 60);
        var minutes = Math.floor((t / 1000 / 60) % 60);
        var hours   = Math.floor((t / (1000 * 60 * 60)) % 24);
        var days    = Math.floor(t / (1000 * 60 * 60 * 24));

        return {
            "total":   t,
            "seconds": seconds,
            "minutes": minutes,
            "hours":   hours,
            "days":    days
        }
    }

    function initializeCountdown(id, deadline) {
        var countdown   = document.getElementById(id);
        var daysSpan    = countdown.querySelector(".days");
        var hoursSpan   = countdown.querySelector(".hours");
        var minutesSpan = countdown.querySelector(".minutes");
        var secondsSpan = countdown.querySelector(".seconds");
        function updateClock() {
            var time = getRemainingTime(endDate);

            daysSpan.innerHTML    = zeroPad(time.days);
            hoursSpan.innerHTML   = zeroPad(time.hours);
            minutesSpan.innerHTML = zeroPad(time.minutes);
            secondsSpan.innerHTML = zeroPad(time.seconds);

            if(time.total <= 0){
                clearInterval(timeInterval);
                document.getElementById(id).style.display = "none";
            }
        }

        updateClock(); // run function once at first to avoid delay
        var timeInterval = setInterval(updateClock, 1000);
    }

    initializeCountdown("countdown", endDate);

})();
