$(function(){
    var setTime = function(){
        var date = new Date(),
        MINUTE = 60, HOUR   = 60*MINUTE,
        seconds = date.getSeconds(),
        minutes = (date.getMinutes()*MINUTE) + seconds,
        hours = (date.getHours()*HOUR)+minutes;
        document.getElementById('second-hand').setAttribute('transform', 'rotate('+360*(seconds/MINUTE)+',16,17)');
        document.getElementById('minute-hand').setAttribute('transform', 'rotate('+360*(minutes/HOUR)+',16,17)');
        document.getElementById('hour-hand').setAttribute('transform', 'rotate('+360*(hours/(12*HOUR))+',16,17)');
    }
    if($('#second-hand').size() && $('#minute-hand').size() && $('#hour-hand').size()){
        setTime();
        var interval = setInterval(setTime,1000);
    }
});
