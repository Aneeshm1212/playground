
//const RecordFunc =() =>{

    const click = document.querySelector('#c');
    const stopr = document.querySelector('#d');
    var chunks =[]
   
    click.addEventListener('click',()=>{
      navigator.mediaDevices.getUserMedia({audio:true,video:true}).then((media)=>{
        // const videoog = document.querySelector('#yourpic')
        // videoog.srcObject = media
        // videoog.load()
        // videoog.onloadeddata =()=>{
        //   videoog.play()
        // }
        
        var mediaRecorder = new MediaRecorder(media,{mimeType: 'video/webm; codecs=vp9'});
        mediaRecorder.start()
        mediaRecorder.addEventListener('dataavailable',(e)=>{
         chunks.push(e.data)
        })
        stopr.addEventListener('click',(d)=>{
          mediaRecorder.stop()
         })
        mediaRecorder.addEventListener('stop',(e)=>{
        var values =window.URL.createObjectURL(new Blob(chunks,{type:'video/webm'}))
        chunks = [];
        

    // const video = document.querySelector('#yourpic1')
    //   video.src = values;
    //   var file = new File([values], "name.mp4");
    //   video.load();
    //   video.onloadeddata = function() {
    //       video.play();
    //   }
     
         })

      }).catch((err)=>{
        console.log(err)
      })
    })
  //}