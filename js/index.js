window.onload= function setDeg(){
    var time= new Date
        document.getElementById('go').innerHTML=zero(time.getHours())+":"+zero(time.getMinutes())+":"+zero(time.getSeconds())
        setInterval(setDeg,1000)
    }
    function zero(x){
        if (x<10){
            x="0"+x
        }
        return x
    }


    



    