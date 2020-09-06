/**$('#meuFrame').load('http://www.mywebsite.com/portfolio.php #portfolio-sports');*/

$("#meuFrame").load( "https://www.saude.gov.br/saude-de-a-z/vacinacao/calendario-vacinacao #content-section", function() {
    alert( "Load was performed." );
  });


  //Pegar tamanho da tela
  var windowWidth = window.innerWidth;
  var windowHeight = window.innerHeight;

  var myFrame = document.getElementById("myFrame")
  function carregaAdolescente(){
     myFrame.src = "adolescente.html"
     if(windowWidth <= "576"){
      myFrame.style.height = "1370px"
    }else{
      myFrame.style.height = "812px"
    }
  }

  function carregaAdulto(){
    myFrame.src = "adulto.html"
    if(windowWidth <= "576"){
      myFrame.style.height = "870px"
    }else{
      myFrame.style.height = "445px"
    }
  }

  function carregaCrianca(){
    myFrame.src = "crianca.html";
    if(windowWidth <= "576"){
      myFrame.style.height = "3100px"
    }else{
      myFrame.style.height = "1755px"
    }
    
}

var screenWidth = screen.width;
var screenHeight = screen.height

var janela = "Window1: " + windowWidth +" x "+ windowHeight;

var screen = "Screen1: " + screenWidth +" x "+ screenHeight;


/* ADD dropup */

function adicionaDropup(id){
    var elemento = document.getElementById(id);
    if (elemento.classList)
        elemento.classList.toggle('dropup');
}