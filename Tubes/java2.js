var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

keyword.addEventListener('keyup', function () {
  var xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  };

  xhr.open('GET', 'ajax/productsearch.php?keyword=' + keyword.value, true);
  xhr.send();
});

const header = document.querySelector('header');

window.addEventListener('scroll', function () {
  header.classList.toggle('sticky', this.window.scrollY > 0);
});
