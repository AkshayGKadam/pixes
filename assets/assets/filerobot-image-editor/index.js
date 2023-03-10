const config = {
  cloudimage: {
      token: 'dabkfabvu'
  }
  };
  const onComplete = (url, file) => {
  // console.log("the file url is: ", url);
  // console.log("the main file: ", file);
  }
  const onBeforeComplete = (props) => {
  let imageBase64 = props.canvas.toDataURL()
  // console.log("props is: ", props);
  // console.log("props is: ", props.canvas.toDataURL());
  // console.log(base64ToBlob(imageBase64));

  const formdata = new FormData
  formdata.append('artworkfile', base64ToBlob(imageBase64));
  formdata.append('imageName', 'profilephotos/' + props.imageName)
  $('#custom-loader').css('width','100%');
  $.ajax({
      type: "POST",
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      url: base_url + "upload-profile-photo",
      data: formdata,
      contentType: false,
      processData: false,
      success: function(response){
          $('#custom-loader').css('width','0');
          window.location.href = base_url + "showprofile";
      },
  });
  }

  let imagesToEdit = document.getElementsByClassName('image-to-edit')
  for (let i = 0; i < imagesToEdit.length; i++) {
  const element = imagesToEdit[i];
  element.onclick = function () {
      let image = this.getElementsByTagName('img')[0]
      const ImageEditor = new FilerobotImageEditor(config, {
      onComplete: onComplete,
      onBeforeComplete: onBeforeComplete,
      onClose: () => {
          ImageEditor.unmount()
      }
      });
      ImageEditor.open(image.src);
      
  }
  
  }

  const base64ToBlob = (base64) => {
  const bytes = atob(base64.split(',')[1]);
  const mime_type = base64.split(',')[0].split(';')[0].split(':')[1]
  const aB = new ArrayBuffer(bytes.length)
  const u8B = new Uint8Array(aB)
  for (let i = 0; i < bytes.length; i++) {
      u8B[i] = bytes.charCodeAt(i)
  }
  return new Blob([aB], {type: mime_type})
  }