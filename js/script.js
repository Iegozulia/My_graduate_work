setInterval(clock_on_javascript, 1000);
    function clock_on_javascript() {
    var data = new Date();  
    var time  = data.getHours() + ":" +  data.getMinutes() + ":" +  data.getSeconds();
    document.getElementById('clock_js').innerHTML = time;  
    }