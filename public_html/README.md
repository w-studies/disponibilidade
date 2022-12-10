# disponibilidadecvp

## Padrão de url amigáveis

- `controller/view/param0/param1/param2...`

  - controller

    arquivo que vai guardar a parte lógica do sistema
    <br><small>é executado antes das views</small>

  - view

    arquivo que vai guardar o conteúdo que será exibido para o user
    <br><small>é carregada por um controller</small>

  - params

    qualquer parâmetro necessário para qualquer rota

    <br>

---

## Estrutura de arquivos

- `app/`

  onde ficam todos os arquivos da aplicação
  <br><small>fora da pasta pública (inacessível para os users)</small>

  - `controllers`
  - `views`

    <br>

- `public_html`

  pasta que será de acesso público

  - `.htaccess`

    gerar urls amigáveis (para não expor arquivos na url)

  - `assets/`

    onde fica todo o espólio: js, css, images, fonts

  - `index.php`

    intercepta toda requisição que não seja url de um arquivo
