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
            <div class="section-title">
                <h2>ACORDO MOGI SUZANO - 2023</h2>
            </div>
            <div class="info text-center">
                <h3>8,12%</h3>
                <p>(oito, vírgula doze por cento)</p>
                <p>Essa foi a conquista salarial dos trabalhadores.</p>
            </div>
            <div class="info text-center">
                <h3>23,81%</h3>
                <p>(vinte e três vírgula oitenta e um por cento)</p>
                <p>No VR (Vale-Refeição) a partir de: julho</p>
            </div>
            <div class="info text-center">
                <h3>P.L.R./2023 + 12,9% = R$ 700,00</h3>
                <p>Que deve ser pago aos motoristas em geral, até: 30/03/2024</p>
                <p>Nas demais funções o percentual de: 22% do salário.</p>
            </div>
            <div class="section-title">
                <h2>Vejam abaixo como ficou o reajuste salarial/2023</h2>
            </div>
            <div class="info text-center">
                <h3>REAJUSTE SALARIAL À PARTIR DE 1º DE MAIO</h3>
                <ul>
                    <li>6% (seis por cento) a partir de 1º de maio</li>
                    <li>2% (dois por cento) partir de 1º de novembro</li>
                    <li>Totalizando: 8,12% (oito virgula doze por cento)</li>
                    <li>Motoristas e demais funções</li>
                </ul>
            </div>
            <div class="section-title">
                <h2>PISO SALARIAL DO MOTORISTA - ÔNIBUS</h2>
            </div>
            <div class="table-container">
                <table>
                    <tr>
                        <th></th>
                        <th>Maio/2023</th>
                        <th>Hora Normal</th>
                        <th>H. Extra c/ 50%</th>
                        <th>H. Extra c/ 100%</th>
                    </tr>
                    <tr>
                        <td>Piso Salarial</td>
                        <td>R$ 3.111,38</td>
                        <td>R$ 14,14</td>
                        <td>R$ 21,21</td>
                        <td>R$ 28,28</td>
                    </tr>
                    <tr>
                        <td>Novembro/2023</td>
                        <td>R$ 3.173,62</td>
                        <td>R$ 14,42</td>
                        <td>R$ 21,63</td>
                        <td>R$ 28,84</td>
                    </tr>
                </table>
            </div>
            <div class="section-title">
                <h2>VR - VALE-REFEIÇÃO</h2>
            </div>
            <div class="info text-center">
                <h3>23,81% a partir de julho/2023</h3>
                <p>O valor de cada Ticket será: R$ 26,00 (vinte e seis reais)</p>
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