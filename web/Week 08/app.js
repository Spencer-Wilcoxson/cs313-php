var http = require('http');
var url = require('url');

function callPage(callback) {
   http.createServer(callback).listen(1337, '127.0.0.1'); 
}

function loadPage(req, res) {
	var path = url.parse(req.url, true);
	path = path.pathname;
	if (path == "/home") {
		home(res);
	}
	else if (path == "/getData") {
		getData(res);
	}
	else {
		errorPage(res);
	}
}

function home(res) {
	res.writeHead(200, { 'Content-Type': 'text/html'});
	res.end('<h1>Welcome Home</h1>');
}

function getData(res) {
	res.writeHead(200, { 'Content-Type': 'application/json'});
	var obj = {"name":"Wilcoxson", "class":"cs313"};
	res.end(JSON.stringify(obj));
}

function errorPage(res) {
	res.writeHead(404, { 'Content-Type': 'text/plain'});
	res.end('Page Not Found');
}

callPage(loadPage);

