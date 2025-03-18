<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carteirinha de Estudante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .carteirinha {
            background-image: url('../imagens/carterinha photo.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            width: 800px;
            height: 500px;
            color: black;
            font-weight: bold;
            position: relative;
        }
        .campo {
            position: absolute;
        }
        .nome { top: 165px; left: 325px; width: 300px; }
        .instituicao { top: 225px; left: 325px; width: 300px; }
        .cse { top: 285px; left: 325px; width: 300px; }
        .rg { top: 325px; left: 360px; width: 120px; }
        .cpf { top: 355px; left: 360px; width: 120px; }
        .matricula { top: 355px; left: 545px; width: 120px; }
        .data { top: 355px; left: 650px; width: 120px; }
        .emi { top: 400px; left: 415px; width: 120px; }
        .val { top: 400px; left: 645px; width: 120px; }
    </style>
</head>
<body class="container py-5">
    <div class="text-center mb-4">
        <h1>Insira seus dados para gerar a carteirinha</h1>
    </div>

    <?php if(isset($_GET['nome'])): ?>
        <div class="carteirinha mx-auto">
            <div class="campo nome"><?php echo htmlspecialchars($_GET['nome']); ?></div>
            <div class="campo instituicao"><?php echo htmlspecialchars($_GET['instituicao']); ?></div>
            <div class="campo cse"><?php echo htmlspecialchars($_GET['cse']); ?></div>
            <div class="campo rg"><?php echo htmlspecialchars($_GET['rg']); ?></div>
            <div class="campo cpf"><?php echo htmlspecialchars($_GET['cpf']); ?></div>
            <div class="campo matricula"><?php echo htmlspecialchars($_GET['matricula']); ?></div>
            <div class="campo data"><?php echo htmlspecialchars($_GET['data']); ?></div>
            <div class="campo emi"><?php echo htmlspecialchars($_GET['emi']); ?></div>
            <div class="campo val"><?php echo htmlspecialchars($_GET['val']); ?></div>
        </div>
    <?php endif; ?>

    <form method="GET" class="mt-4 p-4 border rounded bg-light">
        <div class="mb-3">
            <label class="form-label">Nome completo</label>
            <input type="text" name="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Instituição de ensino</label>
            <input type="text" name="instituicao" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Curso/Série/Ensino</label>
            <input type="text" name="cse" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">RG</label>
            <input type="text" name="rg" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">CPF</label>
            <input type="text" name="cpf" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Matrícula</label>
            <input type="text" name="matricula" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Data de nascimento</label>
            <input type="date" name="data" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Emitida em</label>
            <input type="date" name="emi" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Validade</label>
            <input type="date" name="val" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary w-100">Gerar Carteirinha</button>
    </form>
</body>
</html>

