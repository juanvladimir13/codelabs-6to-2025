document.addEventListener('DOMContentLoaded', function () {
  const keyValue = 'data';

  const $btnWrite = document.getElementById("btnWrite");
  const $btnRead = document.getElementById("btnRead");

  $btnWrite.addEventListener('click', function (evt) {
    const $inputWrite = document.getElementById("inputWrite");

    const value = $inputWrite.value;
    escribirLocalStorage(keyValue, value);
  });

  $btnRead.addEventListener('click', function (evt) {
    const $outputRead = document.getElementById("outputRead");

    const value = leerLocalStorage(keyValue);
    $outputRead.textContent = value;
  });
});
