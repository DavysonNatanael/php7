<?php
    include_once "classes.php";
    include_once "validacao.php";
    
    if (isset($_POST['enviar'])) {
        $carro = new Carro();
        $carro->setModelo($_POST['modelo']);
        $carro->setMotor($_POST['motor']);
        $carro->setAno($_POST['ano']);
        
        $validacao = new Validacao();
        $validacao->setCPF($_POST['cpf']);
    }
?>

<html>
    <body>
        <form method="post">
            Modelo: <input type="text" name="modelo">
            <br><br>
            
            Motor: <input type="text" name="motor">
            <br><br>
            
            Ano: <input type="text" name="ano">
            <br><br>
            
            CPF: <input type="number" name="cpf">
            <br><br>
            
            <input type="submit" name="enviar" value="Enviar">
        </form>
        
        <table border 1>
            <thead>
                <tr>
                    <th>Modelo</th>
                    <th>Motor</th>
                    <th>Ano</th>
                    <th>CPF</th>
                </tr>
            </thead>
            <tbody>               
                <tr>
                    <?php
                    if (isset($carro)) {
                        //print_r($carro->exibir(modelo));
                        foreach ($carro->exibir() as $value) {
                    ?>
                    
                    <td>
                        <?= $value ?>
                    </td>
                    
                    <?php } } ?>
                    
                    <?php if (isset($validacao)) { ?>
                            <td>
                                <?= $validacao->getCPF(); ?>    
                            </td>
                    <?php } ?>
                </tr>
            </tbody>
        </table>
    </body>
</html>