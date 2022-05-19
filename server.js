const express = require('express')
require('dotenv').config()
const bodyParser = require('body-parser')

const UsersRoute = require('./routes/users')
const mysqlConnection = require('./db')
var app = express()
app.use(bodyParser.json())
app.use('/users', UsersRoute)
app.listen(process.env.APP_PORT, () => {
	console.log('listening on port ' + process.env.APP_PORT)
})
