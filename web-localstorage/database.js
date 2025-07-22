function escribirLocalStorage(id, data, isObject = false) {
  if (isObject) {
    data = JSON.stringify(data);
  }
  localStorage.setItem(id, data);
}

function leerLocalStorage(id, isObject = false) {
  let valor = localStorage.getItem(id);
  if (isObject) {
    valor = JSON.parse(valor);
  }
  return valor;
}