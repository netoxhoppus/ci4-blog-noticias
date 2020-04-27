/*$('#erro_mensagem').show().delay(2000).fadeOut('slow');*/

function tiraFundo() {
    /*document.getElementById('div_principal_home').style.display('block');*/
    /*$("#div_principal_home").css("display", "none")*/

    document.getElementById('div_principal_home').style.visibility = 'hidden';
}

function confirma(valor) {
    if (!confirm('Confirma ' + valor + '?')) {
        return false;
    }
    return true;
}


ClassicEditor
    .create(document.querySelector('#editor'))
    .then(editor => {
        console.log(editor);
    })
    .catch(error => {
        console.error(error);
    });

function modal() {
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Botão que acionou o modal
        var titulo = button.data('titulo') // Extrai informação dos atributos data-*
        var corpo = button.data('corpo')
        var modal = $(this)
        modal.find('.modal-header input').val(titulo)
        modal.find('.modal-body textarea').val(corpo)
    })

}


