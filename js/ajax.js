const formulario_ajax = document.querySelectorAll('.FormularioAjax');

function enviar_formulario_ajax(e){
    e.preventDefault();
    let enviar = confirm('¿Estás seguro de enviar este formulario?');
    if(enviar==true){
        let data = new FormData(this);
        let method = this.getAttribute('method');
        let action = this.getAttribute('action');
        let encabezados = new Headers();

        let config = {
            method: method,
            headers: encabezados,
            mode: 'cors',
            cache: 'no-cache',
            body: data
        }
        // fetch

        fetch(action, config)
        .then(respuesta => respuesta.text())
        .then(respuesta => {
            let contenedor = document.querySelector('.form-reset');
            contenedor.innerHTML = respuesta;
        })
    }
}

formulario_ajax.forEach(formulario => {
    formulario.addEventListener('submit', enviar_formulario_ajax);
});