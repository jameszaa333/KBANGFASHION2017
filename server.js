const express = require('express')
const { twig } = require('twig')

const app = express()

const homeController = require('./controllers/home.controller')
const aboutusController = require('./controllers/aboutus.controller')

app.set('view engine', 'twig')

app.get('/', function(req, res) {
	res.send('Back-end มาแล้วจ้า')
})

app.get('/aboutus', aboutusController.index)

app.use('/assets', express.static(__dirname + '/static/assets', {
	maxAge: 86400000
}))

app.use('/css', express.static(__dirname + '/static/css', {
	maxAge: 86400000
}))

app.use('/js', express.static(__dirname + '/static/js', {
	maxAge: 86400000
}))

app.listen(8000, function(err) {
	console.log('Server is running on port 8000')
})