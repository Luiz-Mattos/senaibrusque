/*Responsavel pela busca AJAX de apenasuma noticia*/


var id = 0;
$('document').ready(function () {
    $('#cursos button').click(function () {
        //botão clicado
        if ($.isNumeric($(this).attr('id'))) {
            id = $(this).attr('id');
            console.log(id);
            //reconstrução do identificador do curso/noticia
            cursoID = '#curso' + id;
            console.log(cursoID);
            $.ajax({
                    url:'cursoBD.php',
                    type:'GET',
                    data: 'id='+id,
                    beforeSend:function(){
                        $(cursoID).html("<img src='img/aguarde-por-favor.gif'>");
                    },
                    success: function (retorno){
                        $(cursoID).html(retorno);
                    }
                });

        }
    });
});