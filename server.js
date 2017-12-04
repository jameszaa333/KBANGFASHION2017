const express = require('express')
const { twig } = require('twig')

const app = express()

const homeController = require('./controllers/home.controller')
const ourwebsiteController = require('./controllers/ourwebsite.controller')
const contactusController = require('./controllers/contactus.controller')
const termofuseController = require('./controllers/termofuse.controller')
const allclothesController = require('./controllers/allclothes.controller')

const testController = require('./controllers/test.controller')

app.set('view engine', 'twig')

app.get('/', homeController.index)
app.get('/our-website', ourwebsiteController.index)
app.get('/contact-us', contactusController.index)
app.get('/terms-of-use', termofuseController.index)
app.get('/all-clothes', allclothesController.index)

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