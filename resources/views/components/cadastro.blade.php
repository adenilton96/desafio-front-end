<x-conteudo title="cadastro">
    <div class="row margin">
        <!-- Transaction Form -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Cadastrar transações</div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="valor" class="form-label">Valor</label>
                            <input type="text" class="form-control" id="valor" placeholder="Valor">
                        </div>
                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descrição</label>
                            <textarea class="form-control" id="descricao" rows="3" placeholder="Descrição"></textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Registrar</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Summary Section -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Resumo</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="amount negative">- R$46,20</span>
                            <span>Lorem ipsum dolor sit amet, consectetur</span>
                        </li>
                        <li class="list-group-item">
                            <span class="amount positive">+ R$786,39</span>
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing Duis quam magna,
                                dignissim quis nunc.</span>
                        </li>
                        <li class="list-group-item">
                            <span class="amount positive">+ R$46,20</span>
                            <span>Lorem ipsum dolor sit amet, consectetur</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
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

        .list-group-item {
            display: flex;
            justify-content: space-between;
        }

        .list-group-item .amount {
            font-weight: bold;
        }

        .negative {
            color: red;
        }

        .positive {
            color: green;
        }
    </style>
</x-conteudo>