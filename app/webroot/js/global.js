function sendAjax(url, data ={}){
    $.ajax({
        method: 'POST',
        url: url,
        data: data,
        dataType: 'JSON',
        cache: false,
        async: false,
        success: function(response){
            res = response
        },
        error: function(error){
            res = error
        }
    })
    return res
}