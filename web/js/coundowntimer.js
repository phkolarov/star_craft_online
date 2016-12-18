(() =>{




    function startTimer(duration, display) {
        let timer = duration, minutes, seconds;
        let countdown = setInterval(function () {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = minutes + ":" + seconds;

            if (--timer < 0) {
                clearInterval(countdown);
            }
        }, 1000);
    }

    window.onload = function () {
        var fiveMinutes = 5 ,
            display = document.querySelector('#time');
        startTimer(fiveMinutes, display);
    };



})();