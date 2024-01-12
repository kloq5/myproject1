
setTimeout(function() {
  var lod = document.getElementById('loader');
  var cont = document.getElementById('content');
  
  if (lod && cont) {
    lod.style.display = 'none';
    cont.style.display = 'block';
  } else {
    console.error("One or both elements not found.");
  }
}, 1000);
