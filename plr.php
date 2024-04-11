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
            <div class="section">
                <h2>Valor do PLR - Participação nos Lucros e Resultados Fretamento e Turismo da Grande São Paulo</h2>
                <p>Período de 2016 a 2022</p>
            </div>

            <div class="section">
                <h2>Maio de 2016 a Abril de 2017</h2>
                <p>Valor: R$ 816,41 para os motoristas e para as demais funções percentual de 34,98%</p>
                <p>Pagamento em 2 (duas) parcelas: 1ª parcela em 30/11/2016 e a segunda até no máximo 30/05/2017.</p>
                <p>OBS: No ano de 2016 não houve alteração no valor da PLR.</p>
            </div>

            <div class="section">
                <h2>Maio de 2017 a Abril de 2018</h2>
                <p>Valor: R$ 408,21 para os motoristas e para as demais funções percentual de 17,49%</p>
                <p>Pagamento em 2 (duas) parcelas: 1ª parcela em 30/11/2017 e a segunda até no máximo 30/05/2018.</p>
                <p>OBS: Houve redução de 50%.</p>
            </div>

            <div class="section">
                <h2>Maio de 2018 a Abril de 2019</h2>
                <p>Valor: R$ 510,26 para os motoristas e para as demais funções percentual de 21,86%</p>
                <p>Pagamento em 2 (duas) parcelas: 1ª parcela em 30/11/2018 e a segunda até no máximo 30/05/2019.</p>
            </div>

            <div class="section">
                <h2>Maio de 2019 a Abril de 2020</h2>
                <p>Valor: R$ 536,13 para os motoristas e para as demais funções percentual de 22,06%</p>
                <p>Pagamento em 2 (duas) parcelas: 1ª parcela em 30/11/2019 e a segunda até no máximo 30/05/2020.</p>
            </div>

            <div class="section">
                <h2>Esclarecimento sobre o pagamento da PLR</h2>
                <h3>PLR/2020</h3>
                <p>R$ 536,13 (Quinhentos e trinta e seis reais e treze centavos) para motoristas, e o percentual de
                    21,86% do salário para demais funções.</p>
                <p>1ª parcela: Novembro/2021</p>
                <p>2ª parcela: Novembro/2022</p>
            </div>

            <div class="section">
                <h3>PLR/2021</h3>
                <p>R$ 536,13 (Quinhentos e trinta e seis reais e treze centavos) para motoristas, e o percentual de
                    21,86% do salário para as demais funções.</p>
                <p>1ª parcela: Maio/2022</p>
                <p>2ª parcela: Maio/2023</p>
            </div>

            <div class="section">
                <h3>PLR 2022</h3>
                <p>R$ 620,00 (Seiscentos e vinte reais) deve ser pago aos motoristas em geral até 30/04/2023, nas demais
                    funções o percentual de 21,86% do salário.</p>
            </div>

            <div class="section">
                <h3>PLR 2023</h3>
                <p>R$ 700,00 (Setecentos reais) deve ser pago aos motoristas em geral até 30/03/2024, nas demais funções
                    o percentual de 22% do salário.</p>
            </div>
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