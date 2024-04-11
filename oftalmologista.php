<!DOCTYPE html>
<html lang="en">

<?php include '../SINDIFRETUR/templates/cabecalho.php'; ?>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.css" />
    <style>
        body {
            background-color: #ffffff;
            background-image: url('caminho_da_imagem.png');
            /* Substitua 'caminho_da_imagem.png' pelo caminho correto da imagem de fundo */
            background-size: cover;
        }

        .map {
            height: 350px;
        }

        #content {
            border: 1px solid #ddd;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 0 auto;
            max-width: 80%;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-title h2 {
            font-size: 36px;
            font-weight: bold;
            color: #000000;
            margin-bottom: 10px;
        }

        .section-title p {
            font-size: 18px;
            color: #000000;
        }

        .info {
            margin-bottom: 30px;
        }

        .info h3 {
            font-size: 24px;
            font-weight: bold;
            color: #000000;
            margin-bottom: 10px;
        }

        .info p {
            font-size: 18px;
            color: #000000;
        }

        .table-container {
            margin-top: 20px;
        }

        .table-container table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table-container th,
        .table-container td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .info ul {
            padding-left: 0;
            list-style-position: inside;
            margin-top: 5px;
        }

        .section-background {
            position: relative;
        }

        .section-background::before {
            content: "";
            display: block;
            position: absolute;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url(assets/img/slide/sindi.png);
            background-size: 30%;
            opacity: 0.1;
            z-index: -1;
        }
    </style>


<body>

    <!-- ======= Content Section ======= -->
    <section id="content" class="section-background">
        <div class="container">
            <section id="services" class="services section-bg">
                <div class="container">
          
                  <div class="section-title">
                    <span>Oftalmologista</span>
                    <h2>Oftalmologista</h2>
                    <p>Serviços prestados aos nossos associados</p>
                    <p>Oftalmologia</p>
                  </div>
          
                  <div class="row">
                    <div class="col-md-6">
                      <div class="icon-box">
                        <i class="bi bi-briefcase"></i>
                        <h4><a href="#">Contrato e prestação de serviços</a></h4>
                        <p>No ato da consulta o associado ou dependente, deverá exibir:<br>
                          o ultimo Hollerit, constando o desconto da mensalidade, alem da carteira de associado
                          e documento dos dependentes (esposa e filhos até 14 anos).<br><br>
                          (informações ligar para o Sindicato – Fones: 3255.0039 – 3255.9502)<br><br>
                          Obs: Nas consultas oftalmológicas e/ou odontológicas marcadas com antecedência o NÃO comparecimento,
                          acarretará em desconto do valor da consulta do salário do associado.</p>
                      </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-card-checklist"></i>
                            <h4><a href="#">Oftalmologista em São Paulo</a></h4>
                            <p>CLINICA DE OLHOS A.S. S/C LTDA<br>
                              Endereço: Rua Vergueiro, 2045, Cj 904- Vila Mariana – São Paulo<br>
                              Fone: 3331-5152</p>
                          </div>
                    </div>
          
                </div>
              </section><!-- End Services Section -->
        </div>
    </section><!-- End Content Section -->

    <!-- ======= Footer ======= -->
    <?php include '../SINDIFRETUR/templates/footer.php'; ?>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>