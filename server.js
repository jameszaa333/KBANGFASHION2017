const express = require('express')

const app = express()

const homeController = require('./controllers/home.controller')

app.get('/', function(req, res) {
	res.send('Back-end มาแล้วจ้า')
})

app.get('/home', homeController.index)

app.listen(8000, function(err) {
	console.log('Server is running on port 8000')
})