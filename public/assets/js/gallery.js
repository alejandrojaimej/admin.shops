document.querySelectorAll('#sortable .image').forEach((el, i)=>{
    el.setAttribute('data-position', i);
});
$("#sortable").sortable({
    revert       : true,
    connectWith  : "#sortable",
    stop         : function(event,ui){ 
        document.querySelectorAll('#sortable .image').forEach((el, i)=>{
            el.setAttribute('data-position', i);
            //update image position with ajax
            $.ajax({
              url: '/gallery/updateImagePosition',
              type: "post",
              data: {id: el.getAttribute('data-id'), position:i},
              success: function (response) {
              },
              error: function(jqXHR, textStatus, errorThrown) {
              }
            });
            
        });
     }
});

function borrarImagen(){
  let img = $(this).parent().find('.image');
  let imgId = img.attr('data-id');
  let userId = img.attr('data-uid');
  let fData = new FormData();
  fData.append('id', imgId);
  fData.append('userId', userId);
  $.ajax({
    url: '/gallery/deleteImage',
    method: 'POST',
    processData: false,
    contentType: false,
    type: 'POST',
    enctype: 'multipart/form-data',
    data: fData,
    success: function (response) {
      $('#sortable').find($(img).parent()).remove();
    },
    error: function(jqXHR, textStatus, errorThrown) {
    }
  });
}

function imagenFavorita(){
  let img = $(this).parent().find('.image');
  let imgId = img.attr('data-id');
  let userId = img.attr('data-uid');
  let fData = new FormData();
  fData.append('id', imgId);
  fData.append('userId', userId);
  $.ajax({
    url: '/gallery/setFavoriteImage',
    method: 'POST',
    processData: false,
    contentType: false,
    type: 'POST',
    enctype: 'multipart/form-data',
    data: fData,
    success: function (response) {
      $('#sortable').find('.image.favorite').removeClass('favorite');
      $(img).addClass('favorite');
    },
    error: function(jqXHR, textStatus, errorThrown) {
    }
  });
}


$('#sortable .deleteImage').on('click', borrarImagen);
$('#sortable .favoriteImage').on('click', imagenFavorita);
//Desactivar la función "autodiscover de Dropzone" para inicializarla manualmente con eventos custom
Dropzone.autoDiscover = false;
let dropzone = new Dropzone('#demo-upload', {
    parallelUploads: 2,
    thumbnailHeight: 120,
    thumbnailWidth: 120,
    maxFilesize: 3,
    filesizeBase: 1000,
    thumbnail: function(file, dataUrl) {
      if (file.previewElement) {
        let images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
        for (let i = 0; i < images.length; i++) {
          let thumbnailElement = images[i];
          thumbnailElement.alt = file.name;
          thumbnailElement.src = dataUrl;
        }
        setTimeout(function() { file.previewElement.classList.add("dz-image-preview"); }, 1);
      }
    }
});
  

  
  // Now fake the file upload, since GitHub does not handle file uploads
  // and returns a 404
  
  let minSteps = 6,
      maxSteps = 60,
      timeBetweenSteps = 100,
      bytesPerStep = 100000;
  
  dropzone.uploadFiles = function(files) {
    let self = this;
    for (let i = 0; i < files.length; i++) {
      let userId = $('#dropzone').attr('data-uid');
      let file = files[i];
      let fData = new FormData();
      fData.append('image', file);
      fData.append('uId', userId);
      
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
          let res = JSON.parse(response);
          let newImage = $('<div class="col-md-2 ui-sortable-handle" style="height: 300px;width: 300px;line-height: 300px;font-size: 32px;">'+
          '<img class="image" src="/assets/images/user/'+userId+'/gallery/'+res[1]+'" data-id="'+res[0]+'" data-uid="'+userId+'" alt="'+res[1]+'" style="width:100%;" data-position="6">'+
          '<div class="deleteImage" title="borrar imagen"><i class="fa fa-trash-o"></i></div>'+
          '<div class="favoriteImage" title="imagen favorita"><i class="fa fa-star"></i></div>'+
          '</div>');
          $(newImage).find('.deleteImage').on('click', borrarImagen);
          $(newImage).find('.favoriteImage').on('click', imagenFavorita);
          $('#sortable').append(newImage);
        },
        error: function(jqXHR, textStatus, errorThrown) {
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

