<x-conteudo title="Home">

    <body>
        <div class="welcome-container esconder">
            <h1>Bem-vindo</h1>
            <p>Estamos felizes em tê-lo aqui.</p>
        </div>
    </body>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                document.querySelector('.amimacao-sidebar').style.width = '130px';
            }, 500);
            setTimeout(function() {
                var elements = document.querySelectorAll('.img-sidebar');
                elements.forEach(function(element) {
                    element.classList.add('animacao');
                });

                var elements = document.querySelectorAll('body');
                elements.forEach(function(element) {
                    element.style.backgroundColor = '#e7e7e7';
                });

                var elements = document.querySelectorAll('.esconder');
                elements.forEach(function(element) {
                    element.classList.remove('esconder');
                });
            }, 2000);
        });
    </script>

    <style scoped>
        .esconder {
            display: none;
        }

        body {
            background-color: #00bcd4;
        }

        .welcome-container {
            text-align: center;
            margin-top: 15%;
        }

        .welcome-container h1 {
            font-size: 60px;
            margin-bottom: 20px;
            animation: fadeIn 3s ease-in-out;
        }

        .welcome-container p {
            font-size: 20px;
            margin-bottom: 20px;
            animation: fadeIn 4s ease-in-out;
        }

        .welcome-container a {
            font-size: 18px;
            color: #3498db;
            text-decoration: none;
            border: 2px solid #3498db;
            padding: 10px 20px;
            border-radius: 25px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .welcome-container a:hover {
            background-color: #3498db;
            color: #ffffff;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animacao {
            font-size: 50px;
            color: #3498db;
            animation: slideIn 1s ease-out forwards;
            position: relative;
            left: -150px;
        }

        @keyframes slideIn {
            0% {
                left: -150px;
                opacity: 0;
            }

            100% {
                left: 0;
                opacity: 1;
            }
        }
    </style>
</x-conteudo>
