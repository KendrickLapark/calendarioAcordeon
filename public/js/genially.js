$(()=>{

    

    function seteaFecha(dias){

        var fechasIniciales = firstDaysOfWeekText(dias);

        for (var i = 0; i < fechasIniciales.length; i++) {
            $('.fechaGenially').eq(i).text(fechasIniciales[i])
            console.log(fechasIniciales[i])
        }

    }

    //devuelve los días de una determinada semana

    function dates(current) {
         
        // Starting Monday not Sunday

        var week= new Array();

        //Iteramos 5 veces para avanzar 5 semanas desde la semana introducida
        for(var j = 0; j < 5; j++){
            current.setDate((current.getDate() - current.getDay() +1));

            //devuelve el primer día de una semana determinada en current

            //console.log("primer dia de la semana "+current);
        
            for (var i = 0; i < 7; i++) {
                week.push(
                    new Date(current)
                ); 
                current.setDate(current.getDate() +1);
            }

            current.setDate(current.getDate()-1);

            //devuelve el último día de la semana

            //console.log("último dia de la semana "+current);

            current.setDate(current.getDate()+1);          

        }

        return week;
    }

    //devuelve el primer día de la semana, formateado para que lo devuelva en forma de cadena de texto 

    function firstDayOfWeek(current){

        current.setDate((current.getDate() - current.getDay() +1));

        var dia = current.getDate();

        var mes = current.toLocaleDateString("es-Es", {month: 'long'});

        var fecha = dia + " " + mes;

        return fecha;

    }

    //devuelve el último día de la semana, formateado para que lo devuelva en forma de cadena de texto

    function lastDayOfWeekText(current){    

        var dia = current.getDate();

        var mes = current.toLocaleDateString("es-Es", {month: 'long'});

        var fecha = dia + " " + mes;

        return fecha;

    }

    function startEndWeek(current){

        var inicio = firstDayOfWeek(current);

        var fin = lastDayOfWeekText(current);

        var lapso = inicio + " - " + fin;

        return lapso;

    }

    //devuelve el día de la semana en formato texto
    
    function getDayName(dateStr, locale)
    {
        var date = new Date(dateStr);
        return date.toLocaleDateString(locale, { weekday: 'long' }); 
        
        //ej output : console.log(getDayName(firstDay, "es-Es")); devuelve el día de la semana en español
    }

    //método para comparar a que día cae el primer día del mes, para saber si la semana esta empezada o acaba de empezar

    function checkFirstDayOfMonth(){

        var firstDay = new Date(new Date().getFullYear(), new Date().getMonth(), 1);

        if(getDayName(firstDay, "es-Es") == "miércoles"){
            console.log("los dias coinciden")
            return 
        }else{
            console.log("no coincide");
        }

    }

    function checkLastDayOfMonth(){

        var firstDay = new Date(new Date().getFullYear(), new Date().getMonth(), 1);

        if(getDayName(firstDay, "es-Es") == "miércoles"){
            console.log("los dias coinciden")
            return 
        }else{
            console.log("no coincide");
        }

    }

    //obtiene los primeros días de las 5 semanas de la fecha indicada en formato fecha


    function firstDaysOfWeek(dias){       

        var primerosDias = new Array();

        for(var i = 0; i < dias.length; i+=7){

            primerosDias.push(dias[i]);

        }

        return primerosDias;

    }

    //devuelve en formato texto el primer día de la semana de las 5 semanas según la fecha indicada

    function firstDaysOfWeekText(dias){

        var primerosDias = firstDaysOfWeek(dias);

        var primerosDiasTexto = new Array();

        for(var i = 0; i < primerosDias.length; i++){

            primerosDiasTexto.push( firstDayOfWeek(primerosDias[i]));
            
        }

        return primerosDiasTexto;

    }

    //devuelve en formato texto el último día de la semana de las 5 semanas según la fecha indicada

    function lastDaysOfWeekText(dias){

        var ultimosDias = lastDaysOfWeek(dias);

        var ultimosDiasTexto = new Array();

        for(var i = 0; i < ultimosDias.length; i++){
            ultimosDiasTexto.push(lastDayOfWeekText(ultimosDias[i]));
        }

        return ultimosDiasTexto;

    }

    function weekIntervalText(dias){

        var primeros = firstDaysOfWeekText(dias);
        var ultimos = lastDaysOfWeekText(dias);

        var intervalos = new Array();

        for(var i = 0; i < (primeros.length * 2); i++){

            intervalos.push( primeros[i])

            intervalos.push( ultimos[i])

        }

        for (var i = 0; i < intervalos.length; i++){
            console.log(intervalos[i])
        }

        return intervalos;

    }

    //obtiene los últimos días de las 5 semanas de la fecha indicada en formato fecha

    function lastDaysOfWeek(dias){

        var ultimosDias = new Array();

        for(var i = 6; i < dias.length; i+=7){

            ultimosDias.push(dias[i]);

        }

        return ultimosDias;

    }

    $('#geniallyButton1').on("click", () => {

        /* var fecha = new Date(new Date().getFullYear(), 1, 1);

        for (var i = 0; i < firstDaysOfWeekText(dates(new Date(new Date().getFullYear(), 1, 1))).length; i++){
            console.log(firstDaysOfWeekText(dates(new Date(new Date().getFullYear(), 1, 1)))[i]);
        } 

        lastDaysOfWeekText(dates(new Date(new Date().getFullYear(), 1, 1)));    */

        seteaFecha(dates(new Date(new Date().getFullYear(), 1, 1)));

        weekIntervalText(dates(new Date(new Date().getFullYear(), 1, 1)));

    });

})