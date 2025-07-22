document.addEventListener('DOMContentLoaded', function () {
  const keyEstudiante = 'estudiante-bth';
  // Boton que escribe en localstorage
  const $btnWrite = document.getElementById("btnWrite");
  // Boton que lee de localstorage
  const $btnRead = document.getElementById("btnRead");

  const escribirEstudiante = () => {
    // Leer datos del formulario
    const $inputNombreCompleto = document.getElementById("inputNombreCompleto");
    const $inputEdad = document.getElementById("inputEdad");
    const $inputUnidadEducativa = document.getElementById("inputUnidadEducativa");
    const $inputFecha = document.getElementById("inputFecha");

    const nombreCompleto = $inputNombreCompleto.value;
    const edad = $inputEdad.value;
    const unidadEducativaId = $inputUnidadEducativa.value;
    const unidadEducativa = $inputUnidadEducativa.options[$inputUnidadEducativa.selectedIndex].text;
    const fecha = $inputFecha.value;
    const estudiante = {
      nombreCompleto: nombreCompleto,
      edad: edad,
      unidadEducativaId: unidadEducativaId,
      unidadEducativa: unidadEducativa,
      fecha: fecha
    };

    escribirLocalStorage(keyEstudiante, estudiante, true);
  }

  const mostrarEstudiante = () => {
    // Elementos donde se visualizara los datos
    const $outputNombreCompleto = document.getElementById("outputNombreCompleto");
    const $outputEdad = document.getElementById("outputEdad");
    const $outputUnidadEducativa = document.getElementById("outputUnidadEducativa");
    const $outputFecha = document.getElementById("outputFecha");

    const estudiante = leerLocalStorage(keyEstudiante, true);
    $outputNombreCompleto.textContent = estudiante.nombreCompleto;
    $outputEdad.textContent = estudiante.edad;
    $outputUnidadEducativa.textContent = estudiante.unidadEducativa;
    $outputFecha.textContent = estudiante.fecha;
  }

  $btnWrite.addEventListener('click', function (evt) {
    escribirEstudiante();
  });

  $btnRead.addEventListener('click', function (evt) {
    mostrarEstudiante();
  });
});
