$('#erro_mensagem').show().delay(2000).fadeOut('slow')


function confirm_delete() {
    if (confirm('Deseja excluir esse registro?')) {
        return true;
    }
    return false;
}


ClassicEditor.create(document.querySelector('#editor'))
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


