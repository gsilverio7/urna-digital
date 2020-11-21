y = "";
i = 0;

function addNum(x){

    if (i === 0){
        document.getElementById("dgts").innerHTML = y + x;
        y = y + x;
    }

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