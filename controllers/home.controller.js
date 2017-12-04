exports.index = function(req, res) {
	let content = {
		banner: [
			{
				id: 1,
				url: '//'
			},
			{
				id: 2,
				url: '//'
			}
		]
	}
	res.json(content)
}