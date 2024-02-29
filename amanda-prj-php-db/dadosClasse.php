<?php
include "conection.php";
class dadosClasse {

    public static function dadosUsuarios($conexao, $login, $senha)
    {
        $sqlDados = "SELECT * FROM tb_usuarios WHERE TRUE AND login = '$login' AND senha = '$senha'";
    
        $sql_conexao = $conexao->query($sqlDados) or die($conexao->error);
    
        return $sql_conexao;
    }

    public static function dadosCidades($conexao)
    {
        $sqlDados = "SELECT * FROM tb_cidades";
    
        $sql_conexao = $conexao->query($sqlDados) or die($conexao->error);
    
        return $sql_conexao;
    }

    public static function inserirCadastro($conexao, $fkCidade, $nomeUsu, $cpf, $nascimento, $telefone, $endereco, $numcasa, $bairro, $login, $senha, $recepcao)
    {
        $ativo = 1;
        
        $sqlInserUsuario = "INSERT INTO tb_usuarios
        (fk_id_tb_cidades, nome_usuario, cpf, data_nascimento, telefone, endereco, num_casa, bairro, ativo, login, senha, tipo_usuario)
        VALUE
        ('$fkCidade', '$nomeUsu', '$cpf', '$nascimento', '$telefone', '$endereco', '$numcasa', '$bairro', '$ativo', '$login', '$senha', '$recepcao');";
    
        $sql_conexao = $conexao->query($sqlInserUsuario) or die($conexao->error);
    
        return $sql_conexao;
    }



 }

?>