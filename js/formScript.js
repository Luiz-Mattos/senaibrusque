/* 
 http://webdesign.tutsplus.com/tutorials/building-a-bootstrap-contact-form-using-php-and-ajax--cms-23068
 Building a Bootstrap Contact Form Using PHP and AJAX
 */
$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // Formulário invalido
        formError();
        submitMSG(false, "Por favor preencha corretamente o formulário.");
    } else {
        // tudo Ok
        event.preventDefault();
        submitForm();
    }
});

function submitForm() {
    // Inicializa variaveis com o conteudo do formulario
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();

    $.ajax({
        type: "POST",
        url: "contato/formProcess.php",
        data: "name=" + name + "&email=" + email + "&message=" + message,
        success: function (text) {
            if (text == "success") {
                formSuccess();
            }
        }
    });
}
function formSuccess() {
    //limpa o formulario
    $("#contactForm")[0].reset();
    //Envia mensagem de sucesso
    submitMSG(true, "Mensagem enviada!")
}


function submitMSG(valid, msg) {
    var msgClasses;
    if (valid) {
        msgClasses = "h3 text-center tada animated text-success";
    } else {
        msgClasses = "h3 text-center flash animated text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}
function formError() {
    $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
        $(this).removeClass();
    });
}
// newsletter
