/*Esta funcion permite obtener el valor del select de html(onchange)*/
let originalPrice;
let ivaCalculate;

var lista = [];
function getValueType (paellaType){

	this.paellaType = paellaType;
	lista.push(paellaType);
	console.log(lista);
}

function getValuePrice(paellaPrice){

	this.paellaPrice = paellaPrice;
	ivaCalculate = Math.round((this.paellaPrice.value * 19) / 100);
	originalPrice = this.paellaPrice.value - ivaCalculate;
}

function getValueCoin(typeCoin){
	this.typeCoin = typeCoin;
}

function buildPaella(){

	/*Construccion de paella*/
	for (i = 0; i<lista.length(); i++){
		var factory = executeFactory(this.paellaType.value);
		var paellaProduct = generatePaella(factory.type);
		var micarrito = new buildShoppingCar(factory.type, paellaProduct);
	}
	console.log(paellaProduct);

	/*llamamdo a patrones de diseño prototype y singleton*/
	var buildBase = produceBase(); //prototype
	var executeSingle = executeSingleton();
	console.log(buildBase);
	console.log(executeSingle);

	/*validacion de tipo de moneda para llamado del adaptador*/
	if(this.typeCoin.value == "dolar"){
		console.log("Precio en dolares con iva " + new CalculatePriceDolar().newCalculateDolar(originalPrice));
	}else if(this.typeCoin.value == "euro"){
		console.log("Precio en dolares con iva " + new CalculatePriceEuro().newCalculateEuro(originalPrice));
	}

	console.log(micarrito);
	console.log("Precio Original " + originalPrice);
	console.log("Precio Iva " + ivaCalculate);
}