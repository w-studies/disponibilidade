$body = document.querySelector('body')
const sidebar = document.querySelector('.app-sidebar')
const app = document.querySelector('.app')
const sidebarShowButton = document.querySelector('a[href="show-sidebar"]')

if (sidebarShowButton) {
  sidebarShowButton.addEventListener('click', (e) => {
    e.preventDefault()
    app.classList.toggle('sidebar-show')
  })
}

/**
 * MODAL FORM SUBMIT
 */
document.querySelector('.modal-body form').onsubmit = (e) => {
  e.preventDefault()
  const form = e.target
  try {
    fetch(form.action, {
      method: form.getAttribute('method'),
      body: new FormData(form)
    }).then(async (response) => {
      // trata a resposta como json
      const json = await response.json()

      // remove os feedbacks de erro
      for (const error of form.querySelectorAll('.error-feedback')) {
        error.remove()
      }
      if (json.hasOwnProperty('swal')) {
        form.reset()
        Swal.fire(json.swal).then(() => {
          if (json?.redirect) window.location.href = json.redirect
        })
      } else {
        validationFormErrors(form, json)
      }
    })
  } catch (error) {
    console.log(error)
  }
}

/**
 * TRATAMENTO DE ERROS EM FORMULÁRIOS
 */
const validationFormErrors = (form, errors) => {
  // percorre cada erro
  for (key in errors) {
    // gera um small com a mensagem de erro
    const showError = document.createElement('small')
    showError.classList.add('error-feedback')
    showError.innerHTML = errors[key]
    // acrescenta a mensagem de erro depois do elemento do form
    form.querySelector(`[name='${key}']`).after(showError)
  }
}
