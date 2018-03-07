$(document).ready(function () {
    var input = document.querySelector('.fileImg');
    var envio = document.querySelector('#envioImg');
    var preview = document.querySelector('.preview');
    var desactivar = document.querySelector('.desactivar');
        input.style.opacity = 0;
        preview.style.opacity = 0;
    input.addEventListener('change', updateImageDisplay);    
    //envio.addEventListener('submit', validar);
  
    //function validar(evento) {
    //    var valImg = updateImageDisplay();
    //    
    //    if (!valImg) {
    //          evento.preventDefault();
    //      }
    //}
  
  function updateImageDisplay() {
        while(preview.firstChild) {
          preview.removeChild(preview.firstChild);
        }
      
        var curFiles = input.files;
        if(curFiles.length === 0) {
          var para = document.createElement('p');
          para.textContent = 'No has seleccionado ningun fichero';
          preview.appendChild(para);
          preview.style.opacity = 1;
        } else {
          var list = document.createElement('ol');
          preview.appendChild(list);
          for(var i = 0; i < curFiles.length; i++) {
            var listItem = document.createElement('li');
            var para = document.createElement('p');
            if(validFileType(curFiles[i])) {
              para.textContent = 'Nombre Fichero: ' + curFiles[i].name + ', Tamaño: ' + returnFileSize(curFiles[i].size) + '.';
              var image = document.createElement('img');
              image.src = window.URL.createObjectURL(curFiles[i]);
      
              listItem.appendChild(image);
              listItem.appendChild(para);
              preview.style.opacity = 1;
              preview.style.width = '30%';
              document.getElementById('envioImg').style.visibility = 'visible';
              //return true;
            } else {
              para.textContent = 'Fichero ' + curFiles[i].name + ': No valido este tipo. Actualiza la seleccion.';
              listItem.appendChild(para);
              preview.style.opacity = 1;
              document.getElementById('envioImg').style.visibility = 'hidden';
              //return false;
            }
      
            list.appendChild(listItem);
          }
        }
      }
  
  var fileTypes = [
        'image/jpeg',
        'image/pjpeg',
        'image/png',
        'image/gif'
      ]
      
      function validFileType(file) {
        for(var i = 0; i < fileTypes.length; i++) {
          if(file.type === fileTypes[i]) {
            return true;
          }
        }
        return false;
      }
      
      function returnFileSize(number) {
        if(number < 1024) {
          return number + 'bytes';
        } else if(number > 1024 && number < 1048576) {
          return (number/1024).toFixed(1) + 'KB';
        } else if(number > 1048576) {
          return (number/1048576).toFixed(1) + 'MB';
        }
      }
  
});