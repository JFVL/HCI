function shoppingCar(typePaella){ 
    this.typePaella = typePaella;
    var arrayElements = [];

    this.compositeProto = function(){
        var objectComposite = {

            add: function(product){
                console.log(product);
                arrayElements.push(product);
                return arrayElements;
            },

            remove: function (arrayElements){

                arrayElements.split(0, arrayElements.length);
                arrayElements.add(product);
                return arrayElements;
            }
        }

        return objectComposite;
    }
}

function buildShoppingCar(typeProduct, product){//tipo de producto, producto){

    var car = new shoppingCar(typeProduct); 
    var resultCar = car.compositeProto().add(product);

    return resultCar;
}

