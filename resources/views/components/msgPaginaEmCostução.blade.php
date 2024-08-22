<x-conteudo title="construção">
    <div class="construction">
        <div class="loader"></div>
        <h1>Em Construção</h1>
        <p>Nossa página está sendo desenvolvida, volte em breve!</p>
    </div>

    <style>
        .sidebar {
            width: min-content;
        }

        .img-sidebar {
            opacity: 1;
        }

        body {
            background-color: #e7e7e7;
        }

        .construction {
            text-align: center;
            color: #333;
            margin-top: 15%;
        }

        .construction h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .construction p {
            font-size: 18px;
            margin-bottom: 40px;
        }

        .loader {
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 120px;
            height: 120px;
            animation: spin 2s linear infinite;
            margin: 0 auto 20px;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</x-conteudo>