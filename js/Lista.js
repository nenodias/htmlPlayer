var ListaMusicas = new function() {
    this.valores = [];
    this.index = 0;
    this.size = function(){
        return this.valores.length;
    };
    this.get = function (obj) {
        return this.valores[obj];
    };
    this.add = function (obj) {
        this.valores.push(obj);
        this.index = this.valores.length-1;
    };
    this.remove = function(obj){
    	for(var i = 0; i < this.valores.length;i++){
    		if(this.valores[i] === obj){
    			this.valores.splice(i,1);
    			break;
    		}
    	}
    }
    this.contains = function(valor){
    	for(var i = 0; i < this.valores.length;i++){
    		if(this.valores[i] === valor){
    			return true;
                this.index = i;
    			break;
    		}
    	}
    	return false;
    }
}