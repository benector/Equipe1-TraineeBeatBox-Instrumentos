<!-- <!DOCTYPE html>
<html>
 	<head>

         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width,initial-scale=1">
 		<title> BeatBox - SAC</title>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/contato_styles.css">
		<link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>

 	<body style="background-color: #21d8d8;"> -->
<div class="main">

<div class="painel_geral"> <h1>Contato</h1></div>

<h4 class="sent-notification"></h4>

<div class="formulario">
    <h1>BeatBox - Fale Conosco</h1>
    <h2>Teremos prazer em te responder!</h2>
    <br><br>
    <h3>Insira os seus dados nos campos abaixo:</h3>
    <br>
    <form action="sendEmail" method = "post">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Nome *</label>
            <textarea name = "name" class="form-control" rows="1" 
            placeholder="Nome completo" required></textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">E-mail *</label>
            <input name ="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com" required>
        </div>
        <div class="adress" class="form-group">
            <div class="form-group">
                <label for="inputAddress">Endereço</label>
                <input name="end" type="text" class="form-control" id="inputAddress" placeholder="Rua, nº">
            </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputCity">Cidade</label>
                  <input name="cidade" type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputEstado">Estado</label>
                  <select name="estado" id="inputEstado" class="form-control">
                    <option selected>Escolher</option>
                    <option>...</option>
                    <option>AC</option>
                    <option>AL</option>
                    <option>AP</option>
                    <option>AM</option>
                    <option>A</option>
                    <option>CE</option>
                    <option>DF</option>
                    <option>ES</option>
                    <option>GO</option>
                    <option>MA</option>
                    <option>MT</option>
                    <option>MS</option>
                    <option>MG</option>
                    <option>PA</option>
                    <option>PB</option>
                    <option>PR</option>
                    <option>PE</option>
                    <option>PI</option>
                    <option>RJ</option>
                    <option>RN</option>
                    <option>RS</option>
                    <option>RO</option>
                    <option>RR</option>
                    <option>SC</option>
                    <option>SP</option>
                    <option>SE</option>
                    <option>TO</option>
                  </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="inputCEP">CEP</label>
                  <input type="text" class="form-control" id="inputCEP">
                </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Assunto / motivo de contato *</label>
            <select name="subject" class="form-control" id="exampleFormControlSelect1" required>
                <option>Assunto</option>
                <option>Dúvidas</option>
                <option>Reclamação</option>
                <option>Sugestão</option>
                <option>Problemas no pedido online</option>
                <option>Solicitar cancelamento de produto</option>
                <option>Outros</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Mensagem *</label>
            <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="3" 
            placeholder="Obrigado pelo contato! Insira aqui sua mensagem e entraremos em contato assim que possível." required></textarea>
        </div>

        <button class="btn" type="submit" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
            <h4>Enviar</h4>
        </button>
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Email enviado com sucesso!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                </div>
            </div>
        </div>


    </form>
</div>
</div>




<div class="map">
    <h3>Localização da loja:</h3><br class="br-escondido">
    <div class="mapa"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.4589649922696!2d-43.34804368542829!
        3d-21.76249100350975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x989ca0f2617c3f%3A0x5a40d83fac2382b8!2sBox%20Elet
        r%C3%B4nica%20Musical!5e0!3m2!1spt-BR!2sbr!4v1603899898392!5m2!1spt-BR!2sbr" width="450" height="450" frameborder="0" 
        style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>
</div>
     
        <?php require 'app/views/site/partials/footer.php'; ?>   
