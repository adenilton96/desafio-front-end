<x-conteudo title="cadastro">
    <div class="row margin " id="divCadastro">
        <!-- Transaction Form -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastrar transações</div>
                <div class="card-body">

                    <form action="/cadastro/transacao" method="GET">
                        <div class="mb-3">
                            <label for="valor" class="form-label">Valor</label>
                            <input type="text" class="form-control inputValor" name="valor" id="valor" label="valor" placeholder="Valor">
                        </div>
                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descrição</label>
                            <textarea class="form-control" name="descricao" id="descricao" label="descricao" rows="3" placeholder="Descrição"></textarea>
                        </div>
                        <div class="mb-3 div-btn">
                            <button type="submit" id="bnt-login" class="btn btn-outline-info btn-block">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Resumo</div>
                <div class="card-body">
                    <div class="timeline">
                        @foreach ($listaResumo as $itens)
                        <div class="timeline-item">
                            <div class="timeline-icon {{$itens["active"] }}"></div>
                            <div class="timeline-content">
                                <span class="amount {{$itens["active"] }}">{{$itens["value"]}}</span>
                                <p>{{$itens["description"]}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('divCadastro').classList.add('show');
            document.getElementById('valor').addEventListener('input', function(e) {
                let value = e.target.value;
                value = value.replace(/[^0-9]/g, '');
                value = (parseFloat(value) / 100).toFixed(2);
                value = value.replace('.', ',');
                e.target.value = value;
            });
        });
    </script>
    <style>
        .timeline {
            border-left: 2px dotted #d0d0d0;
            padding-left: 20px;
            position: relative;
        }

        .timeline-item {
            margin-bottom: 20px;
            position: relative;
        }

        .timeline-icon {
            width: 10px;
            height: 10px;
            background-color: #00bfa5;
            border-radius: 50%;
            position: absolute;
            left: -25px;
            top: 5px;
        }

        .timeline-icon.negative {
            background-color: #f44336;
        }

        .timeline-content {
            padding-left: 10px;
        }

        .amount {
            font-size: 16px;
            font-weight: bold;
        }

        .amount.positive {
            color: #4caf50;
        }

        .amount.negative {
            color: #f44336;
        }

        #divCadastro {
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        #divCadastro.show {
            opacity: 1;
        }

        .sidebar {
            width: min-content;
        }

        .img-sidebar {
            opacity: 1;
        }

        body {
            background-color: #e7e7e7;
        }

        .margin {
            margin: 10px;
        }

        .row-nav {
            background-color: #f8f9fa;
            height: 89px;
        }

        .card-header {
            background-color: #00acc1;
            color: white;
            font-weight: bold;
        }

        .btn {
            font-size: 15px;
            padding: 10px 100px;
            border-radius: 20px;
            color: #000;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: inline-block;

        }

        .btn:hover {
            color: aliceblue;
        }

        .div-btn {
            text-align: end;
        }

        .inputValor {
            width: auto;
        }
    </style>
</x-conteudo>
