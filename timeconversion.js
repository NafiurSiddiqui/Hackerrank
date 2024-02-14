function timeConversion(t){

    const format = t.slice(-2); //get the format
    const time = t.slice(0, -2); //get the time without the format
    let [hour, mins, secs]= time.split(':'); //get the hour, min, secs
    let hourInt = +hour;//convert str to int

    if(format === 'PM'){
        //Daylight
        hour = hourInt === 12 ? 12 : (hourInt + 12);
    }else{
        //midnight
        hour = hourInt === 12 ? 0 : hour; //without str hour ZERO is lost
    }
    
    let formattedTime = `${hour}:${mins}:${secs}`;
    return formattedTime;
}

timeConversion('10:00:00PM'); //outputs: 22:00:00;
