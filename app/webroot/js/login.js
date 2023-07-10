$(function() {
    $(document).on('submit', '#loginForm', function(e) {
        e.preventDefault()
        
        const errorMessage = $('.error-message ul')
        let errorList = ''

        let form = $(this).serializeArray()
        let res = sendAjax(base_url + 'users/authenticate', form)

        if(res){
            if(res.status == 'error'){
                $.each(res.errors, function(field, messages) {
                    $.each(messages, function(index, message) {
                        errorList += '<li><p class="small fw-bold pt-1 mb-0">' + message + '</p></li>'
                    })
                })
                errorMessage.html(errorList)
            }else{
                window.location.href = base_url + 'users/dashboard'
            }
        }else{
            errorMessage.html('<li><p class="small fw-bold pt-1 mb-0">Ooops! Something went wrong. Please try again later</p></li>')
        }
    });
});
