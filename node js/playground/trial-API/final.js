const express = require('express')
var bodyParser = require('body-parser')



 

const cors = require('cors')
const { urlencoded } = require('express')
const app = express()
const port = 8000
app.use(cors())
app.use(express.urlencoded({
    extended: true
  }))
app.use(express.json())

app.get('/', (req, res) => res.send('Hello World!'))

app.post('/store',(req,res)=>{
    // var result  = req.body.blob
    // console.log((req.body))
    console.log(req)
    res.send("good")
})
app.listen(port, () => console.log(`Example app listening on port port!`))