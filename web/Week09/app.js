const express = require('express');
const app = express();
const path = require('path');
const bodyParser = require('body-parser');

app.use(express.static(path.join(__dirname, '/public')));
app.set('view engine', 'ejs');
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true}));

app.get('/', function (req, res) {
	res.render('week09');
});

app.listen(3000, () => console.log('Example is running'));

app.post('/results', function (req, res) {
	var weight = req.body.weight;
	var type = req.body.type;
	res.render('results', {weight: weight,
	                       type: type,
						   price: getPrice(type, weight)});
});

function getPrice(type, weight) {
	var price = -1;
	switch(type) {
		case "stamped":
		   price = getStamped(weight);
		   break;
		case "metered":
		   price = getMetered(weight);
		   break;
		case "flats":
		   price = getFlats(weight);
		   break;
		case "parcels":
		   price = getParcels(weight);
		   break;
		default:
		   price = 0;
		   break;
	}
	
	return price;
}

function getStamped(weight) {
	var price = -1;
	switch(weight) {
		case "1":
		   price = 0.49;
		   break;
		case "2":
		   price = 0.70;
		   break;
		case "3":
		   price = 0.91;
		   break;
		case "3.5":
		   price = 1.12;
		   break;
		default:
		   price = -1;
		   break;
	}
	
	return price;
}

function getMetered(weight) {
	var price = -1;
	switch(weight) {
		case "1":
		   price = 0.46;
		   break;
		case "2":
		   price = 0.67;
		   break;
		case "3":
		   price = 0.88;
		   break;
		case "3.5":
		   price = 1.09;
		   break;
		default:
		   price = -1;
		   break;
	}
	
	return price;
}

function getFlats(weight) {
	var price = -1;
	switch(weight) {
		case "1":
		   price = 0.98;
		   break;
		case "2":
		   price = 1.19;
		   break;
		case "3":
		   price = 1.40;
		   break;
		case "4":
		   price = 1.61;
		   break;
		case "5":
		   price = 1.82;
		   break;
		case "6":
		   price = 2.03;
		   break;
		case "7":
		   price = 2.24;
		   break;
		case "8":
		   price = 2.45;
		   break;
		case "9":
		   price = 2.66;
		   break;
		case "10":
		   price = 2.87;
		   break;
		case "11":
		   price = 3.08;
		   break;
		case "12":
		   price = 3.29;
		   break;
		case "13":
		   price = 3.50;
		   break;
		default:
		   price = -1;
		   break;
	}
	
	return price;
}

function getParcels(weight) {
	var price = -1;
	switch(weight) {
		case "1":
		   price = 3.00;
		   break;
		case "2":
		   price = 3.00;
		   break;
		case "3":
		   price = 3.00;
		   break;
		case "4":
		   price = 3.00;
		   break;
		case "5":
		   price = 3.16;
		   break;
		case "6":
		   price = 3.32;
		   break;
		case "7":
		   price = 3.48;
		   break;
		case "8":
		   price = 3.64;
		   break;
		case "9":
		   price = 3.80;
		   break;
		case "10":
		   price = 3.96;
		   break;
		case "11":
		   price = 4.19;
		   break;
		case "12":
		   price = 4.36;
		   break;
		case "13":
		   price = 4.53;
		   break;
		default:
		   price = -1;
		   break;
	}
	
	return price;
}