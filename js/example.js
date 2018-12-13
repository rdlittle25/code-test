const outputArray = (inputObject) => { 
	if(typeof inputObject !== 'object')
		throw new TypeError();
	
	if(Object.values(inputObject).length === 0)
		throw new TypeError();
	
	return Object.entries(inputObject);

};
 
module.exports = {
  outputArray
}
