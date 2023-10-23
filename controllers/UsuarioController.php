<?php
require_once 'models/UsuarioModel.php';


class UsuarioController {
    private $usuarioModel;

    public function __construct($pdo) {
        $this->usuarioModel = new UsuarioModel($pdo);
    }

    public function criarUsuario($usuario, $senha, $email) {
        $this->usuarioModel->criarUsuario($usuario, $senha, $email);
    }

    public function listarUsuarios() {
        return $this->usuarioModel->listarUsuarios();
    }

    public function exibirListaUsuarios() {
        $usuarios = $this->usuarioModel->listarUsuarios();
        include 'views/usuarios/lista.php';
    }

    public function atualizarUsuario($usuario, $senha, $email, $id_usuario) {
        $this->usuarioModel->atualizarUsuario($usuario, $senha, $email, $id_usuario);
    }

    public function excluirUsuario ($id_usuario) { 
        $this->usuarioModel->excluirUsuario($id_usuario);
}

}

    
?>