$body = document.querySelector('body')

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
    }).then(async (response) => console.log(await response.json()))
  } catch (error) {
    console.log(error)
  }
}
