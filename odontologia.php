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
                <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

            <div class="section-title">
            <span>Odontologia</span>
            <h2>Odontologia</h2>
            <p>Serviços prestados aos nossos associados</p>
            <p>Odontologia</p>
            </div>

            <div class="row">
            <div class="col-md-6">
                <div class="icon-box" id="lista">
                    <i class="bi bi-calendar4-week"></i>
                    <h4><a href="#">Odontologia Gratuita</a></h4>
                    <p>Para Associados e dependentes - (esposa e filhos até 14 anos):</p>
                    <p class="list-item">Extrações.</p>
                    <p class="list-item">Restauração.</p>
                    <p class="list-item">Profilaxia.</p>
                    <p class="list-item">Aplicação de Flúor.</p>
                    <p class="list-item">Radiologia Periapical</p>
                </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
                <div class="icon-box">
                    <i class="bi bi-calendar4-week"></i>
                    <h4><a href="#">Odontologia Gratuita - Lapa</a></h4>
                    <p>CLÍNICA IDENT PRIME - UNIDADE CLEMENTE ALVARES - Dr. CAIO IIDA<br>
                    Endereço: Rua Clemente Alvares, 103 - Lapa<br>
                    São Paulo - SP<br>
                    Fone: 11 3647-8492 (Fixo e WhatsApp)</p>
                </div>
            </div>

            <div class="col-md-6 mt-4 mt-md-0">
                <div class="icon-box">
                <i class="bi bi-calendar4-week"></i>
                <h4><a href="#">Odontologia Gratuita - Guarulhos</a></h4>
                <p>CLÍNICA GUARUDENT – Drº ALEXANDRE T. KIMOTO<br>
                    Endereço: Rua Luiz Faccini,248 – Centro – Guarulhos.<br>
                    São Paulo - SP<br>
                    Fones: 2409-9088 / 2409-9388</p>
                </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
                <div class="icon-box">
                <i class="bi bi-calendar4-week"></i>
                <h4><a href="#">Odontologia Gratuita - Santo Amaro</a></h4>
                <p>CLÍNICA DENTÁRIA Dr. Caio<br>
                    Endereço: Largo 13 de Maio, 174 – 2º andar – Santo Amaro<br>
                    São Paulo - SP<br>
                    Fone: 5681-6006</p>
                </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
                <div class="icon-box">
                <i class="bi bi-calendar4-week"></i>
                <h4><a href="#">Odontologia Gratuita - Suzano</a></h4>
                <p>CLÍNICA DENTÁRIA Drª CLAUDIA AMARAL<br>
                    Endereço: Rua Vinte e Sete de Outubro, 60 – Centro – Suzano<br>
                    Fones: 4746-7800 / 4746-2924.</p>
                </div>
            </div>

            <div class="col-md-6 mt-4 mt-md-0">
                <div class="icon-box">
                <i class="bi bi-calendar4-week"></i>
                <h4><a href="#">Odontologia Gratuita - Tucuruvi</a></h4>
                <p>CLÍNICA DENTÁRIA Drª SILEINE H. YAHARA<br>
                    Endereço: Av. Mazzei, 166 - Tucuruvi<br>
                    Fone: 2267-0567</p>
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