$(document).ready(function(){
    PartesDiarias.ValidacionGeneral('form-general');//form-general es la id del formulario que queremos validar
    $('#foto').fileinput({       
        language: 'es',     //lenguaje
        allowedFileExtensions: ['jpg', 'jpeg', 'png'], //archivos permitidos
        maxFileSize: 3000,  //tamaño maximo 3mb
        showUpload: false,  //no mostratra el boton upload
        showClose: false,   //no mostratra el boton close
        initialPreviewFileType: true,
        //previewFileType: 'image',
        initialPreviewAsData: true,     //mostrar una imagen previa
        dropZoneEnabled: true,     //permitir arrastrar imagenes
        theme: "fa",    //para llamar iconos fa
    });
  });