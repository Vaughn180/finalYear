const http = require('http')
const fs = require('fs')
const port = 1028

const server = http.createServer(function(req,res) {

    res.writeHead(200, {'Content-Type': 'text/html'})
    fs.readFile('MainPage.html', function(error, data){
        if (error){
            res.writeHead(404)
            res.writeHead('Error, File not found')
        } else {
            res.write(data)
        }
        res.end()
    })


    //res.write('Hello Node')
    //res.end()
})


server.listen(port, function(error) {
    if (error) {
        console.log('Something went wrong', error)
    } else {

        console.log('Server is listening on port ', port)
    }

})