<?php
class UsuarioModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function criarUsuario($usuario, $senha, $email) {
        $sql = "INSERT INTO usuarios (usuario, senha, email) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$usuario, $senha, $email]);
    }

    public function listarUsuarios() {
        $sql = "SELECT * FROM usuarios";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function atualizarUsuario($usuario, $senha, $email, $id_usuario) {
        $sql = "UPDATE usuarios SET usuario = ?, senha = ?  email = ? WHERE id_usuario = ? ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$usuario, $senha, $email, $id_usuario]);
    }

    public function excluirUsuario($id_usuario) {
        $sql = "DELETE FROM usuarios WHERE id_usuario = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id_usuario]);
    }

}
?>