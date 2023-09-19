y = "";
i = 0;

window.onload = function() {
  const children = document.getElementById('teclas').children;
  console.log(children);
  // children.forEach(child => {
  //   child.addEventListener('click', alert('rte'));
  // });
  for (let i = 0; i < children.length; i++) {
    children[i].addEventListener('click', apertarTecla);
  }
}

function apertarTecla(e){
  new Audio('/assets/sounds/tecla.mp3').play();
  e.target.classList.add('apertarTecla');
  setTimeout(() => {
    e.target.classList.remove('apertarTecla');
  }, 100)
}

function addNum(x){

    if (i === 0){
        document.getElementById("dgts").innerHTML = y + x;
        y = y + x;
    }

    /*
    if (y.length === 2) {
        i = 1;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("tela").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET", "model.php?q=" + y, true);
        xmlhttp.send();
    }
    */
}

function corrige(){
    y = "";
    document.getElementById("foto").innerHTML = "";
    document.getElementById("dgts").innerHTML = y;
    document.getElementById("dnome").innerHTML = "";
    document.getElementById("dnome2").innerHTML = "";
    document.getElementById("dinfo").innerHTML = "";
    i = 0;
}

function branco(){
  if (i === 0){
  y = "brc";
  document.getElementById("foto").innerHTML = "";
  document.getElementById("dgts").innerHTML = y;
  document.getElementById("dnome").innerHTML = "VOTO EM BRANCO";
  document.getElementById("dnome2").innerHTML = "";
  document.getElementById("dinfo").innerHTML = "";
  i = 1;
  }
}

function confirma(){
  new Audio('/assets/sounds/urna.mp3').play();

  if (y.length >= 2){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById("tela").innerHTML = 'Voto computado com sucesso!<br>A página irá recarregar em breve.';
          setTimeout(function() {
            location.reload();
          }, 2000);
      }
    };
    xmlhttp.open("GET", "counter.php?q=" + y, true);
    xmlhttp.send();
        
  }

  else {
    alert ('Antes você precisa concluir seu voto!');
  }
}