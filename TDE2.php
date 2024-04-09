<?php
//classe funcionário
class Funcionario{
  public $nome;
  protected $salario;
  public $cargo;
  

  

  public function __construct($nome,$salario,$cargo){
    $this->nome = $nome;
    $this->salario = $salario;
    $this->cargo = $cargo;
  }//construtor funcionário




  //calcula salário

  public function calculaSalario(){
    return $this->salario*1.5;

  }


  public function SetCargo($cargo){
    $this->cargo = $cargo;
    //set cargo
  }

  public function GetGargo(){
    return $this->cargo = $cargo;
  }
//set cargo

  public function SetNome($nome){
    $this->nome = $nome;
  }//set nome

  public function SetSalario($salario){
    $this->salario = $salario;
  }
  //set nome

}

class Professor extends Funcionario{
  public $turno;
  public $disciplina;
  //classe de professor
}
//classe aluno
class Aluno{
  public $nome;
  public $matricula;
  public $notas = array();
//cadastro de alunos
  public function CadastraAluno($aluno){
    $aluno= array();
    $this->aluno = $aluno;
  }
//cadastro de aluno em array 
  public function __construct($nome, $matricula) {
    $this->nome = $nome;
        $this->matricula = $matricula;
    }
//construtor classe aluno
    public function GetNome() {
        return $this->nome;
    }//get nome

    public function GetMatricula() {
        return $this->matricula;
    }//get matrícula

    public function AdicionarNota($nota) {
        array_push($this->notas, $nota);
    }

    // Método para definir a mensalidade
    public function SetMensalidade($mensalidade) {
        $this->mensalidade = $mensalidade;
    }

    // Método para obter a mensalidade
    public function GetMensalidade() {
        return $this->mensalidade;
    }
}

//classe disciplina

class Disciplina {
    private $nome;
    private $professor;

    public function __construct($nome, $professor) {
        $this->nome = $nome;
        $this->professor = $professor;
    }//construtor disciplina

    public function GetNome() {
        return $this->nome;
    }//get nome
//classe de disciplina
    public function GetProfessor() {
        return $this->professor;
    }
}

// Função para calcular a média de um aluno
function calcularMedia($notas) {
    $soma = array_sum($notas);
    $quantidade = count($notas);
    return $soma / $quantidade;
}


//classe de aluno getters e setters




class Biblioteca{
  public $livro;
  public $id_livro;

//classe de biblioteca


public function __construct($livro,$id_livro){
  $this->livro= $livro;
  $this->id_livro = $id_livro;
   //construtor bibilioteca
} 
   //getters e seters livros
public function GetLivro(){
return $this->livro;
}
  public function GetIdLivro(){
    return $this->id_livro;
  }
  

}

//teste de calculo de salário de professor:

//$professor1 = new Professor();
//$professor1-> SetNome("Jonh");
//$professor1-> SetSalario(50000);
//echo $professor1-> CalculaSalario();


//TESTES DE FUNÇÕES E MÉTODOS:

//$professor1 = new Professor("Jonh",100000,"professor");
//echo $professor1-> CalculaSalario();
//$biblioteca1 = New Biblioteca("logica matematica",18392);
//echo $biblioteca1->GetLivro();
//$aluno = new Aluno("João", "12345");
//$aluno->adicionarNota(9.5);
//$aluno->adicionarNota(8.7);
//$aluno->setMensalidade(500.00);
//echo $aluno->getMensalidade();
