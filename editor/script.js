let fileInput = document.getElementById('fileInput');
let editor = document.getElementById('editor');
let currentFile = null;

function openFile() {
  fileInput.click();
}

fileInput.addEventListener('change', function(e) {
  let file = e.target.files[0];
  let reader = new FileReader();
  reader.onload = function(e) {
    editor.value = e.target.result;
    currentFile = file;
  };
  reader.readAsText(file);
});

function saveFile(normalSave) {
  let content = editor.value;
  if (currentFile && !normalSave) {
    // Normaler Speichern
    let blob = new Blob([content], {type: 'text/plain'});
    let url = URL.createObjectURL(blob);
    let link = document.createElement('a');
    link.href = url;
    link.download = currentFile.name;
    link.click();
  } else {
    // Speichern Unter
    let fileName = prompt('Dateiname eingeben:', currentFile ? currentFile.name : 'datei.txt');
    if (fileName) {
      let blob = new Blob([content], {type: 'text/plain'});
      let url = URL.createObjectURL(blob);
      let link = document.createElement('a');
      link.href = url;
      link.download = fileName;
      link.click();
      currentFile = new File([content], fileName);
    }
  }
}
