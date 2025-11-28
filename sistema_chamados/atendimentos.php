<?php 
require_once 'header.php'; 


$clientes = listarTabela($pdo, 'clientes');
$tecnicos = listarTabela($pdo, 'tecnicos');
$tipos = listarTabela($pdo, 'tipos_chamados');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    criarAtendimento(
        $pdo, 
        (int)$_POST['id_cliente'], 
        (int)$_POST['id_tecnico'], 
        (int)$_POST['id_tipo'], 
        $_POST['data'], 
        $_POST['descricao']
    );
    echo "<script>window.location='atendimentos.php';</script>";
}

$lista = listarAtendimentosDetalhado($pdo);
?>

<div class="card mb-4">
    <div class="card-header bg-secondary text-white">Registrar Novo Atendimento</div>
    <div class="card-body">
        <form method="post" class="row">
            <div class="col-md-3">
                <label>Cliente:</label>
                <select name="id_cliente" class="form-control" required>
                    <option value="">Selecione...</option>
                    <?php foreach ($clientes as $c) echo "<option value='{$c['id']}'>{$c['nome']}</option>"; ?>
                </select>
            </div>
            <div class="col-md-3">
                <label>Técnico:</label>
                <select name="id_tecnico" class="form-control" required>
                    <option value="">Selecione...</option>
                    <?php foreach ($tecnicos as $t) echo "<option value='{$t['id']}'>{$t['nome']}</option>"; ?>
                </select>
            </div>
            <div class="col-md-3">
                <label>Tipo:</label>
                <select name="id_tipo" class="form-control" required>
                    <option value="">Selecione...</option>
                    <?php foreach ($tipos as $tp) echo "<option value='{$tp['id']}'>{$tp['descricao']}</option>"; ?>
                </select>
            </div>
            <div class="col-md-3">
                <label>Data/Hora:</label>
                <input type="datetime-local" name="data" class="form-control" required>
            </div>
            <div class="col-md-12 mt-3">
                <label>Descrição do Problema:</label>
                <input type="text" name="descricao" class="form-control" placeholder="Descreva o problema..." required>
            </div>
            <div class="col-md-12 mt-3">
                <button type="submit" class="btn btn-primary btn-block">Registrar Atendimento</button>
            </div>
        </form>
    </div>
</div>

<h4>Histórico de Atendimentos</h4>
<table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Data</th>
            <th>Cliente</th>
            <th>Técnico</th>
            <th>Tipo</th>
            <th>Problema Relatado</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($lista as $atd): ?>
        <tr>
            <td><?php echo date('d/m/Y H:i', strtotime($atd['data_atendimento'])); ?></td>
            <td><?php echo htmlspecialchars($atd['cliente']); ?></td>
            <td><?php echo htmlspecialchars($atd['tecnico']); ?></td>
            <td><?php echo htmlspecialchars($atd['tipo']); ?></td>
            <td><?php echo htmlspecialchars($atd['descricao_problema']); ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once 'footer.php'; ?>