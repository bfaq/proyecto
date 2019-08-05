function submitContactForm(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+.)+[A-Z]{2,4}$/i;
    var name = $('#inputName').val();
    var email = $('#inputEmail').val();
    var message = $('#inputMessage').val();
    if(name.trim() == '' ){
        alert('Ingrese su nombre.');
        $('#inputName').focus();
        return false;
    }
    else if(email.trim() == '' ){
        alert('Ingrese su correo.');
        $('#inputEmail').focus();
        return false;
    }
    else if(email.trim() != '' && !reg.test(email)){
        alert('Ingrese un correo válido.');
        $('#inputEmail').focus();
        return false;
    }
    else if(message.trim() == '' ){
        alert('Please enter your message.');
        $('#inputMessage').focus();
        return false;
    }
}

