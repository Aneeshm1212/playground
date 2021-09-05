
const express = require('express')
 const app = express()
 const port = 3000
 const patht = __dirname;
 const {spawn}=require('child_process');
 app.use(express.static(patht))
 

 app.get('/send.html', (req, res) => {
 //   if( req.body.video.srcObject !== null)
  //  {
  //      const dataa = req.body.video.srcObject ;
  //      res.send(dataa)
  //  }
  
     
  
 })
 

 app.listen(port, () => console.log(`Example app listening on port port!`))