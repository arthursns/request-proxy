function clicado(idSolicitacao, status){

if(status == 1){
    var newStatus = 0;
}else if(status == 0){
    var newStatus = 1;
}
$.ajax({
    type: 'POST',
    dataType: 'json',
    url: 'models/alterStatus.php',
    async: true,
    data: {
        id: idSolicitacao,
        status: newStatus 
    },
    success: function(response) {
        location.reload();
    }
});
}
