<?php 
    $DOM = new DOMDocument();
    $html = file_get_contents("index.html");
    @$DOM->loadHTML($html);
    $finder = new DomXPath($DOM);
    $idname = 'banco_de_dados';
    
    $nodes = $finder->query("//*[contains(@id, '$idname')]");

    foreach ($nodes as $node) 
    {
        echo $idname;
      $result=$result.$node->nodeValue.",";
    }
    $partes = explode(',',$result);
    $textoSpan=$partes[8];


    echo $textoSpan;
 class Aluno

 {
    public $MATRICULA_ALUNO;
    public $ID_CURSO;
    public $PRIMEIRO_NOME;
    public $ULTIMO_NOME;
	public $IMAGEM;
	public $DESCRICAO;
	public $LINKEDIN;
	public $INSTA;
	public $GITHUB;

    public function teste()
    {

    }
 }   
?>