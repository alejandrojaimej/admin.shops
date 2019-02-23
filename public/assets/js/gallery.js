document.querySelectorAll('#sortable .image').forEach((el, i)=>{
    el.setAttribute('data-position', i);
});
$("#sortable").sortable({
    revert       : true,
    connectWith  : "#sortable",
    stop         : function(event,ui){ 
        document.querySelectorAll('#sortable .image').forEach((el, i)=>{
            el.setAttribute('data-position', i);
            console.log('actualizar posicion de imagenes')
            //update image position with ajax
            $.ajax({
              url: '/gallery/updateImagePosition',
              type: "post",
              data: {id: el.getAttribute('data-id'), position:i},
              success: function (response) {
                 console.log(response);
              },
              error: function(jqXHR, textStatus, errorThrown) {
                 console.log(textStatus, errorThrown);
              }
            });
            
        });
     }
});
//Desactivar la función "autodiscover de Dropzone" para inicializarla manualmente con eventos custom
Dropzone.autoDiscover = false;
var dropzone = new Dropzone('#demo-upload', {
    parallelUploads: 2,
    thumbnailHeight: 120,
    thumbnailWidth: 120,
    maxFilesize: 3,
    filesizeBase: 1000,
    thumbnail: function(file, dataUrl) {
      if (file.previewElement) {
        var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
        for (var i = 0; i < images.length; i++) {
          var thumbnailElement = images[i];
          thumbnailElement.alt = file.name;
          thumbnailElement.src = dataUrl;
        }
        setTimeout(function() { file.previewElement.classList.add("dz-image-preview"); }, 1);
      }
    }
});
  

  
  // Now fake the file upload, since GitHub does not handle file uploads
  // and returns a 404
  
  var minSteps = 6,
      maxSteps = 60,
      timeBetweenSteps = 100,
      bytesPerStep = 100000;
  
  dropzone.uploadFiles = function(files) {
    var self = this;
    console.log('funcion de subir imagen')
    for (var i = 0; i < files.length; i++) {
  
      var file = files[i];
      var fData = new FormData();
      fData.append('image', file);
      fData.append('uId', $('#dropzone').attr('data-uid'));
      console.log(fData);
      
      $.ajax({
        url: '/gallery/uploadImage',
        method: 'POST',
        processData: false,
        contentType: false,
        type: 'POST',
        enctype: 'multipart/form-data',
        data: fData,
        success: function (response) {
          file.status = Dropzone.SUCCESS;
          self.emit("success", file, 'success', null);
          self.emit("complete", file);
          self.processQueue();
          console.log(response)
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        }
      });
      /*totalSteps = Math.round(Math.min(maxSteps, Math.max(minSteps, file.size / bytesPerStep)));
  
      for (var step = 0; step < totalSteps; step++) {
        var duration = timeBetweenSteps * (step + 1);
        setTimeout(function(file, totalSteps, step) {
          return function() {
            file.upload = {
              progress: 100 * (step + 1) / totalSteps,
              total: file.size,
              bytesSent: (step + 1) * file.size / totalSteps
            };
  
            self.emit('uploadprogress', file, file.upload.progress, file.upload.bytesSent);
            if (file.upload.progress == 100) {
              file.status = Dropzone.SUCCESS;
              self.emit("success", file, 'success', null);
              self.emit("complete", file);
              self.processQueue();
              //document.getElementsByClassName("dz-success-mark").style.opacity = "1";
            }
          };
        }(file, totalSteps, step), duration);
      }*/
    }
  }
  