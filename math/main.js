const input_number_1 = document.getElementById('input_number_1');
const input_number_ = document.getElementById('input_number_2');
const res = document.getElementById('res');
const add = document.getElementById('btnadd');
const minus = document.getElementById('btnminus');
const multiple = document.getElementById('multiple');
const divide = document.getElementById('divide');
add.onclick = function (){
	res.innerHTML = parseInt(input_number_1.value) + parseInt(input_number_2.value);
}
minus.onclick = function (){
	res.innerHTML = parseInt(input_number_1.value) -  parseInt(input_number_2.value);
}
multiple.onclick = function (){
	res.innerHTML = parseInt(input_number_1.value) *  parseInt(input_number_2.value);
}
divide.onclick = function (){
	res.innerHTML = parseInt(input_number_1.value) /  parseInt(input_number_2.value);
}
