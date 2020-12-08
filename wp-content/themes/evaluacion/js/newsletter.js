
  document.getElementById('postForm').addEventListener('submit', postName);

  function postName(e){
    e.preventDefault();

    var name = document.getElementById('correo').value;
    var params = "name="+name;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'http://localhost/evaluacion', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onload = function(){
      console.log(this.responseText);
    }

    xhr.send(params);
  }
