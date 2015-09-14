var http = require('http');
var fs = require('fs');
http.createServer(function (req, res) {
  console.log(req.url);
  res.writeHead(200, {});
	fs.readFile('./v2/'+req.url, function(e,d) {
  res.end(d);
});
}).listen(8555, 'localhost');

