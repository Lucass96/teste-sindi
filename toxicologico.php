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
                <h2>Exame Toxicológico Obrigatório</h2>
                <p>O exame toxicológico voltou a ser exigido desde 1º de julho de 2023 para condutores das categorias C,
                    D e E. Os condutores com idade inferior a 70 anos deverão realizar o exame a cada dois anos e meio.
                    Eles terão até o final do ano de 2023 para cumprir essa obrigação. É fundamental que os condutores
                    com exames pendentes acompanhem o calendário de escalonamento, que será estabelecido pela SENATRAN,
                    para evitar multas no valor de R$ 1.467,35, a inclusão de 7 pontos na carteira e a abertura de
                    processos administrativos para suspensão de suas habilitações.</p>
            </div>

            <div class="section">
                <h2>Penalidades e Consequências</h2>
                <p>Também passaram a vigorar as penalidades previstas no Código de Trânsito Brasileiro para esses
                    condutores, conforme os artigos 165-B e 165-C.</p>
                <p>A multa por não realizar o exame será considerada gravíssima, resultando na adição de sete pontos na
                    carteira e em uma penalidade de R$ 1.467,35.</p>
                <p>Em caso de reincidência no período de até 12 meses, a multa será de R$ 2.934,70, e o direito de
                    dirigir poderá ser suspenso.</p>
            </div>

            <div class="section">
                <h2>Implicações da Não Realização do Exame</h2>
                <p>A nova lei estabelece que a não realização do exame toxicológico para obtenção e renovação da CNH
                    impedirá o motorista de obter ou renovar sua habilitação até que apresente um resultado negativo em
                    um novo exame. Além disso, a pessoa não poderá ser admitida como motorista em empresas de
                    transportes.</p>
            </div>

            <div class="section">
                <h2>Validade da CNH</h2>
                <p>A validade da CNH é de 10 anos para condutores de até 50 anos de idade, 5 anos para condutores de 50
                    a 70 anos e 3 anos para condutores acima de 70 anos.</p>

                <p>
                    Exame Toxicológico para renovação da CNH através do Sindifretur
                </p>
                <p>Associados R$50,00 (cinquenta reais) para maiores informações ligue para o sindicato</p>
            </div>

            <div class="section">
                <h2>Pontuação da CNH</h2>
                <p>Em relação à pontuação necessária para a suspensão da CNH, estão valendo as seguintes regras: 20
                    pontos para condutores que cometeram duas infrações gravíssimas em 12 meses; 30 pontos para quem
                    tiver cometido uma infração gravíssima; e 40 pontos sem infração gravíssima. Eis algumas das
                    infrações consideradas gravíssimas:</p>
                <ul>
                    <li>Dirigir com carteira vencida há mais de 30 dias.</li>
                    <li>Avançar sinal vermelho.</li>
                    <li>Dirigir alcoolizado.</li>
                    <li>Dirigir acima da velocidade a mais de 50% da velocidade máxima permitida.</li>
                    <li>Ultrapassagens irregulares.</li>
                </ul>
                <p>Parar em ciclovia ou ciclofaixa passou a ser infração grave, sujeita a multa de R$ 195,23 e cinco
                    pontos na CNH.</p>
                <p>Obs.: O limite de 40 pontos sem considerar a gravidade da infração é válido somente para motoristas
                    profissionais.</p>
                <p>Essas mudanças valem somente para CNHs expedidas após 12 de abril de 2021.</p>
            </div>

            <div class="section">
                <h2>Cuidado com as Multas de Trânsito</h2>
                <p>Além dos altos valores, o maior problema ainda é o acúmulo de pontos na carteira de habilitação, pois
                    ao atingir 40 (quarenta) pontos, os infratores são notificados a entregar a carteira de habilitação,
                    que poderá ser suspensa de 01 (um) a 12 (doze) meses dependendo da gravidade das multas, e só voltam
                    a dirigir após passarem pelo Curso de Reciclagem de Motoristas.</p>
                <p>Os motoristas que forem flagrados embriagados, em situações de homicídio culposo ou lesão corporal
                    culposa, poderão receber uma pena de prisão que não pode ser substituída por outras mais leves.</p>
                <p>Quem insistir em dirigir com a carteira suspensa e for flagrado ao volante terá a carteira
                    definitivamente cassada e poderá responder a inquérito policial.</p>
                <p>No nosso caso o companheiro ainda perde o emprego.</p>
                <p>As empresas devem comunicar e fornecer cópia da Notificação da Autuação e também da Notificação de
                    Imposição da Penalidade, para que através do sindicato o motorista possa entrar com recurso.</p>
            </div>

            <div class="section">
                <h2>Faça Valer o Seu Direito</h2>
                <p>Para recorrer da multa o motorista associado deverá encaminhar ao Sindicato:</p>
                <ul>
                    <li>Cópia da Infração (Frente e verso)</li>
                    <li>Cópia do Documento do Veículo</li>
                    <li>Cópia da Habilitação (CNH)</li>
                </ul>
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
    <script>
        document.addEventListener("DOMContentLoaded", function () {
          // Captura todos os links com href="#"
          var scrollLinks = document.querySelectorAll('a[href="#"]');
        
          // Adiciona um ouvinte de evento de clique a cada link
          scrollLinks.forEach(function (link) {
            link.addEventListener("click", function (e) {
              e.preventDefault(); // Impede o comportamento padrão de clicar em um link
        
              var targetId = link.getAttribute("data-scroll-target"); // Obtém o ID do alvo da rolagem
              var targetElement = document.getElementById(targetId); // Encontra o elemento alvo
        
              if (targetElement) {
                // Rola a página até o elemento alvo
                window.scrollTo({
                  top: targetElement.offsetTop,
                  behavior: "smooth", // Rola suavemente
                });
              }
            });
          });
        });
        </script>
    
</body>

</html>