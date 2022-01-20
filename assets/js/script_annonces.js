var btn_file = document.getElementById('btn_add_image')
btn_file.addEventListener('click', function(){
    document.getElementById('input_file').click()
})


// Envoie auto

var input_file = document.getElementById('input_file')
input_file.addEventListener('change', function(){
    document.forms['form'].submit()
})