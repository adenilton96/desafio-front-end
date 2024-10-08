<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style scoped>
        body {
            font-family: 'Roboto', sans-serif;
            color: #6f6f6f;
        }

        .menuTop {
            background-color: #f8f9fa;
            height: 90px;
            width: 114%;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- componente do menu lateral -->
            <x-sidebar></x-sidebar>
            <div class="col-10">
                 <!-- componente do header -->
                <x-header title="{{$title}}"></x-header>
                <!-- comteudo -->
                <div class="col-md-11 content">
                    {{$slot}}
                </div>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
