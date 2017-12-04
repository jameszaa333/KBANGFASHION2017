const express = require('express')
const { twig } = require('twig')

const app = express()

const homeController = require('./controllers/home.controller')
const aboutusController = require('./controllers/aboutus.controller')
const testController = require('./controllers/test.controller')

app.set('view engine', 'twig')

app.get('/', homeController.index)

app.get('/about-us', aboutusController.index)

app.get('/test', testController.index)

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