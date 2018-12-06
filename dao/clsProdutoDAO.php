<?php


class ProdutoDAO {
    public static function inserir($produto){
        $sql = "INSERT INTO produtos "
                . " ( nome, preco, quantidade) VALUES "
                . " ( '".$produto->getNome()."' , "
                . "   '".$produto->getPreco()."' , "
                . "   '".$produto->getQuantidade()."'  "
                . "  ); ";
        
        Conexao::executar( $sql );
    }
    
    public static function editar($produto){
        $sql = "UPDATE produtos SET " 
                . " nome =        '".$produto->getNome()."' , "
                . " preco =       '".$produto->getPreco()."' , "
                . " quantidade =  '".$produto->getQuantidade()
                . " WHERE id = ".$produto->getId();
        
        Conexao::executar( $sql );
    }
    
    
    public static function excluir($produto){
        $sql = "DELETE FROM produtos "
             . " WHERE id =  ".$produto->getId();
        
        Conexao::executar( $sql );
    }
    
    public static function getProdutos(){
        $sql = " SELECT p.id, p.nome, p.preco, p.quantidade"
             . " FROM produtos p "
             . " ORDER BY p.nome ";
        
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        while( list( $cod, $nome, $preco, $quantidade) = mysqli_fetch_row($result) ){
            $produto = new Produto;
            $produto->setId($cod);
            $produto->setNome($nome);
            $produto->setPreco($preco);
            $produto->setQuantidade($quantidade);
  
            $lista->append($produto);
        }
        
        return $lista;
    }
    
    
   public static function getProdutoById( $id ){
        $sql = " SELECT p.id, p.nome, p.preco, p.quantidade"
             . " FROM produtos p "
             . " WHERE p.id = ".$id 
             . " ORDER BY p.nome ";
        
        $result = Conexao::consultar($sql);
      
        list( $cod, $nome, $preco, $quantidade) = mysqli_fetch_row($result);
            $produto = new Produto();
            $produto->setId($cod);
            $produto->setNome($nome);
            $produto->setPreco($preco);
            $produto->setQuantidade($quantidade);
  
            
        return $produto;
    }
}
