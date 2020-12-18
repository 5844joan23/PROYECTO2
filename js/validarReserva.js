function fecha() {
    var dtToday = new Date();

    var mes = dtToday.getMonth() + 1;
    var dia = dtToday.getDate();
    var anyo = dtToday.getFullYear();
    if (mes < 10)
        mes = '0' + mes.toString();
    if (dia < 10)
        dia = '0' + dia.toString();

    var maxDate = anyo + '-' + mes + '-' + dia;
    // alert(maxDate);
    $('#dia').attr('min', maxDate);
}


function validarReserva(){
    var comensales=document.getElementById('comensales').value;
    var dia=document.getElementById('dia').value;
    var hora=document.getElementById('hora').value;
    var nombreUser=document.getElementById('nombreUser').value;
    var telefono=document.getElementById('telefono').value;
    var errors = "";

    if (comensales === ''){
        document.getElementById("comensales").style.borderColor = "red";
        errors = errors + "comensales";
    }
    if (dia === ''){
        errors = errors + "Día ";
        document.getElementById("dia").style.borderColor = "red";
    }
    if (hora === ''){
        errors = errors + "Hora ";
        document.getElementById("hora").style.borderColor = "red";
    }
    if (nombreUser === ''){
        errors = errors + "Nombre de usuario ";
        document.getElementById("nombreUser").style.borderColor = "red";
    }
    if (telefono === ''){
        errors = errors + "Teléfono ";
        document.getElementById("telefono").style.borderColor = "red";
    }
    if (comensales != ''){
        document.getElementById("comensales").style.borderColor = "initial";
    }
    if (dia != ''){
        document.getElementById("dia").style.borderColor = "initial";
    }
    if (hora != ''){
        document.getElementById("hora").style.borderColor = "initial";
    }
    if (nombreUser != ''){
        document.getElementById("nombreUser").style.borderColor = "initial";
    }
    if (telefono != ''){
        document.getElementById("telefono").style.borderColor = "initial";
    }
    if (errors === ''){
        return true;
    }
    else {
        errors = "Campos obligatorios: " + errors;
        document.getElementById("msg").innerHTML = (errors);
        return false;
    }
}


