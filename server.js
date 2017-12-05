const express = require('express')
const { twig } = require('twig')

const app = express()

app.set('view engine', 'twig')

const homeController = require('./controllers/home.controller')
const ourwebsiteController = require('./controllers/ourwebsite.controller')
const contactusController = require('./controllers/contactus.controller')
const termsofuseController = require('./controllers/termsofuse.controller')
const allclothesController = require('./controllers/allclothes.controller')
const bagsController = require('./controllers/bags.controller')
const alltopsController = require('./controllers/alltops.controller')
const allbottomsController = require('./controllers/allbottoms.controller')
const blousesController = require('./controllers/blouses.controller')
const allaccessoriesController = require('./controllers/allaccessories.controller')
const dressesController = require('./controllers/dresses.controller')
const tanksController = require('./controllers/tanks.controller')
const pantsController = require('./controllers/pants.controller')
const skirtsController = require('./controllers/skirts.controller')
const socksController = require('./controllers/socks.controller')
const shortsController = require('./controllers/shorts.controller')
const shoesController = require('./controllers/shoes.controller')
const winterController = require('./controllers/winter.controller')
const springsummerController = require('./controllers/springsummer.controller')
const newcollectionController = require('./controllers/newcollection.controller')
const customercareController = require('./controllers/customercare.controller')
const myaccountController = require('./controllers/myaccount.controller')
const albumsController = require('./controllers/albums.controller')


app.get('/', homeController.index)
app.get('/our-website', ourwebsiteController.index)
app.get('/contact-us', contactusController.index)
app.get('/terms-of-use', termsofuseController.index)
app.get('/all-clothes', allclothesController.index)
app.get('/bags', bagsController.index)
app.get('/all-tops', alltopsController.index)
app.get('/all-bottoms', allbottomsController.index)
app.get('/blouses', blousesController.index)
app.get('/all-accessories', allaccessoriesController.index)
app.get('/dresses', dressesController.index)
app.get('/tanks', tanksController.index)
app.get('/pants', pantsController.index)
app.get('/skirts', skirtsController.index)
app.get('/socks', socksController.index)
app.get('/shorts', shortsController.index)
app.get('/shoes', shoesController.index)
app.get('/winter-is-coming', winterController.index)
app.get('/spring-summer-2018', springsummerController.index)
app.get('/new-collection', newcollectionController.index)
app.get('/customer-care', customercareController.index)
app.get('/my-account', myaccountController.index)
app.get('/albums-index', albumsController.index)



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