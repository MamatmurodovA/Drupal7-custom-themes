function CountdownTimer(elm, tl, mes, data) {
    this.initialize.apply(this, arguments);
}
CountdownTimer.prototype = {
    initialize: function (elm, tl, mes, data) {
        this.elem = document.getElementById(elm);
        this.tl = tl;
        this.mes = mes;
        if (data){
            this.data = data;
        }
    }, countDown: function () {
        var timer = '';
        var today = new Date();
        var day = Math.floor((this.tl - today) / (24 * 60 * 60 * 1000));
        var hour = Math.floor(((this.tl - today) % (24 * 60 * 60 * 1000)) / (60 * 60 * 1000));
        var min = Math.floor(((this.tl - today) % (24 * 60 * 60 * 1000)) / (60 * 1000)) % 60;
        var sec = Math.floor(((this.tl - today) % (24 * 60 * 60 * 1000)) / 1000) % 60 % 60;
        var me = this;
        var days_text = "Days";
        var hours_text = "Hours";
        var minutes_text = "Minutes";
        var seconds_text = "Seconds";
        if (typeof this.data !== 'undefined')
        {
            days_text = this.data.days;
            hours_text = this.data.hours;
            minutes_text = this.data.minutes;
            seconds_text = this.data.seconds;
        }

        if (( this.tl - today ) > 0) {
            timer += '<span class="number-wrapper"><div class="line"></div><div class="caption">' + days_text + '</div><span class="number day">' + day + '</span></span>';
            timer += '<span class="number-wrapper"><div class="line"></div><div class="caption">' + hours_text + '</div><span class="number hour">' + hour + '</span></span>';
            timer += '<span class="number-wrapper"><div class="line"></div><div class="caption">' + minutes_text + '</div><span class="number min">' + this.addZero(min) + '</span></span><span class="number-wrapper"><div class="line"></div><div class="caption">' + seconds_text + '</div><span class="number sec">' + this.addZero(sec) + '</span></span>';
            this.elem.innerHTML = timer;
            tid = setTimeout(function () {
                me.countDown();
            }, 1000);
        } else {
            this.elem.innerHTML = this.mes;
            return;
        }
    }, addZero: function (num) {
        return ('0' + num).slice(-2);
    }
}